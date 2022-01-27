@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!--begin::Card-->
            <div class="card">
                <div class="card-body">
                    <div class="entry-meta d-flex flex-wrap justify-content-between align-items-center px-3 px-md-4 px-xl-5 border-bottom">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent m-0 px-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="Home" rel="bookmark" class="docs-creator">Freebies</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('home') }}" title="{{ $freeby->category->name }}" rel="bookmark" class="docs-creator">{{ $freeby->category->name }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $freeby->name }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row d-flex py-6">
                        <div class="col-lg-5 justify-content-center">
                            <div class="d-block">
                                <div class="d-flex flex-column flex-center">
                                    <div class="symbol symbol-success overflow-hidden">
                                        <img src="{{ asset('uploads/'.$freeby->image) }}" class="freebie-detail-img h-auto" />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-7 py-6 px-10">
                            <p class="text-dark-75 display3 font-weight-bolder">{{ $freeby->name }}</p>
                            <div class="d-block">
                                {!!  html_entity_decode($freeby->content) !!}
                            </div>
                            <div class="d-flex justify-content-end" id="kt_sticky_toolbar_chat_toggler_1" title="GET FREEBIE" data-placement="right" data-original-title="Chat Example">
                                <a href="{{ $freeby->link }}" class="btn btn-danger font-weight-boldest font-size-h5 px-14">GET FREEBIE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
