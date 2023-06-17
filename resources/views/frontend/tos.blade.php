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
                        {{ $data->{'title_'.app()->getLocale()} }}
                    </li>
                </ol>
                <ul>
                    <li class="text-white"><h5>{{__('demo.created_at')}} {{ date('d F Y', strtotime($data->updated_at != null  ? ($data->updated_at) : $data->created_at)).' ('.Carbon\Carbon::parse($data->updated_at != null  ? $data->updated_at : $data->created_at)->diffForHumans().')' }}</h5></li>
                </ul>
            </nav>
        </div>
        <!-- ======= Careers Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row ms-md-2">
                    <div class="col-12 mt-md-5">
                        <div class="col-md-10 text-white">{!! $data->{'body_'.app()->getLocale()} !!}</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Careers Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
