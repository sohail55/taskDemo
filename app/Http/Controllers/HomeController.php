<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storePersonalInfo;
use App\Http\Requests\storeComplaintInfo;
use PDF;
use Mail;
use App\Mail\MyDemoMail;
use Validator;
use Session;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            return $this->getHomeService()->index();
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Finance($id = null) {
        try {
            return $this->getHomeService()->Finance($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Land($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function HR($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Administration($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function coord($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function IT($id = null) {
        try {
            //dd("test");
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Estate($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function planning($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Security($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Marketing($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function HQ($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Park($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Legal($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function specialProject($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function rumanza($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function transferRecord($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function Vigilance($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function buildingControl($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

    public function trafficSection($id = null) {
        try {
            return $this->getHomeService()->Land($id);
        } catch (\Illuminate\Database\QueryException $ex) {
            return $this->exception($ex);
        } catch (\Exception $ex) {
            return $this->exception($ex);
        }
    }

     

      
}
