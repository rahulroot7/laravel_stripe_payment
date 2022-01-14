@extends('admin.layouts.master')
 @section('content')
   <!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
          <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Team List</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Team</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All Team</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if (session('success'))
                  <p class="alert alert-success">{{ session('success') }}</p>
                @endif
                @if (session('unsuccess'))
                    <p class="alert alert-danger">{{ session('unsuccess') }}</p>
                @endif
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Current plan </th>
                    <th>Credits monthly usage</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($all_team as $all_user)
                        @php($count++)
                      @if($all_user->user_type == 'Admin')
                      @else
                    <tr>                                    
                      <td>{{ $count }}</td>
                      <td>{{$all_user->name}}</td>
                      <td>{{$all_user->email}}</td>
                      <td>{{$all_user->user_type}}</td>
                        @foreach($use_credits as $user_credits)
                          @if($all_user->id == $user_credits->user_id)
                            <td>{{$user_credits->plane_name}}</td>
                            <td>{{$user_credits->used_credits}}</td>
                          @endif
                        @endforeach
                      <td>-</td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
 @endsection
