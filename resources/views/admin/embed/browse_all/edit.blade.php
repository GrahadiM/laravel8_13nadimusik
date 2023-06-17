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

        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <div class="text-muted">{{ $error }}</div>
        </div>
        @endforeach
        @endif

        @if( !$isEdit )
        <form action="{{ route('admin.home.browse_all.store') }}" method="post" class="card" enctype="multipart/form-data">
        @else
        <form action="{{ route('admin.home.browse_all.update', $data->id) }}" method="POST" class="card" enctype="multipart/form-data">
            @method('PUT')
        @endif

            @csrf
            <div class="row card-body">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $isEdit ? $data->name : '' }}">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Link Embed</label>
                        <input type="text" class="form-control" name="link" value="{{ $isEdit ? $data->link : '' }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.home.browse_all.index') }}" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                </div>
            </div>
        </form>

@endsection

{{-- Script --}}
@push('scripts')

    <!-- Summernote -->
    <script src="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('admin') }}/plugins/codemirror/codemirror.js"></script>
    <script src="{{ asset('admin') }}/plugins/codemirror/mode/css/css.js"></script>
    <script src="{{ asset('admin') }}/plugins/codemirror/mode/xml/xml.js"></script>
    <script src="{{ asset('admin') }}/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
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
