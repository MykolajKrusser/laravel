@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://picsum.photos/150/150" alt="picture">
        </div>
        <div class="col-9 pt-5">
            <h1>{{$user->username}}</h1>
            <div class="d-flex">
                <div class="mr-5"><strong>153</strong> posts</div>
                <div class="mr-5"><strong>275</strong> articles</div>
                <div class="mr-5"><strong>70</strong> stats</div>
            </div>
            <div class="mt-3">
                <a class="font-weight-bold" href="/">{{ $user->profile->title }}</a>
            </div>
            <p>
                {{ $user->profile->description }}
            </p>
            <a href="{{ $user->profile->url }}">FaceBalls.com</a>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://picsum.photos/360/300" alt="picture" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/360/300" alt="picture" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/360/300" alt="picture" class="w-100">
        </div>
    </div>
</div>
@endsection
