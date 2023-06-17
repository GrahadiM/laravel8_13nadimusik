{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.css">

@endpush

{{-- Content --}}
@section('content')

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar {{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                @if( !$isEdit )
                <form action="{{ route('admin.career.store') }}" method="POST" class="row" enctype="multipart/form-data">
                @else
                <form action="{{ route('admin.career.update', $data->id) }}" method="POST" class="row" enctype="multipart/form-data">
                    @method('PUT')
                @endif

                    @csrf
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $isEdit ? $data->name : '' }}">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="location" value="{{ $isEdit ? $data->location : '' }}">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label class="form-label">Deadline</label>
                            <input type="datetime-local" class="form-control" name="deadline" value="{{ $isEdit ? date('Y-m-d\TH:i', strtotime($data->deadline)) : '' }}">
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label class="form-label">Isi Konten</label>
                            <textarea name="body" id="summernote" rows="10">{{ $isEdit ? $data->body : '' }}</textarea>
                        </div>
                    </div>
                    <div class="col text-right mb-3">
                        <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

@endsection

{{-- Script --}}
@push('scripts')

    <!-- Summernote -->
    <script src="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
    </script>

@endpush
