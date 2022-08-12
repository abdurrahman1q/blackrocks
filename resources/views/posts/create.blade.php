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
                <div class="card-header">Create Playlist</div>
                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">audio</label>
                            <input type="file" name="audio" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Artist</label>
                            <input type="text" name="artist" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Label</label>
                            <input type="text" name="label" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="caption" class="form-control">
                        </div>
                        <button class="mt-3 btn btn-outline-warning">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
</div>

@endsection