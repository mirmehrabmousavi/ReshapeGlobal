{{--Start Pagination--}}
@if ($paginator->hasPages())
    <div class="row">
        <div class="text-center col-md-offset-3 col-md-9">
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    <li></li>
                @else
                    <li><a class="page-transition" href="{{$paginator->previousPageUrl()}}">&laquo;</a></li>
                @endif
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item"><a class="page-link" href="#">{{$element}}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><a class="page-transition" href="#">{{$page}}</a></li>
                            @else
                                <li><a class="page-transition" href="{{$url}}">{{$page}}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                @if ($paginator->hasMorePages())
                    <li><a class="page-transition" href="{{$paginator->nextPageUrl()}}">&raquo;</a></li>
                @else
                    <li></li>
                @endif
            </ul>
        </div>
    </div>
@endif
{{--End Pagination--}}
