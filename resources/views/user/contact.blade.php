
@extends('user.include.main')

<style>
.contact{
    background-color: #dbedf3;
    margin: 3% 15% 3% 15%;
    border: 1px solid #d1caca;
    border-radius: 10px;
}
</style>

@section('content')
<br>
<br><br><br>
@if(session()->has('message'))

<div class="alert alert-success">

 
  
  {{session()->get('message')}}
  
</div>

@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<form action="{{ url('upload_contact') }}" method="post" class="contact">
    @csrf
    <div style="margin: 3% 3% 3% 3%; ">
 <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Phone number</label>
    <input type="phone" name="phone" maxlength="13" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number.." required>
  </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Property name</label>
    <input type="text" name="property_name" class="form-control" id="exampleFormControlInput1" placeholder="Property Name.." required>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Write a message.."></textarea>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary" style="margin: 0% 45% 0% 45%" >Submit</button>
  </div>
    </div>
   
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection