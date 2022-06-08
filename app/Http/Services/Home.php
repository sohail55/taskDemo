<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Services;

/**
 * Description of Home
 *
 * @author 
 */

use App\Http\Services\Config;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Session;
use Validator;
use Response;
use Carbon\Carbon;
use App\MembersSignup;
use DB;
use Mail;
class Home extends Config
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProjects = $this->curl_request('TaskManager','GET',$data=null);
        $totalBranches = $this->curl_request('Branches','GET',$data=null);

        $allBranches = [];
        foreach($totalBranches as $branches) {
            if($branches['BranchTitle'] == 'No Branch' || $branches['BranchTitle'] == '' ){
                continue;
            }
            else {
                $allBranches[] = $branches;
            }
        }
        
        if(!empty($allProjects) && is_array($allProjects) && isset($allProjects['status']) && $allProjects['status'] == 200)
        {
            $results = $allProjects['data'];
            return view('dashboard',compact('results', 'allBranches'));
        }
    }

    public function plotsList()
    {
        return view('plots_list');
    }

    public function profile($id)
    {
        $appID = $id;
        return view('profile',compact('appID'));
    }

    public function editProfile($id)
    {
        $appID = $id;
        return view('edit_profile',compact('appID'));
    }

    public function newComplaint()
    {
        return view('complaint');
    }
        
    public function signUp()
    {
        return view('signup');
    }

    public function signIn()
    {
        return view('welcome');
    }

    public function Finance($id)
    {
        $branchID = !empty($id) ? $id : '';

        $BranchStatsData = $this->curl_request('ProjectInfo','GET','?Branchid='.$branchID);

        $totalBranches = $this->curl_request('Branches','GET',$data=null);
        $allBranches = [];
        foreach($totalBranches as $branches) {
            if($branches['BranchTitle'] == 'No Branch' || $branches['BranchTitle'] == '' ){
                continue;
            }
            else {
                $allBranches[] = $branches;
            }
        }
        if(!empty($BranchStatsData) && is_array($BranchStatsData) && isset($BranchStatsData['status']) && $BranchStatsData['status'] == 200)
        {
            $BranchStats = $BranchStatsData['data'];
            return view('allResult',compact('BranchStats','allBranches'));
        }
        //return view('allResult',compact('allBranches'));
    }

    public function Land($id) {

        $branchID = !empty($id) ? $id : '';

        $BranchStatsData = $this->curl_request('ProjectInfo','GET','?Branchid='.$branchID);

        $totalBranches = $this->curl_request('Branches','GET',$data=null);
        $allBranches = [];
        foreach($totalBranches as $branches) {
            if($branches['BranchTitle'] == 'No Branch' || $branches['BranchTitle'] == '' ){
                continue;
            }
            else {
                $allBranches[] = $branches;
            }
        }
    
        if(!empty($BranchStatsData) && is_array($BranchStatsData) && isset($BranchStatsData['status']) && $BranchStatsData['status'] == 200)
        {
            $BranchStats = $BranchStatsData['data'];
            return view('allResult',compact('BranchStats','allBranches'));
        }
    }

    public function transfer() {
        return view('transfer');
    }

    public function memberSignup() {
        $request_params = Request::input();
        unset($request_params['_token']);

        if(strlen($request_params['Cnic']) < 13) {
            return redirect('/signUp')->withInput($request_params)->with('error_message', 'Please enter 13 digit of your CNIC No.');
        }
        if($request_params['password'] != $request_params['retype_password'])
            return redirect('/signUp')->with('error_message', 'Your password does not matched.');

        $data['value']['UserName'] = $request_params['username'];
        $data['value']['Cnic'] = $request_params['Cnic'];
        $data['value']['pwd'] = $request_params['retype_password'];

        //$token = $this->getJWTToken();
        $userSignup = $this->curl_request('DealersSignup','POST',$data);
        //dd($data);
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, config('config.apis_url_live').'DealersSignup');
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
        // $headers = [
        //     'Content-Type: application/json',
        //     'Authorization: Bearer '.$token,

        // ];

        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // $server_output = curl_exec($ch) ;
        // curl_close ($ch);
        // $userSignup = json_decode($server_output, true);
        //dd($userSignup);

        if(!empty($userSignup) && !empty($userSignup['status']) && $userSignup['status'] != 400)
        {
            if($userSignup['status'] == 200) {
                return redirect()->route('signUp')->with('success_message', 'You have singed up successfully. To activate your Account please contact +92-61-111-111-189');
            }  
        }
        else {
            return redirect()->route('signUp')->with('error_message', $userSignup['message']);
        }
    }

    public function login() {
        $request_params = Request::input();
        unset($request_params['_token']);

        if(empty($request_params['password']) OR empty($request_params['username']))
            return redirect('/signUp')->with('error_message', 'Your password does not matched.');

        $data['value']['UserName'] = $request_params['username'];
        $data['value']['pwd'] = $request_params['password'];

        //$token = $this->getJWTToken();

        $userLogin = $this->curl_request('DealersLogin','POST',$data);

        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, config('config.apis_url_live').'DealersLogin/');
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
        // $headers = [
        //     'Content-Type: application/json',
        //     'Authorization: Bearer '.$token
        // ];

        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // $server_output = curl_exec($ch) ;
        // curl_close ($ch);
        // $userLogin = json_decode($server_output, true) ;

        if(!empty($userLogin) && is_array($userLogin) && isset($userLogin['status']) && $userLogin['status'] == 200)
        {
            if(empty($userLogin['message'])) {
              return redirect()->route('login')->with('error_message', $userLogin['message']);  
            }
            $newResult = [];
            $user_data = $userLogin['data'];
            foreach($user_data['RepInfo'] as $result) {
                if($result['Designation'] == 'CEO') {
                    continue;
                }
                $newResult[] = $result;
            }

            if(Session::has('userInfo')){
                Session::forget('userInfo');
            }else {
                $data = $userLogin['data'];
                $user_data = $userLogin['data'];
                
                Session::put('userInfo', $data);
                Session::put('dealersCompanyData', $data);
                Session::put('dealersRepData', $newResult);
            }

            $dealer_id =  isset($user_data['CompanyInfo']['PropertyDealerID']) ? $user_data['CompanyInfo']['PropertyDealerID'] : '';

           //  //dd($dealer_id);
            $dealersTransferData = $this->curl_request('DealersTfrSet','GET','?Userid='.$dealer_id);
           //  $ch = curl_init();
           //  curl_setopt($ch, CURLOPT_URL, config('config.apis_url_live').'DealersTfrSet?Userid='.$dealer_id);
           //  //curl_setopt($ch, CURLOPT_POST, 1);
           // // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
           //  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
           //  $headers = [
           //      'Content-Type: application/json',
           //      'Authorization: Bearer '.$token
           //  ];

           //  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
           //  $server_output = curl_exec($ch) ;
           //  curl_close ($ch);
           //  $dealersTransferData = json_decode($server_output, true);
            $upcomingTransferSets = [];
            if(!empty($dealersTransferData) && is_array($dealersTransferData) && isset($dealersTransferData['status']) && $dealersTransferData['status'] == 200) {
                foreach($dealersTransferData['data'] as $result) {
                    if($result['Status'] == 'Upcoming' || $result['Status'] == 'Pending' ) {
                        $upcomingTransferSets[] = $result;
                    }
                }
                //dd($upcomingTransferSet);
                Session::put('upcomingTransferSets', $upcomingTransferSets);
                return redirect()->route('dashboard')->with('success_message', 'You have logged in successfully.');   
            }
            return redirect()->route('dashboard')->with('success_message', 'You have logged in successfully.');
            //dd($dealersTransferData);
           //  if(!empty($dealersNDCs['data']))
           //      Session::put('dealersNDCs', $dealersNDCs['data']);

           
        }
        elseif(isset($userLogin['status']) && $userLogin['status'] == 400) {
            return redirect()->route('login')->with('error_message', $userLogin['message']);
        }
         else {  
            return redirect()->route('login')->with('error_message', $userLogin['message']);
        }
    }

    public function ndcView() {

        if(Session::has('dealersCompanyData')) {
            if(!empty(Session::get('dealersCompanyData.CompanyInfo.PropertyDealerID'))) {

                //$token = $this->getJWTToken();
                $ndcResults = $this->curl_request('DealersNDC','GET','?Userid='.Session::get('dealersCompanyData.CompanyInfo.PropertyDealerID'));
                // $ch = curl_init();
                // curl_setopt($ch, CURLOPT_URL, config('config.apis_url_live').'DealersNDC?Userid='.Session::get('dealersCompanyData.CompanyInfo.PropertyDealerID'));
                // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                // //curl_setopt($ch, CURLOPT_POST, 1);
                // //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
                // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
                // $headers = [
                //     'Content-Type: application/json',
                //     'Authorization: Bearer '.$token,
                // ];

                // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                // $server_output = curl_exec($ch) ;
                // curl_close ($ch);
                // $ndcResults = json_decode($server_output, true);
                $ndcStatus = isset($ndcResults['data']) ? $ndcResults['data'] : '';

                return view('ndcView', compact('ndcStatus'));
            }
        }
    }

    public function repList() {
        return view('rep_list');
    }
    
    public function plotVerifacation() {
        $dailyUsed = '';
        if(Session::has('dealersCompanyData')) {
            $dealer_id = !empty(Session::get('dealersCompanyData.UserInfo.UserID')) ? Session::get('dealersCompanyData.UserInfo.UserID') : '';
            if(!empty($dealer_id)) {
                $dailyUsed = $this->getPlotVerificationModel()->where('dealer_id','=',$dealer_id)->where('created_at','=',date('Y-m-d'))->count();
            }
        }

        // $request_params = Request::input();
        // if(!empty($request_params)) {
        //     //dd($request_params);
        //     unset($request_params['_token']);
        //     unset($request_params['ajax_submit']);

        //     $token = $this->getJWTToken();

        //     $ch = curl_init();
        //     curl_setopt($ch, CURLOPT_URL, config('config.apis_url_live').'PlotDetails?Refno='.$request_params['refernceNo'].'&cnic='.$request_params['cnic']);
        //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //     //curl_setopt($ch, CURLOPT_POST, 1);
        //    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); 
        //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
        //     $headers = [
        //         'Content-Type: application/json',
        //         'Authorization: Bearer '.$token,
        //     ];

        //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //     $server_output = curl_exec($ch) ;
        //     curl_close ($ch);
        //     $ledger = json_decode($server_output, true);
        //     if(!empty($ledger) && is_array($ledger) && isset($ledger['status']) && $ledger['status'] == 200){
        //         $memberLedgers =  $ledger['data'];
        //         return view('plotVerification', compact('memberLedgers'));  
        //     }
        //     else {
        //         return redirect()->route('plotVerification')->with('error_message', $ledger['message']);
        //     }
        // }
        // else {
            return view('plotVerification',compact('dailyUsed'));
        //}
    }

}
