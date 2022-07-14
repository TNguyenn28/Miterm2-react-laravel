@extends('layouts.MainLayout')
@section("title", "Edit Restaurant")
@section("content")
    @section("actionForm", route("restaurants.update", $restaurant->id))
    @include("pages.restaurants.form")
@endsection
