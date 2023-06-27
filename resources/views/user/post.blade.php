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
  @guest
 
  <form action="{{ route('login') }}">
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" class="btn btn-warning mt-2 mb-2" style="">+ New Post</button>
</form>
</div>
  
@endguest
@auth
    <button type="button" class="btn btn-warning mt-2 mb-2" style="background-color:#ffc107 !important; float: right !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + New Post
    </button>
    <h1 style="font-size: 30px;font-weight: 400;" class="mb-2 mt-2"> <b>My posts</b></h1>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Property title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Property title" require>
          </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Image:</label>
                <input name="image" class="form-control" type="file" id="formFileMultiple" require>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Property price</label>
                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Property Price" require>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Property for</label>
                <select id="" name="type" class="form-control" require>
                  <option >--Select option--</option>
                  <option value="sell">Sell</option>
                  <option value="buy">Buy</option>
                  <option value="rent">Rent</option>
                </select>
              </div>
              <div class="mb-3">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">District <span class="text-danger">*</span></label>
                          <input type="text" name="district" class="form-control" id="exampleFormControlInput1" placeholder="District" require>
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">Sub-District / Thana / Circle <span class="text-danger">*</span></label>
                          <input type="text" name="thana" class="form-control" id="exampleFormControlInput1" placeholder="Sub-District / Thana / Circle" require>
                  </div>
                </div>
              </div>
              <div class="mb-3">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">Village / Area Name</label>
                          <input type="text" name="village" class="form-control" id="exampleFormControlInput1" placeholder="Village / Area Name">
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">Road No</label>
                          <input type="text" name="road" class="form-control" id="exampleFormControlInput1" placeholder="Road No">
                  </div>
                </div>
              </div>
              <div class="mb-3">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">Mouja</label>
                          <input type="text" name="mouja" class="form-control" id="exampleFormControlInput1" placeholder="Mouja">
                  </div>
                  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <label for="exampleFormControlInput1" class="form-label">Khotian No</label>
                          <input type="text" name="khotian" class="form-control" id="exampleFormControlInput1" placeholder="Khotian No">
                  </div>
                </div>
              </div>
              <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Daag No</label>
            <input type="text" name="daag" class="form-control" id="exampleFormControlInput1" placeholder="Daag No">
          </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Property Details:</label>
                <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <input type="hidden" name="user_id" @auth value="{{Auth::user()->id}}" @endauth>
              <input type="hidden" name="user_email" @auth value="{{Auth::user()->email}}" @endauth>
              <input type="hidden" name="user_name" @auth value="{{Auth::user()->name}}" @endauth>
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
    @foreach ($data as $data)
    <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <img src="post/{{ $data->image }}" alt="" style="width: 100%; height: 20rem;">
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

</div>
@endauth

@endsection
@section('js')
<script type="text/javascript">
      
  $("document").ready(function(){
setTimeout(function(){
   $("div.alert").remove();
}, 4000 ); // 3 secs
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection