@extends('layouts.main')
@section('content')
  
<div class="container-fluid">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <!-- <div class="page-header">
                <div class="page-title">
                    <h1>Hello, <span>Welcome Here</span></h1>
                </div>
            </div> -->
        </div>
        <!-- /# column -->
        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"> {{ str_replace('_',' ',Route::current()->getName()) }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /# column -->
    </div>
    <section id="main-content">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> {{ str_replace('_',' ',Route::current()->getName()) }} </h4>
                  <ul class="nav nav-pills m-t-30 m-b-30">
                    <li class=" nav-item"> <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">{{ $BranchStats[0]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">{{ $BranchStats[1]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">{{ $BranchStats[2]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-4" class="nav-link" data-toggle="tab" aria-expanded="true">{{ $BranchStats[3]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-5" class="nav-link" data-toggle="tab" aria-expanded="true">{{ $BranchStats[4]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-6" class="nav-link" data-toggle="tab" aria-expanded="true">{{ $BranchStats[5]['title'] }}</a> </li>
                    <li class="nav-item"> <a href="#navpills-7" class="nav-link" data-toggle="tab" aria-expanded="true">{{ $BranchStats[6]['title'] }}</a> </li>
                  </ul>
                  <div class="tab-content br-n pn">
                    <div id="navpills-1" class="tab-pane active">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail m-r-15"> </div>
                        <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          <p>
                            <br/> </p>
                        </div>
                      </div>
                    </div>
                    <div id="navpills-2" class="tab-pane">
                      <div class="row">
                        <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          <p>
                            <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                        </div>
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                      </div>
                    </div>
                    <div id="navpills-3" class="tab-pane">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                        <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          <p>
                            <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                        </div>
                      </div>
                    </div>
                    <div id="navpills-4" class="tab-pane">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                        <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          <p>
                            <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                        </div>
                      </div>
                    </div>
                    <div id="navpills-5" class="tab-pane">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                        <div class="col-md-8"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                          <p>
                            <br/> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                        </div>
                      </div>
                    </div>
                    <div id="navpills-6" class="tab-pane">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                        <div class="col-md-8"> test hererag a .
                          <p>
                            <br/> All Projects</p>
                        </div>
                      </div>
                    </div>
                    <div id="navpills-7" class="tab-pane">
                      <div class="row">
                        <div class="col-md-4"> <img src="assets/images/c1.jpg" class="img-fluid thumbnail mr25"> </div>
                        <div class="col-md-8"> test hererag a .
                          <p>
                            <br/> All Projects</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
  </div>
</div>


@endsection
      



