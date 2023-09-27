@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-2 p-2">
            <img class="rounded-circle" src="https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=0.752xw:1.00xh;0.175xw,0&resize=1200:*"  alt="a dog" style="height: 10em" />
        </div>
        <div class="col-9">
                
            <div class="d-flex align-items-center gap-3">
                <div><strong></strong> Post</div>
                <div><strong>20k</strong> Followers</div>
                 <div><strong>100k</strong> Following</div>
            </div>
                <div class="pt-2"><p>{{$user->firstname}}<p></div>
                <div class="pt-2"><p>{{$user->lastname}}</p></div>
                <div class="pt-2"><a target="_blank" href="#" >{{$user->email}}</a></div>
            </div>
    </div>
    
</div>
@endsection
