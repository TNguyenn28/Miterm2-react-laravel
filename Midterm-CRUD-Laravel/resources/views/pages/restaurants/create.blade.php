@extends('layouts.MainLayout')
@section("title", "Create Restaurant")
@section("content")
    @section("actionForm", route("restaurants.store"))
    @include("pages.restaurants.form")
@endsection
