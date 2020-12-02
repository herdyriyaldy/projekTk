@extends('layouts.admin')

@section('title', 'Edit Data Spp')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ __('Edit SPP') }}</div>

                    <form method="post" action="{{ route('data-spp.update',$spp->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ $spp->tahun }}">
                            <span class="text-danger">@error('tahun') {{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Nominal</label>
                            <input type="text" class="form-control @error('nominal') is-invalid @enderror" name="nominal" value="{{ $spp->nominal }}">
                            <span class="text-danger">@error('nominal') {{ $message }} @enderror</span>
                        </div>

                        <a href="{{ route('data-spp.index') }}" class="btn btn-primary btn-rounded">
                            <i class="mdi mdi-chevron-left"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-success btn-rounded  float-right">
                            <i class="mdi mdi-check"></i> Simpan
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection