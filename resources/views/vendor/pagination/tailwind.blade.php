@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center mt-8 space-x-2">
        
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-2 text-gray-600 bg-gray-800 rounded-lg cursor-not-allowed">
                ‹
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
               class="px-3 py-2 text-gray-300 bg-gray-800 rounded-lg hover:bg-cyan-600 hover:text-white transition">
                ‹
            </a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-3 py-2 text-gray-500">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 bg-cyan-600 text-white font-semibold rounded-lg shadow">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}"
                           class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg hover:bg-cyan-600 hover:text-white transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"
               class="px-3 py-2 text-gray-300 bg-gray-800 rounded-lg hover:bg-cyan-600 hover:text-white transition">
                ›
            </a>
        @else
            <span class="px-3 py-2 text-gray-600 bg-gray-800 rounded-lg cursor-not-allowed">
                ›
            </span>
        @endif
    </nav>
@endif
