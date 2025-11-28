@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="paginate relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-orange-700 dark:border-gray-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-orange-50 bg-orange-600 border-orange-700 leading-5 rounded-md hover:text-lg focus:outline-none focus:ring ring-gray-300 focus:border-b-orange-700 active:bg-orange-600 active:text-orange-50 transition ease-in-out duration-150 dark:bg-orange-600 dark:border-b-orange-800 dark:text-orange-50 dark:focus:border-orange-700 dark:active:bg-orange-600 dark:active:text-orange-50">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-orange-50 bg-orange-600 border-orange-700 leading-5 rounded-md hover:text-lg focus:outline-none focus:ring ring-gray-300 focus:border-b-orange-700 active:bg-orange-600 active:text-orange-50 transition ease-in-out duration-150 dark:bg-orange-600 dark:border-b-orange-800 dark:text-orange-50 dark:focus:border-orange-700 dark:active:bg-orange-600 dark:active:text-orange-50">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="paginate relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-gray-800 dark:border-gray-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-end">
 {{--           <div>
                <p class="text-sm text-gray-700 leading-5 dark:text-gray-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="paginate font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="paginate font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="paginate font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>--}}

            <div>
                <span class="paginate relative z-0 inline-flex rtl:flex-row-reverse rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span class="paginate" aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="paginate relative inline-flex items-center px-2 py-2 text-sm font-medium text-orange-600 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-orange-600  border-gray-300 rounded-l-md leading-5 hover:text-orange-50 focus:z-10 focus:outline-none active:bg-orange-600 active:text-orange-50 transition ease-in-out duration-150 dark:bg-orange-50 dark:active:bg-orange-600 " aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span class="paginate" aria-disabled="true">
                                <span class="paginate relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-orange-600 cursor-default leading-5 dark:bg-orange-50 dark:text-orange-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span class="paginate" aria-current="page">
                                        <span class="paginate relative inline-flex items-center px-4 py-2 -ml-px text-lg font-medium text-orange-600 cursor-default leading-5  rounded-lg dark:bg-orange-100 dark:text-orange-600">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-orange-600/70  leading-5 hover:text-orange-50 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-orange-100 active:text-orange-600 transition ease-in-out duration-150 dark:bg-orange-50  dark:text-orange-600/70 dark:hover:text-orange-50 dark:active:bg-orange-100 dark:focus:border-blue-800" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="paginate relative inline-flex items-center px-2 py-2 text-sm font-medium text-orange-600 cursor-default rounded-l-md leading-5" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span class="paginate" aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-orange-600  border-gray-300 rounded-l-md leading-5 hover:text-orange-50 focus:z-10 focus:outline-none active:bg-orange-600 active:text-orange-50 transition ease-in-out duration-150 dark:bg-orange-50 dark:active:bg-orange-600 " aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
