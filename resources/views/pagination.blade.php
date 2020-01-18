@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="blog-page current-page transition">{{ $element }}</a>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="blog-page current-page transition">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="blog-page transition">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        @else
            <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
        @endif
    </div>
@endif