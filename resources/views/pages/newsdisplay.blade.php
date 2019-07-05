@extends("default")

@section("content")

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-offset-1 col-md-9">
                <br>
                <h2 class='postTitle'> {{ $displayedPost->title }}</h2>
                <br>
                <img class="postPic" src="{{ url('images/'.$displayedPost->image) }}">
                <p> {!! $displayedPost->content !!} </p>
            </div>
        </div>
    </div>
</div>

@endsection
