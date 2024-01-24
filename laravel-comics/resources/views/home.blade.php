@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row mt-5 d-flex">
                @foreach ($dati as $fumetto)
                <div class="col-2 d-flex flex-column align-items-center">
                    <img class="imgGen" src="{{$fumetto["thumb"]}}" alt="">
                    <div class="py-4 text-white fs-7 text-center">{{$fumetto["title"]}}</div>
                </div>
                @endforeach
            </div>
    </div>

@endsection