@extends('user.include.main')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('content')
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
<span>Filter</span>
<select id="" name="type" class="form-control">
    <option >--Select option--</option>
    <option value="sell">Sell</option>
    <option value="buy">Buy</option>
    <option value="rent">Rent</option>
  </select>
</div>
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
    <div class="card mb-2 mt-2" style="width: 100%; ">
      @foreach ($data as $data)
      <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <img src="post/{{ $data->image }}" alt="" style="width: 100%; height: 16rem;">
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
          <h1 style="font-size: 30px;font-weight: 400;"> <b>{{$data->title }}</b></h1>
          <p>{{ $data->details }} </p>
  
          <p class="mb-2 mt-2"><b>Price:</b>{{ $data->price }} </p>
          <span>Posted by <b>{{ $data->user_name }}</b></span>
          <div class="mb-6" style="margin-top: 7px;">
            <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;" >{{ $data->type }} now</button>
          </div>
        </div>
      </div>
      </div>
      @endforeach
    </div>


@endsection