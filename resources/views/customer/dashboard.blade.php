@extends('layouts.master')

@section('content')

<section class="app"> 
 <div class="container-fluid">
     <div class="row">
        <div class="col-md-2 shadow">
            @include('layouts.sidebar')
        </div>
          <div class="col-md-9">
            <div class="content-main">
               <div class="app-content p-md-5 pt-5">
		       <!--1st row-->
		        <div class="row pb-4 pb-md-5">
		            <div class="col-md-12">
		               <div class="content-title">
		                   <h5 class="app-page-title pb-4"> Your Lusha dashboard</h5>
		               </div>
		                <div class="message-alert">
			                @if (session('success'))
			                  <p class="alert alert-success text-center">{{ session('success') }}</p>
			              @endif
			               @if (session('unsuccess'))
			                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
			              @endif
			             </div>
		            </div>
		   @foreach($plans as $user_plan)	           
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i class="fa fa-pagelines" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Plan</p>
    		                  <h6 class="mb-0 fw-bold"> Free </h6>
    		               </div>
    		              </div>
		              </div>
		          </div>
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i class="fa fa-user-o" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Team members </p>
    		                  <h6 class="mb-0 fw-bold"> 1/1 </h6>
    		                  <a class="btn app-btn-primary mt-3" href="{{url('/plans')}}"> Upgrade plan  </a>
    		               </div>
    		              </div>
		              </div>
		          </div>
		          <div class="col-md-4">
	              <div class="card heigth-100 mb-3 mb-md-4">
	                <div class="card-body shadow-inner d-flex p-4">  
	                  <div class="icon-blk"> <i class="fa fa-credit-card" aria-hidden="true"></i> </div>
		               <div class="view-item-content ps-3">
		                  <p class="mb-2"> Next credits cycle </p>
		                  <?php
		                  	$expire_plane = $user_plan->created_at;
		                  	$final = date('F m,Y',strtotime($expire_plane." +1 month"));
		                  ?>
		                  <h6 class="mb-0 fw-bold"> {{ $final }} </h6>
		                  <small> Renewal at 12:53 PM </small>
		               </div>
		              </div>
	              </div>
		          </div>

		      </div>
		  <!--2nd row-->
		    <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		            <div class="content-title d-flex align-items-center justify-content-between pb-4">
		                   <h5 class="app-page-title mb-0"> Insights</h5>
		                   <select class="form-select w-auto ms-3" aria-label="Default select example">
                          <option selected="">Last 30 days</option>
                          <option value="1">Today</option>
                          <option value="2">Yesterday</option>
                          <option value="3">Last 7 days</option>
                           <option value="1">Last 30 days</option>
                          <option value="2">Last 90 days</option>
                          <option value="3">Last 180 days</option>
                        </select>
		               </div>
		        </div>
		          <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i class="fa fa-credit-card" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Credits used </p>
    		                  <h6 class="mb-0 fw-bold">{{$user_plan->credits}}</h6>
    		               </div>
    		              </div>
		              </div>
		          </div>
		            <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i class="fa fa-sticky-note-o" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Saved contacts </p>
    		                  <h6 class="mb-0 fw-bold"> 0 </h6>
    		               </div>
    		              </div>
		              </div>
		          </div>
		            <div class="col-md-4">
		              <div class="card heigth-100 mb-3 mb-md-4">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <div class="icon-blk"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div>
    		               <div class="view-item-content ps-3">
    		                  <p class="mb-2"> Collected details </p>
    		                  <h6 class="mb-0 fw-bold"> 15 </h6>
    		               </div>
    		              </div>
		              </div>
		          </div>
		    </div>
		@endforeach
		    <!--3rd row-->
		       <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		            <div class="content-title d-flex align-items-center justify-content-between pb-4">
		                   <h5 class="app-page-title mb-0"> Improve your performance with data Insights</h5>
		               </div>
		        </div>
		          <div class="col-md-8">
		              <div class="card heigth-100">
		                <div class="card-body shadow-inner d-flex p-4">  
		                  <ul class="list-unstyled p-0 list-cstm m-0">
		                      <li> <i class="fa fa-check" aria-hidden="true"></i> Learn how to work better with Lusha. </li>
		                      <li> <i class="fa fa-check" aria-hidden="true"></i>Optimize your team's performance. </li>
		                      <li> <i class="fa fa-check" aria-hidden="true"></i> Find your ideal prospects. </li>
		                  </ul>
    		              </div>
		              </div>
		          </div>
		           <div class="col-md-4">
		              <div class="card heigth-100">
		                <div class="card-body shadow-inner d-flex p-4 performane-improve justify-content-center">  
		                  <i class="fa fa-line-chart main-clr" aria-hidden="true"></i>
    		              </div>
		              </div>
		          </div>
		      </div>
		      <!--4th row-->
		       <div class="row pb-4 pb-md-5">
		        <div class="col-md-12">
		            <div class="content-title d-md-flex align-items-center justify-content-between p-4 shadow-inner">
		                <div class="exp-title">
		                   <h5 class="app-page-title mb-0"> Liking Lushas new dashboard experience?</h5>
		                   <small> Your feedback will help us improve. </small>
		                   <br>  <a href="{{url('/plans')}}"><button class="btn app-btn-primary mt-3"> Upgrade to get insights  </button></a>
		                   </div>
		                   <div class="exp-btn">
		                <button class="btn border-btn-primary mt-3"> Not really  </button>
		               <button class="btn border-btn-primary mt-3"> yes  </button>
		               </div>
		               </div>
		        </div>
		      </div>
		      

		 </div>
            </div>
        </div>
     </div>
 </div>


</section>

@endsection
