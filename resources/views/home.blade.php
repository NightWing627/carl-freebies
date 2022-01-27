@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex">
        @if (count($data) > 0)
            @foreach ($data as $item)
            <div class="col-xl-4">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-body">
                        <div class="d-flex justify-content-between flex-column pt-4 h-100">
                            <div class="d-block">
                                <div class="d-flex flex-column flex-center">
                                    <div class="symbol symbol-success overflow-hidden">
                                        <img src="{{ asset('uploads/'.$item->image) }}" class="freebie-img freebie-thumb" alt="">
                                    </div>
                                    <a href="{{ route('show', $item->id) }}" class="card-title font-weight-bolder text-dark-75 text-hover-primary display5 m-0 pt-7 pb-1">
                                        {{ $item->name }}</a>
                                </div>
                                <div class="pt-1">
                                    <div class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-2 freebie-content">
                                    {!! html_entity_decode($item->content) !!}
                                    </div>
                                    <a href="{{ route('show', $item->id) }}" 
                                        title="Read More" class="moretag docs-creator d-block pb-3" rel="bookmark">Read More ›</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center" id="kt_sticky_toolbar_chat_toggler_1" title="GET FREEBIE" data-placement="right" data-original-title="Chat Example">
                                <a href="{{ $item->link }}" class="btn btn-danger font-weight-bolder font-size-sm px-14">GET FREEBIE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $data->links() }}
        @else

        @endif
        
        
      
    </div>
</div>
@endsection
