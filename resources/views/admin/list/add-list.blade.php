@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> List  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add List Information</h3>
              </div>
              <div class="card-body">
                  <div class="form-group">
                        <label for="exampleInputlistname">List Name</label>
                        <input type="text" class="form-control" id="exampleInputlistname" placeholder="List Name">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputlistcontacts">Contacts</label>
                        <input type="text" class="form-control" id="exampleInputlistcontacts" placeholder="Add Contacts">
                      </div>
                      
                <!-- craeted Date by -->
                <div class="form-group">
                  <label>Created By</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Created Date -->
                <div class="form-group">
                  <label>Created Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- /.form group -->
                <!-- Date range -->
                <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                  <label>Date and time range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date and time range -->
                <div class="form-group">
                  <label>Date range button:</label>

                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                      <i class="far fa-calendar-alt"></i> Date range picker
                      <i class="fas fa-caret-down"></i>
                    </button>
                  </div>
                </div>
                <!-- /.form group -->
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
               
          </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection