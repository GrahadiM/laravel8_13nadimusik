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
                    <li aclass="breadcrumb-item">
                        {{ __('sidebar.artist') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Artist Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="card mb-3">
                    <div class="row g-0 bg-my-secondary text-white">
                        <div class="col-md-3">
                            <img src="{{ $data->profile ? Storage::disk('local')->url($data->profile) : asset('frontend/assets/images/lita.png') }}" class="img-fluid rounded-start" alt="profile">
                        </div>
                        <div class="col-md-9">
                            <div class="member-info">
                                <div class="member-info-content">
                                        <div class="card-body">
                                            <h5 class="card-title text-capitalize text-white fs-1 fw-bold">{{ $data->name }}</h5>
                                            <p class="card-text fw-bold">
                                                {{ \Illuminate\Support\Str::limit($data->{'desc_'.app()->getLocale()}, $limit = 150, $end = ' ...') }}
                                            </p>
                                            <p class="card-text">
                                                {!! \Illuminate\Support\Str::limit($data->{'body_'.app()->getLocale()}, $limit = 1500, $end = ' ...') !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Artist Section -->

        {{-- <!-- ======= Video Section ======= -->
        <section id="team2" class="team2 mt-5">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;">
                                            </div>
                                            <div class="d-block text-start mx-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-center">
                                            <div class="ms-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;">
                                            </div>
                                            <div class="d-block text-start mx-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Video Section --> --}}

@endsection

{{-- Script --}}
@push('scripts')

@endpush
