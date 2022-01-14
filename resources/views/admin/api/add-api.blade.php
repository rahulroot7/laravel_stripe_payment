@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> Add API </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row">
              <div class="col-md-6">
                  <!-- general form elements -->
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Add Information</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                            <div class="form-group">
                            <label for="exampleInputFile">Image upload</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="apiinput">Add Tile</label>
                            <input type="text" class="form-control" id="exampleInputtitle" placeholder="Add Title">
                          </div>
                         <div class="form-group">
                            <label>Add Info</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>
                           
                          
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
              </div>
                <div class="col-md-6">
                  <!-- general form elements -->
                    <div class="card card-info">
                      <div class="card-header">
                        <h3 class="card-title">Add API Information</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form>
                        <div class="card-body">
                          <div class="form-group">
                            <label for="apiinput">Add API key</label>
                            <input type="text" class="form-control" id="exampleInputadi" placeholder="API Key">
                          </div>
                          <div class="form-group">
                            <label for="Platforminput">Platform</label>
                            <input type="text" class="form-control" id="exampleInputaPlatform" placeholder="Platform">
                          </div>
                           <div class="form-group">
                            <label for="Createdinput">Created</label>
                            <input type="text" class="form-control" id="exampleInputaCreated" placeholder="Created">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div>
                        </div>
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
              </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection