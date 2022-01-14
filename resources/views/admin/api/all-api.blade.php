@extends('admin.layouts.master') 
@section('content')
    <!-- Main content -->
    <section class="content p-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <div class="top-title pb-4">
                    <h4> API Secret Keys  </h4>
                </div>
            </div>
          </div>
          <!--2-->
          <div class="row mb-4">
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All API information</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>API Key</th>
                      <th>Platform</th>
                      <th>Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>145</td>
                      <td>f7622dbf-83df-42a7-84b5-38b5730d0b7f</td>
                      <td>General API</td>
                      <td>Dec 28th 2021</td>
                    </tr>
                    <tr>
                      <td>140</td>
                      <td>f7622dbf-83df-42a7-84b5-38b5730d0b7f</td>
                      <td>General API</td>
                      <td>Dec 28th 2021</td>
                    </tr>
                     <tr>
                      <td>122</td>
                      <td>f7622dbf-83df-42a7-84b5-38b5730d0b7f</td>
                      <td>General API</td>
                      <td>Dec 28th 2021</td>
                    </tr>
                    <tr>
                      <td>119</td>
                      <td>f7622dbf-83df-42a7-84b5-38b5730d0b7f</td>
                      <td>General API</td>
                      <td>Dec 28th 2021</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
               
          </div>
          <!--3-->
           <div class="row">
               <div class="col-md-12">
                   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>API Key</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>99d7c406-9c62-4438-962e-6bb870663e1c</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>99d7c406-9c62-4438-962e-6bb870663e1c</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>99d7c406-9c62-4438-962e-6bb870663e1c</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>99d7c406-9c62-4438-962e-6bb870663e1c</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
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