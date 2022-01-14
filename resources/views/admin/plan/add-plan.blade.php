@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-2 pb-md-4">
                    <h4> Add Plan  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-lg-12  col-md-12 col-12">
            <div class="message-alert">
                @if (session('success'))
                  <p class="alert alert-success text-center">{{ session('success') }}</p>
              @endif
               @if (session('unsuccess'))
                  <p class="alert alert-danger text-center">{{ session('unsuccess') }}</p>
              @endif
              </div>
            <div class="card">
              <div class="card-header header-bg">
                <h3 class="card-title">Add Plan Information</h3>
              </div>
             <form method="post" action="{{ route('plan.store') }}" enctype="multipart/form-data">
                 @csrf

              <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Plan Name</label>
                    <input type="text" name="plane_name" id="inputName" class="form-control @error('plane_name') is-invalid @enderror">
                    @error('plane_name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputStatus">Plan Status</label>
                    <select id="inputStatus" name="status"  class="form-control custom-select">
                      <option selected disabled>Select one</option>
                      <option value="Active">Active</option>
                      <option value="InActive">InActive</option>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="inputuser">Plan Type's</label>
                    <input type="text" name="plan_type" id="inputuser" class="form-control @error('plan_type') is-invalid @enderror">
                     @error('plan_type')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                   <div class="form-group">
                    <label for="inputmonth">Billing Style</label>
                    <input type="text" name="billing_style" id="inputmonth" class="form-control @error('billing_style') is-invalid @enderror">
                     @error('billing_style')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                  </div>
                  <div class="form-group">
                    <label for="numeric">Actual Price's</label>
                    <!--<input type="text" id="inputClientCompany" class="form-control">-->
                    <input class="form-control allow_decimal input_date @error('actual_price') is-invalid @enderror" type="text" name="actual_price" id="numeric" placeholder="0.00" value="">
                    <small>Allow only numeric values with decimal</small>
                     @error('actual_price')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="numeric">Price's</label>
                    <!--<input type="text" id="inputClientCompany" class="form-control">-->
                    <input class="form-control allow_decimal input_date @error('price') is-invalid @enderror" type="text" name="price" id="numeric" placeholder="0.00" value="">
                    <small>Allow only numeric values with decimal</small>
                     @error('price')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputmonth">Add Plan Discount</label>
                    <input type="text" name="plane_discount" id="inputmonth" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputmonth">Add Plan Credit</label>
                    <input type="text" name="plane_credit" id="inputmonth" class="form-control @error('plane_credit') is-invalid @enderror">
                    @error('plane_credit')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="page_description">Plan Description</label>
                  <textarea id="page_description" name="description"  class="form-control @error('plane_name') is-invalid @enderror">
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

                  <div class="row">
                    <div class="col-12">
                      <input type="submit" value="Submit" class="btn btn-main">
                    </div>
                  </div>

                    </div>
                  </div>
                </div>
              </div>
    
          </div>
    </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $(".allow_decimal").on("input", function(evt) {
           var self = $(this);
           self.val(self.val().replace(/[^0-9\.]/g, ''));
           if ((evt.which != 46 || self.val().indexOf('.') != -1) && (evt.which < 48 || evt.which > 57)) 
           {
             evt.preventDefault();
           }
        });
    });
  </script>

@endsection