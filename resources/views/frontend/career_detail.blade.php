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
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{ $data->{'name_'.app()->getLocale()} }}
                    </li>
                </ol>
                <ul>
                    <li class="text-white"><h5>{{ $data->location }} &#10072; Deadline : {{ date('d F Y', strtotime($data->deadline)).' ('.Carbon\Carbon::parse($data->deadline)->diffForHumans().')' }}</h5></li>
                </ul>
            </nav>
        </div>
        <!-- ======= Careers Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row ms-md-2">
                    <div class="col-12 mt-md-5">
                        <div class="col-md-10 text-white">{!! $data->{'body_'.app()->getLocale()} !!}</div>
                        <a href="{{ route('frontend.career_show', $data->id) }}" class="col-md-2 btn btn-load-more mt-3">{{ __('careers.send_apply') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Careers Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
