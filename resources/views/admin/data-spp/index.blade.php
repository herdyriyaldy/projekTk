@extends('layouts.admin')
@section('title', 'Data Spp')


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
                    <div class="card-title">{{ __('Tambah SPP') }}</div>

                    <form method="post" action="{{ route('data-spp.index') }}">
                        @csrf

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}">
                            <span class="text-danger">@error('tahun') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ old('nominal') }}">
                            <span class="text-danger">@error('nominal') {{ $message }} @enderror</span>
                        </div>

                        <button type="submit" class="btn btn-primary btn-rounded float-right">
                            <i class="mdi mdi-check"></i> Simpan Tagihan
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
                    <div class="card-title">Data SPP</div>

                    <div class="table-responsive mb-3">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">TAHUN</th>
                                    <th scope="col">NOMINAL</th>
                                    <th scope="col">DIBUAT</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $i=1;
                                @endphp
                                @foreach($spp as $value)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $value->tahun }}</td>
                                    <td>Rp. {{ number_format($value->nominal,0, ',', '.') }}</td>
                                    <td>{{ $value->created_at->format('d M, Y') }}</td>

                                    <td>


                                        <a href="{{ route('data-spp.edit',$value->id) }}" class="btn btn-sm btn-success ">Edit</a>
                                        <form class="d-inline" action="{{ route('data-spp.destroy',$value->id) }}" method="post">
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
<script src="{{ url('vendor/sweetalert/sweetalert.all.js') }}"></script>
<script src="{{ url('dist/js/app-style-switcher.js') }}"></script>
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