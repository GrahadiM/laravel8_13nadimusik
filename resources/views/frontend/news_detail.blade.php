{{-- Extends layout --}}
@extends('layouts.fe.base')
@section('title', "$title")
@section('description',"$description")

{{-- Styles --}}
@push('styles')

@endpush

{{-- Content --}}
@section('content')

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('news.news')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Event Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-news mb-3">
                            <div class="row g-0">
                                <div class="col-md-12">
                                    <img src="{{ Storage::disk('local')->url($data->thumbnail) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body card-detail">
                                        <div class="sub-about">
                                            <h1 class="text-white text-capitalize">{{ $data->{'title_'.app()->getLocale()} }}</h1>
                                            <div class="title-about justify-content-between row mb-5">
                                                <h5 class="col-md-10">{{ $data->author }}</h5>
                                                <p class="text-muted col-md-2">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</p>
                                            </div>
                                            <p class="card-text">{!! $data->{'body_'.app()->getLocale()} !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Event Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
