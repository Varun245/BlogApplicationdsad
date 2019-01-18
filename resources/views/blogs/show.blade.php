@extends('layout') 
@section('contents')
<br>
<br>
<br>
 
@include('errors')

  <div class="card">

    <h5 class="card-header">Leave a Comment</h5>

    <form method="POST" action="/blogs/{{$blog->id}}/comments">
      @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="Enter your Name">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="emailid" placeholder="Enter your Email id">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <textarea class="form-control" rows="3" name="comment" placeholder="Enter Your Comments"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </form>

  </div>

  <br> @if($blog->comments->count()) @foreach ($commentsForPaginate as $comment)
  <div class="card">

    <h5 class="card-header">{{$comment->name}}</a><br>
      <font size="-1"> Commented On {{$comment->created_at}}</font>
    </h5>

    <div class="card-body">

      <div class="form-group">
        <textarea class="form-control" rows="2" name="comment" disabled>{{$comment->comment}}</textarea>
      </div>

    </div>

  </div>

  <br> @endforeach @endif {{$commentsForPaginate->links()}}

</div>

@endsection
