@extends('layout') 
@section('contents')
<br>
<br>
<br> @foreach ($blogs as $blog )
<div class="card">

    <h5 class="card-header"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a><br>
        <font size="-1"> Posted On {{$blog->created_at}}</font>
    </h5>

    <div class="card-body">

        <div class="form-group">
            <textarea class="form-control" rows="8" name="comment" disabled>{{$blog->description}}</textarea>
        </div>

    </div>

</div>
<br> @endforeach

<div class="pagination">

    {{$blogs->links()}}

</div>

@endsection
