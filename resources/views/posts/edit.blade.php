@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit Playlist</div>
                <div class="card-body">
                    <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="text-center">
                            <audio controls>


                                <source src=" {{ Storage::url($post->audio)}}" type="audio/mpeg">

                            </audio>
                        </div>
                        <div class="form-group">
                            <label for="">audio</label>
                            <input type="file" name="audio" class="form-control">
                        </div>
                        <div class="text-center">
                            <img src="{{Storage::url($post->image)}}" class=" border border-dark " style="object-fit:cover" alt="Random picture" width="200px" height="200px">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Artist</label>
                            <input type="text" name="artist" class="form-control" placeholder="{{$post->artist}}">
                        </div>
                        <div class="form-group">
                            <label for="">Label</label>
                            <input type="text" name="label" class="form-control" placeholder="{{$post->label}}">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="caption" class="form-control" placeholder="{{$post->caption}}">
                        </div>
                        <button class="mt-3 btn btn-outline-success">Update</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection