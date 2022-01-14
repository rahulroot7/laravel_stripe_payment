@extends('admin.layouts.master')
 @section('content')

   <!-- Main content -->
    <section class="content p-2 p-md-4">
         <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Edit Plan</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Plan  </li>
            </ol>
          </div>
        </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <div class="card card-primary">
            <div class="card-body">
                 @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
         @if (session('unsuccess'))
            <p class="alert alert-danger">{{ session('unsuccess') }}</p>
        @endif
             <form method="post" action="{{ route('plan.update',$id->id) }}" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
              <div class="form-group">
                <label for="PlanName">Plan Name</label>
                <input type="text" id="PlanName" name="plane_name" value="{{ $id->plan_name }}" class="form-control">
              </div>
              
              <div class="form-group">
                <label for="Status">Plan Status</label>
                <select id="Status" name="status" class="form-control custom-select">
                  <option value="">Select one</option>
                  <!--<option value="php">PHP</option>-->
                  <option value="Active" @if($id->status == "Active") selected @endif >Active</option>
                  <option value="InActive" @if($id->status == "InActive") selected @endif>InActive</option>
                  <!--<option>Success</option>-->
                </select>
              </div>
               <div class="form-group">
                <label for="inputuser">Plan Type's</label>
                <input type="text" name="plan_type" id="inputuser" value="{{ $id->plan_type }}" class="form-control">
              </div>
              <div class="form-group">
              <label for="inputmonth">Billing Style</label>
              <input type="text" name="billing_style" id="inputmonth" value="{{ $id->billing_style }}" class="form-control">
            </div>
              <div class="form-group">
                <label for="Price">Actual Price's</label>
                <!--<input type="text" id="inputClientCompany" class="form-control">-->
                <input class="form-control allow_decimal input_date" type="text" name="price" value="{{ $id->actual_price }}" id="actual_price">
                <small>Allow only numeric values with decimal</small>
              </div>
              <div class="form-group">
                <label for="Price">Price's</label>
                <!--<input type="text" id="inputClientCompany" class="form-control">-->
                <input class="form-control allow_decimal input_date" type="text" name="price" value="{{ $id->price }}" id="Price">
                <small>Allow only numeric values with decimal</small>
              </div>
              <div class="form-group">
              <label for="inputmonth">Add Plan Discount</label>
              <input type="text" name="plane_discount" value="{{ $id->discount }}" id="inputmonth" class="form-control">
            </div>
            <div class="form-group">
              <label for="inputmonth">Add Plan Credit</label>
              <input type="text" name="plane_credit" value="{{ $id->credits }}" id="inputmonth" class="form-control">
            </div>
              <div class="form-group">
                <label for="page_description">Plan Description</label>
                <textarea id="page_description" name="description" class="form-control">{{ $id->description }}
              </textarea>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <!--<a href="#" type="reset" class="btn btn-secondary">Reset</a>-->
                  <!--<input type="reset" class="btn btn-secondary" value="Reset">-->
                  <input type="submit" value="Update" class="btn btn-main">
                </div>
              </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
         
      </div>
    </section>
 
  </div>
  <!-- /.content-wrapper -->
  
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