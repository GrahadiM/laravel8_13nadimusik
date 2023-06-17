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
                        {{__('careers.careers')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Careers Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <!-- Title -->
                        <div class="card-about">
                            <h3 class="title-about">
                                {{-- Calling
                                <span style="color: #07E7D3;">
                                    All Makers
                                </span> --}}
                                {{__('careers.calling')}}
                            </h3>
                            <p class="text-about">
                                {{-- We're looking for creative innovators, who share our passion at music.
                                <br>
                                Makers who love to build stuff with their own hands and challenge the status quo. --}}
                                {{__('careers.description')}}
                            </p>
                        </div>
                        <!-- Join Our Team -->
                        <div class="sub-about">
                            <h3 class="title-about">
                                {{-- Join<span style="color: #07E7D3;"> Our Team</span> --}}
                                {{__('careers.join')}}
                            </h3>
                        </div>
                        @foreach ($data as $item => $v)
                        <div class="card card-careers">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h3 class="card-title">{{ $v->{'name_'.app()->getLocale()} }}</h3>
                                        <p class="card-text">
                                            &#8226; {{ $v->location }} &#10072; Deadline : {{ date('d F Y', strtotime($v->deadline)).' ('.Carbon\Carbon::parse($v->deadline)->diffForHumans().')' }}
                                        </p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                                            <a href="{{ route('frontend.career_detail', $v->id) }}" class="btn btn-load-more btn-block mt-3" rel="noopener noreferrer">{{__('careers.read_more')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- End Careers Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
