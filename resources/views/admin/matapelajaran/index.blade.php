@extends('layouts.admin')
@section('title', 'Matapelajaran')
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
                    <div class="card-title">{{ __('Tambah Matapelajaran') }}</div>

                    <form method="post" action="{{ route('matapelajaran.index') }}">
                        @csrf

                        <div class="form-group">
                            <label>Matapelajaran</label>
                            <input type="text" class="form-control @error('matapelajaran') is-invalid @enderror" name="matapelajaran" value="{{ old('matapelajaran') }}">
                            <span class="text-danger">@error('matapelajaran') {{ $message }} @enderror</span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-rounded">
                            <i class="mdi mdi-check"></i> Simpan
                        </button>

                    </form>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Matapelajaran</div>

                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">MATAPELAJARAN</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @foreach($matapelajaran as $value)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $value->matapelajaran }}</td>

                                    <td>


                                        <a href="{{ route('matapelajaran.edit',$value->id) }}" class="btn btn-sm btn-success ">Edit</a>
                                        <form class="d-inline" action="{{ route('matapelajaran.destroy',$value->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger  ">Hapus</button>
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