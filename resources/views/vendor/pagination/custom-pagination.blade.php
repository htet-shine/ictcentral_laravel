@if ($paginator->hasPages())
    <ul class="pagination-custom" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-c-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-c-link disabled" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-c-item">
                <a class="page-c-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-c-item disabled" aria-disabled="true"><span class="page-c-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-c-item active" aria-current="page"><span class="page-c-link active">{{ $page }}</span></li>
                    @else
                        <li class="page-c-item"><a class="page-c-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-c-item">
                <a class="page-c-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-c-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-c-link disabled" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif
