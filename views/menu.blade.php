@section('top_menu')
    @php($menu = section('menu'))
    <div class="menu">
        <ul>
            @foreach($menu->multiple('items')->min(1)->max(5)->sortable() as $item)
                @php($link = $item->select('link_to')->fromSection('page'))
                <li><a href="{{ $link->slug }}">{{ $link->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
