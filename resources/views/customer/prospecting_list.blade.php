@extends('layouts.master')

@section('content')

<section class="app"> 
 <div class="container">
  <div class="row">
    <div class="col-md-12">
       <div class="table-content py-5">
      <table id="prospecting_example" class="display pt-4 mb-4" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th> </th>
                <th>Full Name</th>
                <th>Data</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Departments</th>
                <th>Seniority</th>
                <th>Date</th>
                <th> </th>
            </tr>
        </thead>

 
        <tbody>
          @foreach($prospect_list as $lists)
            <tr>
                <td> </td>
                <td>{{$lists->name}}</td>

                <?php
                    $contact = explode(",",$lists->data);
                    $linkdian = $contact['0'];
                    $sms = $contact['1'];
                    $contact = $contact['2'];
                 ?>
                <td>
                  <a href="<?= $linkdian ?>" target="blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  <a href="mailto:<?= $sms ?>" target="blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                  <a href="tel:<?= $contact ?>" target="blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </td>
                <td>{{$lists->title}}</td>
                <td>{{$lists->company}}</td>
                <td>{{$lists->departments}}</td>
                <td>{{$lists->seniority}}</td>
                <?php
                  $expire_plane = $lists->created_at;
                  $created_at = date('F m,Y',strtotime($expire_plane." +1 month"));
                ?>
                <td>{{$created_at}}</td>
                <td> </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
    </div>
  </div>

 </div>
 

</section>

@endsection
