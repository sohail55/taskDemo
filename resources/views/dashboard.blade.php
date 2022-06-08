@extends('layouts.main')
@section('content')
  
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <!-- <div class="page-title">
                <h1>Hello, <span>Welcome Here</span></h1>
            </div> -->
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
  </div>
  <!-- /# row -->
  <section id="main-content">
    <div class="row">

      @if(!empty($results))
        @foreach($results as $result)
          <div class="col-lg-4">
          <div class="card">
              <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  </div>
                  <div class="stat-content dib">
                      <div class="stat-text">{{ $result['Status'] }}</div>
                      <div class="stat-digit">{{ $result['Total'] }}</div>
                  </div>
              </div>
          </div>
      </div>
        @endforeach
      @endif
      
      <!-- <div class="col-lg-4">
          <div class="card">
              <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  </div>
                  <div class="stat-content dib">
                      <div class="stat-text">New Customer</div>
                      <div class="stat-digit">961</div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="card">
              <div class="stat-widget-one">
                  <div class="stat-icon dib">
                  </div>
                  <div class="stat-content dib">
                      <div class="stat-text">Active Projects</div>
                      <div class="stat-digit">770</div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
          <div class="card">
              <div class="stat-widget-one">
                  <div class="stat-icon dib"></div>
                  <div class="stat-content dib">
                      <div class="stat-text">Referral</div>
                      <div class="stat-digit">2,781</div>
                  </div>
              </div>
          </div>
      </div> -->
    </div>
  </section>
</div>


@endsection
      



