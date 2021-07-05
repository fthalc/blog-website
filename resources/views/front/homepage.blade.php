@extends('front.layouts.master')
@section('title','Anasayfa')
@section('content')

        <div class="col-md-9 col-xl-7">
            @foreach($articles as $article)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">{{$article->title}}</h2>
                    <h3 class="post-subtitle">{{\Illuminate\Support\Str::limit($article->content, 90)}}</h3>
                </a>
                <p class="post-meta"  >Kategori :
                    <a href="#!">{{$article->getCategory->name}}
                        <span class="float-end">{{$article->created_at}}</span>
                    </a>
                </p>
            </div>
                <hr/>
            @endforeach
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
@include('front.widgets.categoryWidget')
@endsection
