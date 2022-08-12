@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow ">

                <div class="card-header">My Playlist</div>

                <div class="card-body " >

                    @foreach($posts as $post)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ Storage::url($post->image)}}" class="img-fluid rounded-start" alt="uraaa">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body ">

                                    <h5 class="card-title">{{ $post->caption }}</h5>
                                    <p class="card-text">{{ $post->artist }}</p>
                                    <p class="card-text">{{ $post->label }}</p>

                                    <div class="f">
                                        <audio controls>


                                            <source src=" {{ Storage::url($post->audio)}}" type="audio/mpeg">

                                        </audio>
                                    </div>
                                    <div class="card-footer">


                                        <div class=" btn-group gap-1">
                                            <a class="btn btn-dark btn-sm" href="{{route('posts.edit', $post->id)}}"><i class="fa-solid fa-pen"></i></a>
                                            <a class="btn btn-dark btn-sm" href="{{route('posts.show', $post->id)}}"><i class="fa-solid fa-eye"></i></a>
                                            <form action="{{route('posts.destroy', $post->id)}}" method="post">

                                                @csrf
                                                @method ('delete')
                                                <button class="btn btn-dark btn-sm" type="submit" href=""><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
</div>


@endsection