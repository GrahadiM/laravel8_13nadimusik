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
                        Discover
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Discover Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded-discover">
                            <img src="{{ asset('frontend') }}/assets/img/team/team-1.jpg" class="img-fluid" alt="" style="height:300px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:80px;">
                                            <div class="d-block text-start ms-3">
                                                <span class="color-tosca">Alfrid Adistya</span>
                                                    <h4>Sabodo Teuing Official Video</h4>
                                                <span>25 Mei 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded-discover">
                            <img src="{{ asset('frontend') }}/assets/img/team/team-1.jpg" class="img-fluid" alt="" style="height:300px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:80px;">
                                            <div class="d-block text-start ms-3">
                                                <span class="color-tosca">Alfrid Adistya</span>
                                                    <h4>Sabodo Teuing Official Video</h4>
                                                <span>25 Mei 2022</span>
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
        <!-- End Discover Section -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        New Release
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= New Release Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-block text-start ms-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                            <div class="me-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;margin-top:-56px;">
                                                <span >25 Mei 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-block text-start ms-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                            <div class="me-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;margin-top:-56px;">
                                                <span >25 Mei 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-block text-start ms-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                            <div class="me-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;margin-top:-56px;">
                                                <span >25 Mei 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/Thumbnail.png" class="img-fluid" alt="" style="height:240px;width:100%;">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-block text-start ms-2">
                                                <span class="color-tosca ">Alfrid Adistya</span>
                                                <h4>Sabodo Teuing </h4>
                                            </div>
                                            <div class="me-2">
                                                <img src="{{ asset('frontend') }}/assets/images/icon/icon-chanel.png" alt="Profile" class="rounded-circle" style="height:56px;margin-top:-56px;">
                                                <span >25 Mei 2022</span>
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
        <!-- End New Release Section -->


        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        Our Channel
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Our Channel Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/category/Group 1.png" class="img-fluid" alt="" style="height:100px;width:100%;">
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/category/Group 2.png" class="img-fluid" alt="" style="height:100px;width:100%;">
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/category/Group 3.png" class="img-fluid" alt="" style="height:100px;width:100%;">
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="member rounded">
                            <img src="{{ asset('frontend') }}/assets/images/category/Group 4.png" class="img-fluid" alt="" style="height:100px;width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Channel Section -->

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
                    <div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="" class="btn btn-load-more">Load More</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Browse All Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
