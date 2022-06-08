<header class="header_sign">
    
      <div class="header-block header-block-collapse hidden-lg-up" >
        <button class="collapse-btn" id="sidebar-collapse-btn">
          <i class="fa fa-bars"></i>
        </button>
      </div>
      
      <div class="header-block header-block-search ">
        <!-- <span class="member_area" >Dealer Portal</span> -->
        @if( Route::current()->getName() == 'signUp' || Route::current()->getName() == 'saveNewDealer'  )
          <img src="{{ asset('public/images/logo-final.png') }}" width="60px" alt="Logo">
        @else
         <!-- <span class="member_area" >Dealer Portal</span>  -->
        @endif
      </div>
      <div class="header-block header-block-nav">
        @if( Route::current()->getName() !== 'dashboard' )
          <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        @else
         <ul class="nav-profile">
          <li class="profile dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="name">
               Test Dealer
              </span>
            </a>
              <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
              <!-- <a class="dropdown-item" href="{{ route('newPassword') }}">
                <i class="fa fa-key icon"></i>
                Change Password
              </a> -->
              <div class="dropdown-divider" ></div>
              <a class="dropdown-item" href="{{ route('signout') }}">
                <i class="fa fa-power-off icon"></i>
                Logout
              </a>      
            </div>
          </li>   
        </ul> 
        @endif
      </div>
    </header>