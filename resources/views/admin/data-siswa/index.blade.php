@extends('layouts.admin')

@section('title', 'Data Siswa')

@section('content')


<div class="container-fluid">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif
    @if (session('sukses-hapus'))
    <div class="alert alert-danger" role="alert">
        {{session('sukses-hapus')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Data Siswa</div>
                    <a href="{{ route('data-siswa.create') }}" class="btn btn-primary btn-rounded float-left mb-3">
                        <i class="mdi mdi-plus-circle"></i> {{ __('Tambah Siswa') }}
                    </a>
                    <div class="col-md-12" align="right">
                        <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i>
                            Export
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin/export/exportPdfSiswa') }}">Pdf</a>
                        </div>
                    </div>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">KELAS</th>
                                    <th scope="col">NAMA GURU</th>
                                    <th scope="col">NOMOR TELEPON</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($siswa as $value)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $value->nis }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->kelas->nama_kelas }}</td>
                                    <td>{{ $value->guru->nama_guru }}</td>
                                    <td>{{ $value->nomor_telp }}</td>
                                    <td>{{ $value->alamat }}</td>
                                    <td>
                                        <a href="{{ route('data-siswa.edit',$value->id) }}" class="btn btn-sm btn-success ">Edit</a>
                                        <form class="d-inline" action="{{ route('data-siswa.destroy',$value->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger  " onclick="return confirm('Yakin Mau Dihapus ?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-style')
<link href="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('addon-script')
<!-- Page level plugins -->
<script src="{{ url('admin_assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('admin_assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('admin_assets/js/demo/datatables-demo.js') }}"></script>
@endpush