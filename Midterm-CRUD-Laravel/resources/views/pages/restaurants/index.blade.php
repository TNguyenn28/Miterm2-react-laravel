{{-- @extends('layouts.MainLayout')
@section('title','Restaurant index')
@section('content')
<table class="table">
    <thead>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Img</th>
            <th>Description</th>
            <th>Category</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <button class="btn btn-dark"><a href="/restaurants/create"><i class="fa-solid fa-circle-plus"></i></a></button>
        @if(empty($restaurantList))
            <tr>
                <td>No data is available</td>
            </tr>
        @else
            @foreach ($restaurantList as $restaurant)
                <tr>
                    <td>{{$restaurant->id}}</td>
                    <td>{{$restaurant->name}}</td>
                    <td>{{$restaurant->price}}</td>     
                    <td><img class="img-thumbnail" style="width: 10rem, height:10rem" src="/images/{{$restaurant->img}}" alt=""></td>
                    <td>{{$restaurant->description}}</td>
                    <td>{{$restaurant->category}}</td>
                    <td><form method = 'post' action='/restaurants/{{$restaurant->id}}'>@csrf @method('DELETE') <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></form></td>
                    <td><button class="btn btn-warning"> <a href="restaurants/{{$restaurant->id}}/edit"><i class="fa-solid fa-pen"></i></a> </button></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection --}}
@extends('layouts.MainLayout')

@section('title', 'Restaurant Store')

@section('content')
 <button class="btn btn-dark"><a href="/restaurants/create"><i class="fa-solid fa-circle-plus"></i></a></button>
    <div class="row justify-content-center gap-3" >
        @foreach ($restaurantList as $restaurant)
            <div class="card col-4" style="width: 18rem;">
                <img src="/images/{{$restaurant->img}}" style="width: 100%; height: 12rem" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$restaurant->name}}</h5>
                    <p class="card-text text-truncate" >{{$restaurant->description}}</p>
                    <div class="row">
                        <p class="card-text col-6">{{$restaurant->category}}</p>
                        <p class="card-text col-6 text-decoration-line-through">{{$restaurant->price}}</p>
                    </div>
                    <a href="/restaurants/{{$restaurant->id}}" class="btn btn-primary">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection()