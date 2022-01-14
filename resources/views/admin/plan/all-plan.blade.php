@extends('admin.layouts.master')
 @section('content')

<!-- Main content -->
    <section class="content p-2 p-md-4">
      <div class="container-fluid">
        <div class="row mb-2 align-items-center">
          <div class="col-sm-6 col-4">
            <h4>Plan List</h4>
          </div>
          <div class="col-sm-6 col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Plan List </li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card table-responsive">
              <div class="card-header header-bg">
                <h3 class="card-title">All Plan list</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
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
                    <th>Plan Name</th>
                    <th>Plan Status</th>
                    <th>Plan Type</th>
                    <th>Billing Style</th>
                    <th>Actual Price</th>
                    <th>Sale Price</th>
                    <th>Credits</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($count = 0)
                    @foreach($plans as $plan)
                        @php($count++)
                      <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $plan->plan_name }}</td>
                        <td>{{ $plan->status }}</td>
                        <td>{{ $plan->plan_type }}</td>
                        <td>{{ $plan->billing_style }}</td>
                        <td>{{ $plan->actual_price }}</td>
                        <td>{{ $plan->price }}</td>
                        <td>{{ $plan->credits }}</td>
                        <td class="edit-delete-btn">
                          <a class="btn btn-info btn-sm" href="{{ route('edit.plan',$plan->id) }}"><i class="fas fa-pencil-alt"></i> Edit</a> 

                          <a class="btn btn-danger btn-sm ml-2" href="{{ url('admin/plan-delete',$plan->id) }}"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                      </tr>
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
