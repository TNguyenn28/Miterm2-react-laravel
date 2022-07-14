@extends('layouts.MainLayout')

@section('title', 'Restaurant Detail')

@section('content')
    <div class="text-align-center">
        <p class="fs-1 fw-bolder">Detail {{$restaurant->name}}</p>
        <div class="row justify-content-center">
            <div class="col-6">
                <img class="img-fluid" src="/images/{{$restaurant->img}}" alt="">
            </div>
            <div class="col-6">
                <p class="fs-2 fw-bolder "> {{$restaurant->name}}</p>
                <div class="row justify-content-evenly">
                    <p class="card-text col-6 fs-4 text-success">{{$restaurant->category}} Vnd</p>
                    <p class="card-text col-6 fs-5 text-decoration-line-through">{{$restaurant->price}}</p>
                </div>
                <div class="text-wrap">
                    {{$restaurant->description}}
                </div>
            </div>
        </div>
    </div>
@endsection