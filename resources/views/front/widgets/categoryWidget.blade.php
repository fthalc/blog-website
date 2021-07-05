<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            KATEGORİLER
        </div>
        <div class="list-group">
            @foreach($categories as $category)
                <ul class="category-ul">
                    <li class="category-li">
                        {{$category->name}} <span style="color: #1a1e21" class="badge float-end">  12</span>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>

</div>
