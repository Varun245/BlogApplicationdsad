@extends('layout') 
@section('contents')
<br>
<br>
<br>

@include('errors')

  <form method="POST" action="/blogs">
    @csrf
    <div class="form-group">
      <label for="title">Title :</label>
      <input type="text" class="form-control" name="title" placeholder="Enter Your Title">
    </div>
    <div class="form-group">
      <label for="description">Description :</label>
      <textarea type="text" class="form-control" rows="8" name="description" placeholder="Enter Your Description"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

@endsection