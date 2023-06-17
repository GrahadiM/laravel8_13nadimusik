{{-- Extends layout --}}
@extends('layouts.fe.base')
@section('title', "$title")
@section('description',"$description")

{{-- Styles --}}
@push('styles')

@endpush

{{-- Content --}}
@section('content')

        <!-- Example Videos from API Youtube -->
        <!-- <section id="team" class="video-container team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                </div>
            </div>
        </section> -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('home.discover')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Discover Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach($videoListsDiscover->items as $key => $item)
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('frontend.watch', $item->id->videoId) }}">
                                <div class="member rounded-discover">
                                    <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid" alt="" style="height:300px;width:100%;">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <div class="container">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:80px;">
                                                    <div class="d-block text-start ms-3">
                                                        <span class="color-tosca">{!! \Illuminate\Support\Str::limit($item->snippet->channelTitle, $limit = 50, $end = ' ...') !!}</span>
                                                        <h4>{!! \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') !!}</h4>
                                                        <span>Published at {{ date('d M Y', strtotime($item->snippet->publishTime)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Discover Section -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('home.new_release')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= New Release Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach($videoListsNew->items as $key => $item)
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('frontend.watch', $item->id->videoId) }}">
                                <div class="member rounded">
                                    <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid" alt="" style="height:240px;width:100%;">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <div class="container-fluid px-0 py-2 bg-my-secondary">
                                                <div class="d-flex align-items-end justify-content-between">
                                                    <div class="d-block text-start ms-2">
                                                        <span class="color-tosca">{!! \Illuminate\Support\Str::limit($item->snippet->channelTitle, $limit = 50, $end = ' ...') !!}</span>
                                                        <h4>{!! \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') !!}</h4>
                                                    </div>
                                                    <div class="me-2">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;margin-top:-56px;">
                                                        <span>{{ date('d M Y', strtotime($item->snippet->publishTime)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End New Release Section -->


        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('home.our_channel')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Our Channel Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach($chanelLists->items as $key => $item)
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="member rounded">
                                <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid" alt="" style="height:150px;width:100%;">
                                {{-- <p class="text-muted">{{ $item->snippet->title }}</p> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Our Channel Section -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('home.browse_all')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Browse All Section ======= -->
        <section id="team2" class="team2 mt-5">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach($videoLists->items as $key => $item)
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ route('frontend.watch', $item->id->videoId) }}">
                                <div class="member rounded">
                                    <img src="{{ $item->snippet->thumbnails->medium->url }}" class="img-fluid" alt="" style="height:240px;width:100%;">
                                    <div class="member-info">
                                        <div class="member-info-content">
                                            <div class="container-fluid px-0 py-2 bg-my-secondary">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-2">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;">
                                                    </div>
                                                    <div class="d-block text-start mx-2">
                                                        <span class="color-tosca">{!! \Illuminate\Support\Str::limit($item->snippet->channelTitle, $limit = 50, $end = ' ...') !!}</span>
                                                        <h4>{!! \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') !!}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('frontend.results') }}" class="btn btn-load-more">Load More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Browse All Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
