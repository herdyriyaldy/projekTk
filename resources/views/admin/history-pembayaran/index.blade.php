@extends('layouts.admin')

@section('title', 'Histori Pembayaran')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 mb-3" align="right">
                <button type="button" class="btn btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-download"></i>
                    Export
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin/export/export-History') }}">Pdf</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Histori Pembayaran</div>

                    @foreach($pembayaran as $value)
                    <div class="border-top">
                        <div class="float-right">
                            <i class="mdi mdi-check text-success"></i> {{ $value->created_at->format('d M, Y') }}
                        </div>
                        <div class="mt-4 text-uppercase">
                            {{ $value->siswa->nama .' - '. $value->siswa->kelas->nama_kelas }}
                        </div>
                        <div>SPP Bulan <b class="text-capitalize">{{ $value->spp_bulan }}</b></div>
                        <div>Nominal SPP Rp.{{ number_format($spp = $value->siswa->spp->nominal,0, ',', '.')}}</div>
                        <div>Bayar Rp.{{ number_format( $bayar = $value->jumlah_bayar,0, ',', '.') }}</div>
                        <div>Tunggakan Rp.{{ number_format($spp - $bayar,0, ',', '.') }}</div>
                    </div>
                    @endforeach

                    @if(count($pembayaran) == 0)
                    <div class="text-center">Tidak ada histori pembayaran</div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</div>

@endsection