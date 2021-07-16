@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

    <div class="col-md-9 col-xl-7">
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
    <div>
        {{$articles->links()}}
    </div>
    <!-- Divider-->
    </div>

@include('front.widgets.categoryWidget')
@endsection
