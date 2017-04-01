@if ($paginator->hasPages())
    <ul class="pagination-1">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
            <li class="disabled hide">&laquo;</li>
        @else
            <li><a class="pag-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a></li>
        @endif

    <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="disabled">{{ $element }}</li>
            @endif

        <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class="pag-current" href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

    <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
            <li><a class="pag-next" href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li>
        @else
            <li class="disabled hide">&raquo;</li>
        @endif
    </ul>
@endif
