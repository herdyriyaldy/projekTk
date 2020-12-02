@extends('layouts.admin')
@section('title', 'Edit Matapelajaran')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ __('Edit Matapelajaran') }}</div>

                    <form method="post" action="{{ route('matapelajaran.update',$matapelajaran->id) }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label>Matapelajaran</label>
                            <input type="text" class="form-control @error('matapelajaran') is-invalid @enderror" name="matapelajaran" value="{{ $matapelajaran->matapelajaran }}">
                            <span class="text-danger">@error('matapelajaran') {{ $message }} @enderror</span>
                        </div>

                        <a href="{{ route('matapelajaran.index') }}" class="btn btn-primary btn-rounded">
                            <i class="mdi mdi-chevron-left"></i> Kembali
                        </a>

                        <button type="submit" class="btn btn-success btn-rounded">
                            <i class="mdi mdi-check"></i> Simpan
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection