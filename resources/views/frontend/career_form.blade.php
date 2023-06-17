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
                        {{__('careers.careers_form')}}
                    </li>
                </ol>
                <ul>
                    <li class="text-white"><h5>{{ $data->{'name_'.app()->getLocale()} }}</h5></li>
                </ul>
            </nav>
        </div>
        <!-- ======= Career Form Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-5">

                        <form action="{{ route('frontend.career_form') }}" method="POST" class="form form-demo text-light" enctype="multipart/form-data">
                            @csrf
                            <input name="career_id" type="hidden" value="{{ $data->id }}">
                            <div class="form-group mb-3">
                                <label for="name">{{__('careers.your_name')}}</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="{{__('careers.your_name')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">{{__('careers.phone_number')}}</label>
                                <input name="phone" type="number" class="form-control" id="phone" placeholder="{{__('careers.input_number')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{__('careers.email_address')}}</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="{{__('careers.enter_email')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">{{__('careers.description')}}</label>
                                <textarea name="desc" class="form-control" id="description" rows="8" placeholder="{{__('careers.input_description')}}"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="upload-file">{{__('careers.upload_file')}}</label>
                                <div class="custom-file">
                                    <input name="file" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">{{__('careers.upload')}}</label>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input name="check" type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label" for="check">
                                    {{__('demo.accept_tos')}}<a href="{{ route('frontend.terms_of_services') }}" class="text-white-50" target="_blank" rel="noopener noreferrer"> {{__('demo.tos')}}</a> {{__('demo.accept_pp')}}<a href="{{ route('frontend.privacy_policy') }}" class="text-white-50" target="_blank" rel="noopener noreferrer"> {{__('demo.pp')}}</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-load-more mb-3">{{__('careers.send_demo')}}</button>
                        </form>
                    </div>
                    <div class="col-md-6 ms-lg-auto">
                        <div class="card mt-5" id="card-demo">
                            <div class="card-body">
                                <h5 class="title-quotes">{{ __('careers.quote') }}</h5>
                                <p class="text-quotes">– Steve Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Career Form Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
