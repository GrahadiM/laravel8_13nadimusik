{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')
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
                <form action="{{ route('admin.about.store') }}" method="POST" class="row" enctype="multipart/form-data">
                @else
                <form action="{{ route('admin.about.update', $data->id) }}" method="POST" class="row" enctype="multipart/form-data">
                    @method('PUT')
                @endif

                    @csrf
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $isEdit ? $data->name : '' }}">
                        </div>
                    </div>
                    @if ($isEdit)
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" value="{{ $isEdit ? $data->thumbnail : '' }}">
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="form-group">
                            <a href="{{ Storage::disk('local')->url($data->thumbnail) }}" target="_blank" class="btn btn-block btn-info" style="margin-top: 2rem" rel="noopener noreferrer">Lihat Gambar</a>
                        </div>
                    </div>
                    @else
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail" value="">
                        </div>
                    </div>
                    @endif
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Profesi (id)</label>
                            <input type="text" class="form-control" name="desc_id" value="{{ $isEdit ? $data->desc_id : '' }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Profesi (en)</label>
                            <input type="text" class="form-control" name="desc_en" value="{{ $isEdit ? $data->desc_en : '' }}">
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
@endpush
