
@extends('admin.includes.main')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
<h4 class="card-title">Contact us</h4><br>
<div class="content-wrapper">
  <div class="table-responsive">
    <table class="table">
                        <thead>
                          <tr>
                            <th> Name</th>
                            <th> Phone</th>
                            <th> Email address </th>
                            <th> Property name</th>
                            <th> Message</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        @foreach ($data as $data)
                        <tbody>
                          <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}৳</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->property_name }}</td>
                            <td>{{ $data->message }}</td>
                            <td>
                              <a class="badge badge-outline-danger" href="{{ url('/deletecontact',$data->id) }}">remove</a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>


      </div></div></div>        
@endsection