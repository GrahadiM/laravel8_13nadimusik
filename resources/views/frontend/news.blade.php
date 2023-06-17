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
        <!-- ======= News Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($data as $item => $v)
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="card card-news">
                            <img class="card-img-top" src="{{ Storage::disk('local')->url($v->thumbnail) }}" alt="Thumbnail">
                            <div class="card-body">
                                <h5 class="card-title">{{ $v->{'title_'.app()->getLocale()} }}</h5>
                                <p class="card-text">{!! \Illuminate\Support\Str::limit($v->{'body_'.app()->getLocale()}, $limit = 150, $end = ' ...') !!}</p>
                                <div class="d-flex justify-content-between">
                                    <a href="#" class="card-link text-muted">{{ Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</a>
                                    <a href="{{ route('frontend.news_detail', $v->id) }}" class="card-link link-news">{{__('news.read_more')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End News Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
