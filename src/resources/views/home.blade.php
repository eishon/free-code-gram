@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img 
                src="https://img-cdn.tnwcdn.com/image?url=https%3A%2F%2Fpbs.twimg.com%2Fprofile_images%2F1214937818289623042%2FckGYLttc.jpg&signature=27a429634064ff7fed05f2c7df997ef3" 
                class="rounded-circle"
                style="max-height: 128px;">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pr-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://picsum.photos/id/237/480" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/id/238/480" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://picsum.photos/id/239/480" class="w-100">
        </div>
    </div>
</div>
@endsection
