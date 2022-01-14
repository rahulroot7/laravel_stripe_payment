@include('layouts.head')
<body>
 <div id="app">
    <!--header section-->
     <header>
         <div class="header bg-clr">
             <div class="container">
                 <div class="row align-items-lg-center py-2">
                     <div class="col-md-2 col-12">
                         <div class="logo-block mb-3 mb-md-0">
                              <!--<a class="navbar-brand" href="{{ url('/') }}"> {{ config('app.name', 'LUSHA') }} </a>-->
                       <a class="navbar-brand" href="{{ url('/') }}"><img src="{{url('public/assets/images/logo.png')}}" alt="Image"/ class="img-fluid"></a>
                         </div>
                     </div>
                     <div class="col-md-8 col-6">
                      <div class="nav-content">
                         <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav w-100 justify-content-center">
                                      
                                    <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Why Lusha? 
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Lusha Extension <br> <span class="sub">Find contact data on the web</span></a></li>
                                         <li><a class="dropdown-item" href="{{url('/dashboard')}}">Prospecting Platform  <br> <span class="sub">Build accurate prospect listsb</span></a></li>
                                          <li><a class="dropdown-item" href="#">API  <br> <span class="sub">Enrich systems with data</span></a></li>
                                           <li><a class="dropdown-item" href="#">Integrations  <br> <span class="sub">Connect to systems you use</span></a></li>
                                      </ul>
                                    </li>
                                    
                                    <li class="nav-item">
                                      <a class="nav-link">Pricing</a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link">Enterprise</a>
                                    </li>
                                     <li class="nav-item">
                                      <a class="nav-link">Customers</a>
                                    </li>
                                       <li class="nav-item dropdown">
                                      <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Company 
                                      </a>
                                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">About  <br> <span class="sub">This is us</span></a></li>
                                         <li><a class="dropdown-item" href="#">Our data  <br> <span class="sub">Know your data</span></a></li>
                                          <li><a class="dropdown-item" href="#">Careers   <br> <span class="sub">Work with us </span></a></li>
                                           <li><a class="dropdown-item" href="#">Blog  <br> <span class="sub">Stay up-to-date</span></a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                </div>
                            </nav> 
                      </div>
                     </div>
                     <div class="col-md-2 col-6">
                         <div class="sign-up-blk">
                          
                 @if (Route::has('login'))
                            <div class="hidden login-reg-blk d-flex align-items-center">
                                @auth
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 
                                        @if(Auth::user()->user_type == 'Customer' || Auth::user()->user_type == 'Development')
                                          <a class="dropdown-item" href="{{url('/labs')}}">
                                            {{ __('Labs') }}
                                          </a>
                                          <a class="dropdown-item" href="{{url('/account')}}">
                                            {{ __('Account') }}
                                          </a>
                                          <a class="dropdown-item" href="{{url('/join-community')}}">
                                            {{ __('Join Community') }}
                                          </a>
                                          <a class="dropdown-item" href="{{url('/support')}}">
                                            {{ __('Support') }}
                                          </a>
                                        @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @else
                                    <a href="{{ route('login') }}" class="logo-btn text-white me-3 text-decoration-none">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="register-btn bg-white p-2 text-decoration-none">Register</a>
                                    @endif
                                @endauth
                            </div>
                          
                        @endif
                         </div>
                         
                         
                     </div>
                 </div>
             </div>
         </div>
     </header>



        <main>
            @yield('content')
        </main>
    </div>
 <!--footer content-->
   <footer class="bg-clr py-5">
       <div class="container">
           <div class="row">
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <h5 class="footer_headline text-white fw-bold pb-3">Products</h5>
                      <ul class="p-0 list-unstyled">
                          <li> <a href="#"> Lusha Extension </a></li>
                          <li> <a href="#"> Prospecting Platform </a></li>
                          <li> <a href="#"> Lusha API </a></li>
                          <li> <a href="#"> Integrations </a></li>
                      </ul>
                  </div>
              </div> 
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <h5 class="footer_headline text-white fw-bold pb-3">Company</h5>
                      <ul class="p-0 list-unstyled">
                          <li> <a href="#"> About </a></li>
                          <li> <a href="#"> Pricing </a></li>
                          <li> <a href="#"> Customers </a></li>
                          <li> <a href="#"> Our Data </a></li>  
                          <li> <a href="#"> Newsroom </a></li>
                          <li> <a href="#"> Careers </a></li>
                      </ul>
                  </div>
              </div> 
              <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <h5 class="footer_headline text-white fw-bold pb-3">Information</h5>
                      <ul class="p-0 list-unstyled m-0">
                          <li> <a href="#"> Data Sources </a></li>
                          <li> <a href="#"> Community Program </a></li>
                          <li> <a href="#"> Community Terms of Use </a></li>
                          <li> <a href="#"> Community FAQ </a></li>
                      </ul>
                  </div>
              </div> 
               <div class="col-md-3 col-6">
                  <div class="footer-content">
                      <h5 class="footer_headline text-white fw-bold pb-3">Resources</h5>
                      <ul class="p-0 list-unstyled m-0">
                          <li> <a href="#"> Blog </a></li>
                          <li> <a href="#"> Terms of Service </a></li>
                          <li> <a href="#"> Privacy Policy </a></li>
                          <li> <a href="#"> Help Center Support </a></li>  
                          <li> <a href="#"> API Documentation </a></li>
                          <li> <a href="#"> Privacy Center </a></li>
                      </ul>
                  </div>
              </div>
           </div>
       </div>
   </footer>
   
   <section class="copyright-footer py-md-2 py-3">
       <div class="container">
         <div class="row align-items-center">
             <div class="col-md-4 col-12">
                 <p class="copyright-txt text-white mb-0 text-center text-md-start"> © Copyright 2021 Lusha Ltd. All rights reserved.</p>
             </div>
             <div class="col-md-4 text-center col-12">
                 <p class="address-txt text-white mb-0 py-3 py-md-0"> <i class="fa fa-map-marker pe-1" aria-hidden="true"></i>1177 6th Ave, New York, NY 10036, United States</p>
             </div>
             <div class="col-md-4 col-12">
                 <ul class="social-icon p-0 list-unstyled d-flex mb-0 float-md-end justify-content-center">
                    <li> <i class="fa fa-facebook" aria-hidden="true"></i> </li>
                    <li> <i class="fa fa-twitter" aria-hidden="true"></i> </li>
                    <li> <i class="fa fa-google-plus" aria-hidden="true"></i></li>
                    <li> <i class="fa fa-linkedin" aria-hidden="true"></i> </li>
                </ul>
             </div>
         </div>
       </div>
   </section>

<!-- data table script -->
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>
<script src="{{ asset('public/assets/js/footer-custom-script.js') }}" defer></script>
</body>
</html>
