@extends('layouts.header')


@section('title', "Profile")


@section('header')
    @parent
@endsection


@section('content')
    Profile Page {{$user->name ?? ''}}
@endsection

