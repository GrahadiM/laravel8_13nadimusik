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
                        Demo
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Demo Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-5">
                        <form action="{{ route('frontend.demo_form') }}" method="POST" class="form form-demo text-light" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">{{__('demo.your_name')}}</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="{{__('demo.input_name')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">{{__('demo.phone_number')}}</label>
                                <input name="phone" type="number" class="form-control" id="phone" placeholder="{{__('demo.input_number')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">{{__('demo.email_address')}}</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="{{__('demo.enter_email')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">{{__('demo.description')}}</label>
                                <textarea name="desc" class="form-control" id="description" rows="8" placeholder="{{__('demo.input_description')}}"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="upload-file">{{__('demo.upload_file')}}</label>
                                <div class="custom-file">
                                    <input name="file" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">{{__('demo.upload')}}</label>
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input name="check" type="checkbox" class="form-check-input" id="check">
                                {{-- <label class="form-check-label" for="check">
                                    I Accept the <a href="" target="_blank" rel="noopener noreferrer">Terms of Service</a> as well as <a href="" target="_blank" rel="noopener noreferrer">Privacy Policy</a>.
                                </label> --}}
                                <label class="form-check-label" for="check">
                                    {{__('demo.accept_tos')}}<a href="{{ route('frontend.terms_of_services') }}" class="text-white-50" target="_blank" rel="noopener noreferrer"> {{__('demo.tos')}}</a> {{__('demo.accept_pp')}}<a href="{{ route('frontend.privacy_policy') }}" class="text-white-50" target="_blank" rel="noopener noreferrer"> {{__('demo.pp')}}</a>.
                                </label>
                            </div>
                            <button type="submit" class="btn btn-load-more mb-3">{{__('demo.send_demo')}}</button>
                        </form>
                    </div>
                    <div class="col-md-6 ms-lg-auto">
                        <div class="card mt-5" id="card-demo">
                            <div class="card-body">
                                <h5 class="title-quotes">{{__('demo.quote')}}</h5>
                                <p class="text-quotes">– Steve Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Demo Section -->

@endsection

{{-- Script --}}
@push('scripts')

@endpush
