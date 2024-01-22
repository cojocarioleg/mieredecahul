@if ($paginator->hasPages())
    <nav class="page-items-counter">


        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">

            <div>
                <p class="results">
                    {!! __('Vezi') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('pagin--') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('din ') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('Rezultate') !!}
                </p>
            </div>

        </div>
    </nav>
@endif
