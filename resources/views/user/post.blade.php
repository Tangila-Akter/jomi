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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <form action="{{ url('upload_post') }}" method="post">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">image</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" style="background-color:#41403e !important;" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" style="background-color:#7600FF !important;">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection