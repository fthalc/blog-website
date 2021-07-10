@extends('front.layouts.master')
@section('title',$article->title  )
@section('bg',$article->image)
@section('content')
    <div class="col-md-9 mx-auto">
        <p><h1 style="font-weight: bold">{{$article->title}}</h1></p>
        <p>
            {{$article->content}}
        </p>
        <br><br>
        <span style="background-color: #cbccce;" class="text-black-50">Okunma Sayısı : <b>{{$article->hit}}</b> </span>

    </div>
    @include('front.widgets.categoryWidget')
@endsection
