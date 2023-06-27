
@extends('admin.includes.main')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
<h4 class="card-title">Property Query</h4><br>
<div class="content-wrapper">
  <div class="table-responsive">
    <table class="table">
                        <thead>
                          <tr>
                            <th>Posted by</th>
                            <th> Title</th>
                            <th> Price</th>
                            <th> Type </th>
                            <th> Details</th>
                            <th> District </th>
                            <th> Sub-District / Thana / Circle </th>
                            <th> Village / Area Name </th>
                            <th> Road No </th>
                            <th> Mouja</th>
                            <th> Khotian No</th>
                            <th> Daag No</th>
                            <th> Customer id</th>
                            <th> Customer email </th>
                            <th> Customer name </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        @foreach ($data as $data)
                        <tbody>
                          <tr>
                            <td>{{ $data->post_id }}</td>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->price }}৳</td>
                            <td>{{ $data->type }}</td>
                            <td>{{ $data->details }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->thana }}</td>
                            <td>{{ $data->village }}৳</td>
                            <td>{{ $data->road }}</td>
                            <td>{{ $data->mouja }}</td>
                            <td>{{ $data->khotian }}</td>
                            <td>{{ $data->daag }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->user_email }}</td>
                            <td>{{ $data->user_name }}</td>
                         
                            <td>
                              <a class="badge badge-outline-danger" href="{{ url('/deletelist',$data->id) }}">remove</a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>


      </div></div></div>        
@endsection