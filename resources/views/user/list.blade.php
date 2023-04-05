@extends('user.include.main')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('content')
<br>
<br><br><br>
@if(session()->has('message'))

<div class="alert alert-success">

 
  
  {{session()->get('message')}}
  
</div>

@endif
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
  <div class="row">
    <div class="col">
      <form action="">
      <label for="exampleDataList" class="form-label">Filter:</label>
      {{-- <span>Filter:</span> --}}
<select id="" type="search" name="option" class="form-control">
    <option >--Select option--</option>
    <option value="sell">Sell</option>
    <option value="buy">Buy</option>
    <option value="rent">Rent</option>
  </select>

    </div>
    <div class="col mt-4"><button type="submit">load</button>
    </form></div>
    <div class="col">
      
      <form action="">
        <label for="exampleDataList" class="form-label">Search:</label>
<input class="form-control" type="search" name="search" id="exampleDataList" placeholder="Type to search...">
      </form>
    </div>
  </div>

</div>
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
    <div class="card mb-2 mt-2" style="width: 100%; ">
      @foreach ($data as $data)
      <form action="{{ url('/addcart',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <img src="post/{{ $data->image }}" alt="" style="width: 100%; height: 16rem;">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <h1 style="font-size: 30px;font-weight: 400;" name="title"> <b>{{$data->title }}</b></h1>
          <p name="details" value="{{ $data->details }} ">{{ $data->details }} </p>
  
          <p class="mb-2 mt-2" name="price" value="{{ $data->price }}"><b>Price:</b>{{ $data->price }} ৳</p>
          <span name="postuser_name">Posted by <b>{{ $data->user_name }}</b></span>
          <input type="hidden" name="user_id" @auth value="{{Auth::user()->id}}" @endauth>
              <input type="hidden" name="user_email" @auth value="{{Auth::user()->email}}" @endauth>
              <input type="hidden" name="user_name" @auth value="{{Auth::user()->name}}" @endauth>
          <div class="mb-6" style="margin-top: 7px;">
            <button type="submit" class="btn btn-primary" name="type" style="background-color: #0d6efd;" >{{ $data->type }} now</button>
          </div>
        </div>
      </form>
      </div>
      </div>
      @endforeach

      
    </div>


@endsection