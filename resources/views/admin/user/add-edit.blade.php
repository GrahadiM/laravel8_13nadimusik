{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')
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
        <form action="{{ route('admin.user.store') }}" method="post" class="card" enctype="multipart/form-data">
        @else
        <form action="{{ route('admin.user.update', $data->id) }}" method="POST" class="card" enctype="multipart/form-data">
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
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $isEdit ? $data->email : '' }}">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        @if ($isEdit)
                            @if (auth()->user()->role == 'administrator')
                                <select class="form-control select2" aria-label="Default select example" name="role">
                                    @if ($data->role == 'administrator')
                                    <option value="{{$data->role}}" selected>{{ getRole($data->role)['role'] }}</option>
                                    <option value="{{ getRole('admin')['role'] }}">{{ getRole('admin')['role'] }}</option>
                                    @elseif ($data->role == 'admin')
                                    <option value="{{$data->role}}" selected>{{ getRole($data->role)['role'] }}</option>
                                    <option value="{{ getRole('administrator')['role'] }}">{{ getRole('administrator')['role'] }}</option>
                                    @endif
                                </select>
                            @else
                                <input type="text" class="form-control" name="role" value="{{ $isEdit ? $data->role : '' }}" disabled>
                            @endif
                        @else
                            <select class="form-control select2" aria-label="Default select example" name="role">
                                <option value="{{ 'administrator' }}">{{ 'administrator' }}</option>
                                <option value="{{ 'admin' }}">{{ 'admin' }}</option>
                            </select>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        @if (auth()->user()->role == 'administrator')
                        <select class="form-control select2" aria-label="Default select example" name="status">
                            @if ($data->status == 0)
                            <option value="{{$data->status}}" selected>{{ __('Tidak Aktif') }}</option>
                            <option value="{{ getStatus(1)['status'] }}">{{ getStatus(1)['status_name'] }}</option>
                            @elseif ($data->status == 1)
                            <option value="{{$data->status}}" selected>{{ __('Aktif') }}</option>
                            <option value="{{ getStatus(0)['status'] }}">{{ getStatus(0)['status_name'] }}</option>
                            @endif
                        </select>
                        @else
                        <input type="text" class="form-control" name="status" value="{{ $isEdit ? getStatus($data->status)['status_name'] : '' }}" disabled>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.user.index') }}" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary ms-auto">Simpan</button>
                </div>
            </div>
        </form>

@endsection

{{-- Script --}}
@push('scripts')
@endpush
