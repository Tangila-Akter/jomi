@extends('user.include.main')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('content')

<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
    <button type="button" class="btn btn-warning mt-2 mb-2" style="background-color:#ffc107 !important; float: right !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + New Post
    </button>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <form action="{{ url('upload_post') }}" method="post">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Property title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Property title">
          </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image:</label>
                <input name="image" class="form-control" type="file" id="formFileMultiple" multiple>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Property price</label>
                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Property Price">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Property for</label>
                <select id="" name="type" class="form-control">
                  <option >--Select option--</option>
                  <option value="sell">Sell</option>
                  <option value="buy">Buy</option>
                  <option value="rent">Rent</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Property Details:</label>
                <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <input type="hidden" name="" @auth value="{{Auth::user()->id}}" @endauth>
              <input type="hidden" name="" @auth value="{{Auth::user()->email}}" @endauth>
              <input type="hidden" name="" @auth value="{{Auth::user()->name}}" @endauth>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" style="background-color:#41403e !important;" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" style="background-color:#7600FF !important;">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  {{-- Modal End --}}

  
</div>
<div class="contener-fluid" style="margin: 0% 15% 0% 15%;">
  <div class="card mb-2 mt-2" style="width: 100%; ">
    <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <img src="https://picsum.photos/seed/picsum/900/300" alt="" style="width: 35rem; height: 16rem;">
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <h1 style="font-size: 30px;font-weight: 400;"> <b>name</b></h1>
        <p>property details. <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>

        <p class="mb-2 mt-2"><b>Price:</b> </p>
        <span>Posted by ... <b></b></span>
        <div class="mb-6" style="margin-top: 7px;">
          <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;" >Book Now</button>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="card mb-2 mt-2" style="width: 100%; ">
    <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <img src="https://picsum.photos/seed/picsum/900/300" alt="" style="width: 35rem; height: 16rem;">
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <h1 style="font-size: 30px;font-weight: 400;"> <b>name</b></h1>
        <p>property details. <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
          <p class="mb-2 mt-2"><b>Price:</b> </p>
        <span>Posted by ... <b></b></span>
        <div class="mb-6" style="margin-top: 7px;">
          <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;" >Book Now</button>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="card mb-2 mt-2" style="width: 100%; ">
    <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <img src="https://picsum.photos/seed/picsum/900/300" alt="" style="width: 35rem; height: 16rem;">
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <h1 style="font-size: 30px;font-weight: 400;"> <b>name</b></h1>
        <p>property details. <br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
          <p class="mb-2 mt-2"><b>Price:</b> </p>
        <span>Posted by ... <b></b></span>
        <div class="mb-6" style="margin-top: 7px;">
          <button type="submit" class="btn btn-primary" style="background-color: #0d6efd;" >Book Now</button>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection