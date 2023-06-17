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
                <form action="{{ route('admin.home.n_update') }}" method="POST" class="row" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Part</label>
                            <input type="text" class="form-control" name="part" value="{{ $data->part }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Chanel Id</label>
                            <input type="text" class="form-control" name="channelId" value="{{ $data->channelId }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Jumlah Tampilan</label>
                            <input type="text" class="form-control" name="maxResults" value="{{ $data->maxResults }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Negara</label>
                            <input type="text" class="form-control" name="country" value="{{ $data->country }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Urutkan Berdasarkan</label>
                            <input type="text" class="form-control" name="orderBy" value="{{ $data->orderBy }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Tipe Tampilan</label>
                            <input type="text" class="form-control" name="type" value="{{ $data->type }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Api Key Youtube</label>
                            <input type="text" class="form-control" name="apiKey" value="{{ $data->apiKey }}">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label class="form-label">Link Api Youtube</label>
                            <input type="text" class="form-control" name="youTubeEndPoint" value="{{ $data->youTubeEndPoint }}">
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
