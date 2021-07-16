@isset($categories)
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            KATEGORİLER
        </div>
        <div class="list-group">
            @foreach($categories as $category)
                <ul class="category-ul  ">
                    <li class="category-li @if(Request::segment(2)==$category->slug) alert-danger @endif ">
                        <a href="{{route('category',$category->slug)}}">{{$category->name}}</a>
                        <span style="color: #1a1e21" class="badge float-end">{{$category->articleCount()}}</span>

                    </li>
                </ul>
            @endforeach
        </div>
    </div>
    @endisset
</div>
