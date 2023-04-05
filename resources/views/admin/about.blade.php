<x-app-layout></x-app-layout>
@extends('admin.includes.main')
@section('content')
{{-- <div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body"> --}}

          <div class="main-panel">
            <div class="content-wrapper">
      <h4 class="card-title">About Us</h4><br>
<div style="position: relative; top:20px; right:4px;">
    <!-- Button admin add modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add About Text
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add About Text</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/admin_aboutUpload') }}" method="post" enctype="multipart/form-data">
                @csrf
               
                <div>
                   <label>About Us:</label>
                   <textarea class="form-control" name="aboutUs" style="background-color: #ffffff; color:#000000;" placeholder="Write About Us" id="exampleFormControlTextarea1" rows="3"></textarea>
                   
               </div>
              <div>
                  <label>What We Do:</label>
                  <textarea class="form-control" name="whatWeDo" style="background-color: #ffffff; color:#000000;" placeholder="Write What We Do" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    <th> About Us </th>
    <th> What We Do </th>
    <th> Created at </th>
    <th> Updated at </th>
    <th> Action </th>
  </tr>
  </thead>
  @foreach ($data as $data)
  <tbody>
    <tr>
      <td>{{ $data->aboutUs }}</td>
      <td>{{ $data->whatWeDo }}</td>
      <td>{{ $data->created_at }}</td>
      <td>{{ $data->updated_at }}</td>
      <td>
        <a class="badge badge-outline-danger" href="{{ url('/deleteadminabout',$data->id) }}">remove</a>
      </td>
    </tr>
  </tbody>
  @endforeach
  </table>
  </div>
  </div>
  </div>
      </div>
    </div>
  
  </div>
</div>        
@endsection