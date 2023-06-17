{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')

@endpush

{{-- Content --}}
@section('content')

        <h3 class="mb-3">{{ $title }}</h3>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                <div class="inner">
                        <h3>{{ $artist }}</h3>
                        <p>Data Artis</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-address-card"></i>
                    </div>
                    <a href="{{ route('admin.artist.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                <div class="inner">
                        <h3>{{ $news }}</h3>
                        <p>Data Berita</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                <div class="inner">
                        <h3>{{ $event }}</h3>
                        <p>Data Acara</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <a href="{{ route('admin.event.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                <div class="inner">
                        <h3>{{ $about }}</h3>
                        <p>Tentang Kami</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-address-book"></i>
                    </div>
                    <a href="{{ route('admin.about.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                <div class="inner">
                        <h3>{{ $demo }}</h3>
                        <p>Data Demo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <a href="{{ route('admin.demo.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                <div class="inner">
                        <h3>{{ $careers }}</h3>
                        <p>Data Karir</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                    <a href="{{ route('admin.career.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                <div class="inner">
                        <h3>{{ $form_careers }}</h3>
                        <p>Formulir Karir</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <a href="{{ route('admin.career.index') }}" class="small-box-footer">
                        Tampilkan Data <i class="fas fa-arrow-circle-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

@endsection

{{-- Script --}}
@push('scripts')

@endpush
