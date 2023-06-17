{{-- Extends layout --}}
@extends('layouts.adm.base')

{{-- Styles --}}
@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

{{-- Content --}}
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar {{ $title }}</h3>
            {{-- <div class="card-tools">
                <a href="{{ route('admin.demo.create') }}" class="btn btn-success btn-sm">Tambah Data {{ $title }}</a>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Wa/Hp</th>
                        <th>Email</th>
                        <th>File</th>
                        <th>Deskripsi</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item => $v)
                    <tr>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->phone }}</td>
                        <td>{{ $v->email }}</td>
                        <td>
                            @if ($v->file != null)
                                <a href="{{ Storage::disk('local')->url($v->file) }}" target="_blank" class="btn btn-success btn-sm btn-block">Lihat file</a>
                            @else
                                Tidak ada file!
                            @endif
                        </td>
                        <td>{!! \Illuminate\Support\Str::limit($v->desc, $limit = 500, $end = ' ...') !!}</td>
                        <td>{{ $v->updated_at ? Carbon\Carbon::parse($v->updated_at)->diffForHumans() : Carbon\Carbon::parse($v->created_at)->diffForHumans() }}</td>
                        <td class="text-center">
                            <form action="{{ route('admin.demo.destroy', $v->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                {{-- <a class="btn btn-primary btn-block btn-sm" href="{{ route('admin.demo.show', $v->id) }}">
                                    <i class="fas fa-folder mr-2"></i>View
                                </a>
                                <a class="btn btn-info btn-block btn-sm" href="{{ route('admin.demo.edit', $v->id) }}">
                                    <i class="fas fa-pencil-alt mr-2"></i>Ubah
                                </a> --}}
                                <button class="btn btn-danger btn-block btn-sm" type="submit">
                                    <i class="fas fa-trash mr-2"></i>Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Wa/Hp</th>
                        <th>Email</th>
                        <th>File</th>
                        <th>Deskripsi</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

@endsection

{{-- Script --}}
@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        "buttons": ["csv"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
    </script>
@endpush
