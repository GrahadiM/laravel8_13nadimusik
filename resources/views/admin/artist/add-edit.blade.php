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
        <form action="{{ route('admin.artist.store') }}" method="post" class="card" enctype="multipart/form-data">
        @else
        <form action="{{ route('admin.artist.update', $data->id) }}" method="POST" class="card" enctype="multipart/form-data">
            @method('PUT')
        @endif

            @csrf
            <div class="row card-body">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $isEdit ? $data->name : '' }}">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group row">
                        <label class="col-12">Profile</label>
                        <input type="file" name="profile" class="dropify form-control col-9" data-height="190" data-allowed-file-extensions="png jpg jpeg" value="{{ $isEdit ? $data->profile : '' }}" data-default-file="{{ $isEdit ? $data->profile : '' }}}">
                        @if ($isEdit)
                        <a href="{{ Storage::disk('local')->url($data->profile) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block col-2 ml-3">Lihat Gambar</a>
                        @else
                        <span class="text-muted col-3">height : 540px <br> width : 320px</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group row">
                        <label class="col-12">Thumbnail</label>
                        <input type="file" name="thumbnail" class="dropify form-control col-9" data-height="190" data-allowed-file-extensions="png jpg jpeg" value="{{ $isEdit ? $data->thumbnail : '' }}" data-default-file="{{ $isEdit ? $data->thumbnail : '' }}}">
                        @if ($isEdit)
                        <a href="{{ Storage::disk('local')->url($data->thumbnail) }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-block col-2 ml-3">Lihat Gambar</a>
                        @else
                        <span class="text-muted col-3">height : 200px <br> width : 400px</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Deskripsi (id)</label>
                        <textarea class="form-control summernote" name="desc_id" rows="10">{{ $isEdit ? $data->desc_id : '' }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Deskripsi (en)</label>
                        <textarea class="form-control summernote" name="desc_en" rows="10">{{ $isEdit ? $data->desc_en : '' }}</textarea>
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
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.artist.index') }}" class="btn btn-link">Kembali</a>
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
        $('.summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
        });
    })
    </script>

@endpush
