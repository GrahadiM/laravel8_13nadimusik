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
                        {{ __('sidebar.event') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Event Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($data as $item => $v)
                    <div class="col-12 mb-3">
                        <div class="card card-news">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="{{ Storage::disk('local')->url($v->thumbnail) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $v->{'title_'.app()->getLocale()} }}</h5>
                                        <p class="card-text">{!! \Illuminate\Support\Str::limit($v->{'body_'.app()->getLocale()}, $limit = 750, $end = ' ...') !!}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="#" class="card-link text-muted">{{ Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</a>
                                            <a href="{{ route('frontend.event_detail', $v->id) }}" class="card-link link-news">{{__('news.read_more')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Event Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
