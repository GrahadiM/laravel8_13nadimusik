{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/simplemde/simplemde.min.css">

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
                <form action="{{ route('admin.privacy_policy.store') }}" method="POST" class="row" enctype="multipart/form-data">
                @else
                <form action="{{ route('admin.privacy_policy.update', $data->id) }}" method="POST" class="row" enctype="multipart/form-data">
                    @method('PUT')
                @endif

                    @csrf
                    <input type="hidden" name="author" value="{{ Auth::user()->name }}">

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Judul (id)</label>
                            <input type="text" class="form-control" name="title_id" value="{{ $isEdit ? $data->title_id : '' }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Judul (en)</label>
                            <input type="text" class="form-control" name="title_en" value="{{ $isEdit ? $data->title_en : '' }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Isi Konten (id)</label>
                            <textarea class="form-control summernote" name="body_id" rows="10">{{ $isEdit ? $data->body_id : '' }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Isi Konten (en)</label>
                            <textarea class="form-control summernote" name="body_en" rows="10">{{ $isEdit ? $data->body_en : '' }}</textarea>
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
        $('.summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
    </script>

@endpush
