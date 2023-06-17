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
                        {{ __('home.discover') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Discover Section ======= -->
        <section id="team" class="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($discover as $item => $v)
                        <iframe loading="lazy" class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="100" height="320" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Discover Section -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{ __('home.new_release') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= New Release Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($new_release as $item => $v)
                        <iframe loading="lazy" class="col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100" height="320" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End New Release Section -->


        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{ __('home.our_channel') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Our Channel Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($chanel as $item => $v)
                        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="member rounded">
                                <a href="{{ $v->link }}" target="_blank" rel="noopener noreferrer">
                                    <img loading="lazy" src="{{ Storage::disk('local')->url($v->thumbnail) }}" class="img-fluid" alt="" style="height:100px;width:100%;">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Our Channel Section -->

        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{ __('home.browse_all') }}
                    </li>
                </ol>
            </nav>
        </div>
        <!-- ======= Browse All Section ======= -->
        <section id="team2" class="team2">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    @foreach ($browse_all as $item => $v)
                        <iframe loading="lazy" class="col-md-6 col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="100" height="320" src="{{ $v->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Browse All Section -->

@endsection

{{-- Script --}}
@push('scripts')

    <script>
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src;
            });
            const videos = document.querySelectorAll('iframe[loading="lazy"]');
            videos.forEach(iframe => {
                iframe.src = iframe.dataset.src;
            });
        } else {
            // Dynamically import the LazySizes library
            const script = document.createElement('script');
            script.src =
                'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
            document.body.appendChild(script);
        }
    </script>

@endpush
