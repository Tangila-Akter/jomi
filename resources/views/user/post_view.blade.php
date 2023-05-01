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