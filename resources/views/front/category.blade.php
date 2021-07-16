@extends('front.layouts.master')
@section('title',$category->name.' Kategorisi')
@section('content')

    <div class="col-md-9 col-xl-7">
    @if(count($articles)>0)
    @foreach($articles as $article)
        <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('single', [$article->getCategory->slug,$article->slug])}}">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <img src="{{$article->image}}"/>
                    <h3 class="post-subtitle">{{\Illuminate\Support\Str::limit($article->content, 90)}}</h3>
                </a>
                <p class="post-meta"  >Kategori :
                    <a href="#!">{{$article->getCategory->name}}
                        <span class="float-end">{{$article->created_at->diffForHumans()}}</span>
                    </a>
                </p>
            </div>
            @if(!$loop->last)
                <hr/>
            @endif
    @endforeach
    @else
        <div class="alert alert-danger">
            <h1>Bu kategoriye ait yazı bulunamadı</h1>
        </div>
    @endif
    <!-- Divider-->
    </div>
@include('front.widgets.categoryWidget')
@endsection
