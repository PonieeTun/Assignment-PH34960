<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="{{ route('posts.index') }}">Tin tức</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link {{ Request::is('categories*') ? 'active' : '' }}" href="{{ route('categories.index') }}">Danh mục</a>
    </li>
</ul>