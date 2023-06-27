
@extends('admin.includes.main')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
<h4 class="card-title">Property list</h4><br>
<div class="content-wrapper">
  <div class="table-responsive">
    <table class="table">
                        <thead>
                          <tr>
                            <th> Title</th>
                            <th> Price</th>
                            <th> Type </th>
                            <th> Details</th>
                            <th> District</th>
                            <th> Sub-District / Thana / Circle</th>
                            <th> Village / Area Name </th>
                            <th> Road No</th>
                            <th> Mouja</th>
                            <th> Khotian No </th>
                            <th> Daag No </th>
                            <th> User id</th>
                            <th> User email </th>
                            <th> User name </th>
                            <th> Created at </th>
                            <th> Updated at </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        @foreach ($data as $data)
                        <tbody>
                          <tr>
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
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>
                              <a class="badge badge-outline-danger" href="{{ url('/deletepost',$data->id) }}">remove</a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>


      </div></div></div>        
@endsection