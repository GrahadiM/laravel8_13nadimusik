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
                        Browse All
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
                                                        <span class="color-tosca ">{{ \Illuminate\Support\Str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}</span>
                                                        <h4>{{ \Illuminate\Support\Str::limit($item->snippet->channelTitle, $limit = 50, $end = ' ...') }}</h4>
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
        <!-- End Browse All Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
