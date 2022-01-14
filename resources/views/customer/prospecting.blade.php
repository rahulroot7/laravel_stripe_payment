@extends('layouts.master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9 mx-auto">
            <div class="content-main">
                <div class="row py-4 border-bottom ">
                    <div class="col-md-6 col-sm-6">
                       <div class="prospecting-header">
                          <ul class="list-unstyled p-0 list-cstm d-sm-flex m-0">
                              <li> <a href="#"> <i class="fa fa-user" aria-hidden="true"></i> People (4,64,61,271) </a> </li>
                              <li> <a href="#"> <i class="fa fa-building-o" aria-hidden="true"></i> Companies (31,52,510) </a> </li>
                          </ul>
              </div> 
                    </div>
                     <div class="col-md-6 col-sm-6">
                          <div class="prospecting-header">
                  <ul class="list-unstyled p-0 list-cstm d-sm-flex m-0">
                      <li> See how Prospecting works </li>
                      <li>
                        <button class="btn pros-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Recent activity </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                              <div class="offcanvas-header justify-content-end">
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                              </div>
                              <div class="offcanvas-body">
                                <h5 id="offcanvasRightLabel" class="fw-bold">Recent activities</h5> 
                                <p> Your prospecting activity over the past 30 days </p>
                                <div class="activity-content">
                                    <h6> Today </h6>
                                    <div class="data-activity-content border p-3 d-flex justify-content-between">
                                        <div>
                                            <h6> <i class="fa fa-clock-o" aria-hidden="true"></i> Today at 6:22 PM <br> <small> Unsaved search... </small></h6>
                                        </div>
                                        <div class="load-search">
                                          <button class="btn app-btn-primary"> Load Search </button>  
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                      </li>
                  </ul>
              </div>
              </div>
            </div>
            <div class="row my-lg-5">
                <div class="col-lg-3 col-md-12">
                    <div class="wrapper prospecting-accordions bg-white rounded shadow-2 my-4 my-lg-0">

    <div class="accordion accordion-flush border-top border-start border-end" id="myAccordion">
        <div class="accordion-item border-0">
             <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"><h5> Filters</h5></button>
            
        </div>        <div class="accordion-item border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> Company Name <span><input type="text" class="border-0 w-100" placeholder="Enter specific companies or URLs"></input></span></button> </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li class="prospecting_filter" data_type="amazon">Amazon</li>
                        <li class="prospecting_filter" data_type="walmart">Walmart</li>
                        <li class="prospecting_filter" data_type="amazon_center">Amazon Development Center</li>
                        <li class="prospecting_filter" data_type="apple">Apple</li>
                        <li class="prospecting_filter" data_type="google">Google</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item  border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0 d-grid" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"> Company HQ Location <span><input type="text" class="border-0 w-100" placeholder="Enter countries , states , or cities"></input></span></button> </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Amazon</a></li>
                        <li><a href="#">Walmart</a></li>
                        <li><a href="#">Amazon Development Center</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item  border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"> Industry </button> </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Amazon</a></li>
                        <li><a href="#">Walmart</a></li>
                        <li><a href="#">Amazon Development Center</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item  border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"> Employee headcount </button> </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Amazon</a></li>
                        <li><a href="#">Walmart</a></li>
                        <li><a href="#">Amazon Development Center</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item  border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"> Revenue </button> </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Amazon</a></li>
                        <li><a href="#">Walmart</a></li>
                        <li><a href="#">Amazon Development Center</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item  border-0">
            <h2 class="accordion-header" id="flush-headingOne"> <button class="accordion-button collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix"> Year founded </button> </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse border-0" aria-labelledby="flush-headingOne" data-bs-parent="#myAccordion">
                <div class="accordion-body p-0">
                    <ul class="list-unstyled m-0">
                        <li><a href="#">Amazon</a></li>
                        <li><a href="#">Walmart</a></li>
                        <li><a href="#">Amazon Development Center</a></li>
                        <li><a href="#">Apple</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
<div class="col-lg-9 col-md-12">
         <div class="hide_old_table_example">
         <div class="app-title-header px-3 px-md-0 mb-3">
           <h5 class="app-page-title mb-0">Build your ideal prospect list</h5>
           <small>Use the filters to get meaningful results, then reveal contact details.</small>
           </div>
           <div class="suggestion-banner-container mx-3 mx-md-0 mb-4">
              <div class="suggestion-banner-wrapper suggestion-banner-cont p-4 shadow-inner">
                 <div class="main-content-container">
                    <p class="mb-0"><b>Search for more people like Ramon Berrios from Amazon fba sellers</b></p>
                    <small class="mb-2 d-inline-block">Based on your Lusha activity</small>
                    <div class="filters-suggestion-wrapper d-lg-flex">
                       <div class="suggestion-button-container border-btn-primary">
                          <small>Department:</small>General Management
                       </div>
                       <div class="suggestion-button-container border-btn-primary">
                          <small>Employees:&nbsp;</small>1 - 10
                       </div>
                    </div>
                    <button type="button" data_type="amazon" class="prospecting_filter btn app-btn-primary">Apply search filters</button>
                 </div>
              </div>
           </div>
            @if(Session::has('status'))
            <div class="alert alert-success">
            {{ Session::get('status') }}
            </div>
            @endif
        </div>
        <div class="filter_loader" style="display: none"></div>
         <div class="filter_save pt-3">
           <label for="coupon_field" id="check_count"></label>
             <button  id="clear" class="btn btn-primary-outline py-1">Clear</button>  
             <button  id="hidden" class="btn app-btn-primary ms-2">Show Detail</button>
        </div><br>

        <div class="prespeting_responce mb-4 mb-lg-0"></div>
      <?php $list_name = ''; ?>
      @foreach($user_list as $list)
        <?php
           $list_name = $list->list_name;
         ?>
      @endforeach
    @foreach($plans as $credit)
      <?php 
       $current_credit = $credit->credits;
       $used_credit = $credit->used_credits;
      ?>      
       @if(empty($list_name))

         <div class="modal fade" id="filtersaveModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <i class="fa fa-google-wallet" aria-hidden="true" style='font-size:48px;color:red'></i>

                <h5 class="modal-title fw-bold" id="createModalLabel">please create your List !</h5>

                <p></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">No,thanks</button>
                  <a href="{{url('/list')}}" target="blank"><button type="" class="btn btn-primary">Create List</button></a>
                </div>
            </div>
          </div>
        </div>

       @elseif($used_credit >= $current_credit)
          <div class="modal fade" id="filtersaveModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <i class="fa fa-google-wallet" aria-hidden="true" style='font-size:48px;color:red'></i>

                <h5 class="modal-title fw-bold" id="createModalLabel">You have reached your credit limit, upgrade now and get more credits.</h5>

                <p>Upgrading your plan will provide you with more credits and great new features.</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">No,thanks</button>
                  <a href="{{url('/plans')}}" target="blank"><button type="" class="btn btn-primary">View plans</button></a>
                </div>
            </div>
          </div>
        </div>
        @else
          <!-- model filter data -->
        <div class="modal fade" id="filtersaveModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <i class="fa fa-cogs pe-3" aria-hidden="true"></i>
                <h5 class="modal-title fw-bold" id="createModalLabel">Save Contacts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ url('add-prospecting') }}" method="POST">
                 @csrf
                 @auth
                 <div class="mb-3">
                  <select class="form-select w-auto me-3 form-control status-dropdown" aria-label="Default select example">
                    <option selected="">Select your Lists</option>
                  </select><br>
                  <select class="form-select w-auto me-3 form-control status-dropdown"
                  name="list_id" aria-label="Default select example">
                  @foreach($user_list as $list)
                    <option value="{{$list->id}}">{{$list->list_name}}</option>
                  @endforeach
                  </select>
                  @foreach($user_list as $list)
                  <?php $contacts = $list->list_contacts+1; ?>
                    <input type="hidden" name="list_contact" value="{{$contacts}}">
                  @endforeach
                  @foreach($plans as $current_credit)
                    <?php $credit = $current_credit->used_credits+1; ?>
                    <input type="hidden" name="credit" value="<?= $credit ?>">
                  @endforeach
                  <input type="hidden" name="user_id" value="">
                  <input type="hidden" name="name" value="Clive Rees">
                  <input type="hidden" name="title" value="Chief Procurement Officer">
                  <input type="hidden" name="data" value="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin,text@gmail.com,+917854214578">
                  <input type="hidden" name="company" value="Walmart">
                  <input type="hidden" name="department" value="Fujitsu company-logo">
                  <input type="hidden" name="seniority" value="Director">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>

                  <button type="submit" class="btn btn-primary">Save Detail</button>
                
                </div>               
                @endauth                  
                </form>
              </div>
        </div>
        </div>
        </div> 

<!-- end save detail model -->
       @endif
    @endforeach

</div>  
        </div>
     </div>
 </div>
</section>

@endsection
