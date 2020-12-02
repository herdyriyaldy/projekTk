@extends('layouts.admin')
@section('title','Pendaftaran')
@section('content')

<style type="text/css">
    .warna {
        color: red;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pendaftaran Siswa Baru</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">


            <h6 class="m-0 font-weight-bold text-primary">Data Siswa yang sudah mendaftar</h6>

            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i>
                    Export
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin/export/exportPdf') }}">Pdf</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Murid</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Tanggal Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_murid}}</td>
                            <td>{{ $item->tanggal_lahir}}</td>
                            <td>{{ $item->jenis_kelamin}}</td>
                            <td>{{ $item->tempat_lahir}}</td>
                            <td>{{ $item->nama_ayah}}</td>
                            <td>{{ $item->nama_ibu}}</td>
                            <td class="warna" align="center">{{ $item->created_at->format('d-M-Y') }}</td>

                        </tr>

                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->


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