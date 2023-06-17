{{-- Extends layout --}}
@extends('layouts.fe.base')
@section('title', "$title")
@section('description',"$description")

{{-- Styles --}}
@push('styles')

@endpush

{{-- Content --}}
@php
    $our_commitment_array = explode(" ",__('about.our_commitment'));
    $our_mission_array = explode(" ",__('about.our_mission'));
    $our_team_array = explode(" ",__('about.our_team'));

@endphp
@section('content')

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{__('about.about_us')}}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= About-us Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <!-- About Title -->
                        <div class="card-about">
                            {{-- <h3 class="title-about">
                                We’re here to <br>
                                <span style="color: #07E7D3;">
                                    gurantee your success
                                </span>
                            </h3> --}}
                            <h3 class="title-about">
                                {{__('about.we_are_here')}} <br>

                            </h3>
                            <p class="text-about">
                                {{__('about.about_description')}}
                            </p>
                            <img src="{{ asset('frontend') }}/assets/images/banner-about-us.png" class="img-fluid rounded mx-auto d-block" alt="Thumbnail">
                        </div>

                        <!-- Our Mission -->
                        <div class="sub-about">
                            <h3 class="title-about">
                                {{$our_mission_array[0]}}
                                <span style="color: #07E7D3;">
                                    {{$our_mission_array[1]}}
                                </span>
                            </h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-about">
                                        {{__('about.unmatched_service')}}
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-about">
                                        {{__('about.desc_unmatched_service')}}
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="text-about">
                                        {{__('about.specific')}}
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-about">
                                        {{__('about.desc_specific')}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Our Commitment -->
                        <div class="sub-about">
                            <h3 class="title-about">
                                {{$our_commitment_array[0]}}
                                <span style="color: #07E7D3;">
                                    {{$our_commitment_array[1]}}
                                </span>
                            </h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="text-about">
                                        {{__('about.unmatched_service')}}
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-about">
                                        {{__('about.desc_unmatched_service')}}
                                    </p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="text-about">
                                        {{__('about.specific')}}
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <p class="text-about">
                                        {{__('about.desc_specific')}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Our Team -->
                        <div class="card-team">
                            <h3 class="title-team">
                                {{$our_team_array[0]}}
                                <span style="color: #07E7D3;">
                                    {{$our_team_array[1]}}
                                </span>
                            </h3>
                            <div class="row mb-3">
                                @foreach ($data as $item => $v)
                                <div class="col-xl-3 col-md-6 col-sm-12">
                                    <div class="card-single-team">
                                        <img src="{{ Storage::disk('local')->url($v->thumbnail) }}" class="img-fluid img-profile" alt="img-youtube">
                                        <div class="card-team-profile">
                                            <h5 class="title-sub-team">{{ $v->name }}</h5>
                                            <p class="text-team text-muted">{!! \Illuminate\Support\Str::limit($v->{'desc_'.app()->getLocale()}, $limit = 25, $end = ' ...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End About-us Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
