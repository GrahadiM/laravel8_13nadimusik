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
                <div class="row mb-3">
                    @foreach ($data as $item => $v)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="{{ route('frontend.artist_detail',$v->id) }}">
                            <img src="{{ $v->thumbnail ? Storage::disk('local')->url($v->thumbnail) : asset('frontend/assets/images/Trisuaka.png') }}" class="card-img-top" alt="thumbnail">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <div class="container-fluid px-0 py-2 bg-my-secondary">
                                        <div class="d-flex align-items-end justify-content-center">
                                            <h5 class="card-title text-white">{{ $v->name }}</h5>
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
        <!-- End Artist Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
