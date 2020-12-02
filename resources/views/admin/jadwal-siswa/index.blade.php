@extends('layouts.admin')
@section('title','Jadwal Siswa')
@section('content')

<style type="text/css">
    .warna {
        color: red;
    }
</style>

<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jadwal Mata Pelajaran</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">


            <h6 class="m-0 font-weight-bold text-primary">JADWAL</h6>

            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i>
                    Export Jadwal
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin/export/export-jadwal') }}">Pdf</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>Nama Kelas</th>
                            <th>Nama Guru</th>
                            <th>Hadir</th>
                            <th>Tidak Hadir</th>
                            <th>Izin</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($jadwal as $value)
                        <tr>
                            <td scope="row">{{ $i }}</td>
                            <td>{{ $value->siswa->nis }}</td>
                            <td>{{ $value->siswa->nama }}</td>
                            <td>{{ $value->siswa->kelas->nama_kelas }}</td>
                            <td>{{ $value->siswa->guru->nama_guru }}</td>
                            <td align="center"><input type="checkbox"></td>
                            <td align="center"><input type="checkbox"></td>
                            <td align="center"><input type="checkbox"></td>
                            <td class="warna" align="center"></td>
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