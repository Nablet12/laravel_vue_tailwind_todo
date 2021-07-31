@extends('layout')

@section('content')
    <--!project /-->
    <--!task /-->

    <ul class = "flex">
        <li class = "mx-2 border border-gray-600 bg-gray-50 rounded p-2 text-xl">
            <router-link to = "home"> Home </router-link>
        </li>
        <li class = "mx-2 border border-gray-600 bg-gray-50 rounded p-2 text-xl">
            <router-link to = "project"> Project </router-link>
        </li>
        <li class = "mx-2 border border-gray-600 bg-gray-50 rounded p-2 text-xl">
            <router-link to ="task"> Task </router-link>
        </li>
    </ul>
    <div>
        <router-view></router-view>
    </div>
@endsection