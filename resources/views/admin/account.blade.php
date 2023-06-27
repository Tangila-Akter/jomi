
@extends('admin.includes.main')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
<h4 class="card-title">Account Status</h4><br>
<div style="position: relative; top:20px; right:4px;">
    <!-- Button admin add modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Admin
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/admin_upload') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                
                <div>
                   <label>Name:</label>
                   <input type="text" name="name" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Write a name" required>
               </div>
              <div>
                  <label>Email Address:</label>
                  <input type="email" name="email" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Write phone number" required>
              </div>
               <div>
                   
                   <input type="number"  name="usertype" style="background-color: #ffffff; color:#000000;" class=" form-control" value="1"  hidden>
                   <input type="text"  name="email_verified_at	" style="background-color: #ffffff; color:#000000;" class=" form-control" value="2023-02-06 12:10:56"  hidden>
               </div>
               <div>
                  <label>Password:</label>
                  <input type="password" name="password" style="background-color: #ffffff; color:#000000;" class=" form-control" placeholder="Write a password" required>
              </div>
               <div class="d-flex justify-content-center mb-4">
  
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                       <input  type="submit"  class="btn btn-primary" value="Save">
                   </div>
               </div>
                
            </form>
        </div>
      </div>
    </div>
  </div>



  
  <br><br>


  <div class="content-wrapper">
    <div class="table-responsive">
      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th> Email address </th>
                            <th> Email verified at </th>
                            <th> Created at </th>
                            <th> Updated at </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        @foreach ($data as $data)
                        <tbody>
                          <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->email_verified_at	 }} </td>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->updated_at }}</td>
                            <td>
                              <a class="badge badge-outline-danger" href="{{ url('/deleteadmin',$data->id) }}">remove</a>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>


      </div></div></div>        
@endsection