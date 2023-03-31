@extends('user.include.main')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('content')
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
    <img src="https://th.bing.com/th/id/OIP.NlZCfzt3X_AZOo6SIUOo1wHaDe?w=315&h=164&c=7&r=0&o=5&pid=1.7"
     alt="" width="100%" height="5%">
<h3 class="mb-4"><b> About <span class="text-primary"> Us</span></b></h3>
@foreach ($data as $data)
<hr style="height: 2px;background-color: black;">
<p class="text-body">{{ $data->aboutUs }}</p>
<br>

<h3 class="mb-4"><b> What <span class="text-primary">We</span> Do</b></h3>
<hr style="height: 2px;background-color: black;">
<p class="text-body">{{ $data->whatWeDo }}</p>
@endforeach

</div>
@endsection