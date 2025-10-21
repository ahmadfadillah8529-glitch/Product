@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Post</div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data"7>
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$posts->title}}" disabled >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Content</label>
                            <input type="text" class="form-control" name="content" value="{{$posts->content}}" disabled>
                        </div>
                        <div class="mb-3">
                           <img src="{{asset('/images/post/' . $posts->cover)}}" width="100" alt="">
                        </div>
                        <a href="{{route('post.index')}}" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection