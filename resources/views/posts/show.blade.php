@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center">
        <audio controls>


            <source src=" {{ Storage::url($post->audio)}}" type="audio/mpeg">

        </audio>
    </div>
    <div class="text-center">
        <img src="{{Storage::url($post->image)}}" class=" border border-dark " style="object-fit:cover" alt="Random picture" width="200px" height="200px">
    </div>
    <p>
        {{$post->artist}}
    </p>
    <p>{{$post->label}}</p>
    <p>{{$post->caption}}</p>
</div>



@endsection