<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Laporan Pendaftaran</title>

</head>

<body>

    <style>
        .page-break {
            page-break-after: always;
        }

        .text-center {
            text-align: center;
        }

        .text-header {
            font-size: 1.1rem;
        }

        .size2 {
            font-size: 2.0rem;
        }

        .border-bottom {
            border-bottom: 1px black solid;
        }

        .border {
            border: 1px block solid;
        }

        .border-top {
            border-top: 1px black solid;
        }

        .float-right {
            float: right;
        }

        .mt-4 {
            margin-top: 4px;
        }

        .mx-1 {
            margin: 1rem 0 1rem 0;
        }

        .mr-1 {
            margin-right: 1rem;
        }

        .mt-1 {
            margin-top: 1rem;
        }

        ml-2 {
            margin-left: 2rem;
        }

        .ml-min-5 {
            margin-left: -5px;
        }

        .text-uppercase {
            font: uppercase;
        }

        .d1 {
            font-size: 2rem;
        }

        .img {
            position: absolute;
        }

        .link {
            font-style: underline;
        }

        .text-desc {
            font-size: 17px;
        }

        .text-bold {
            font-style: bold;
        }

        .underline {
            text-decoration: underline;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            color: #666;
            text-shadow: 1px 1px 0px #fff;
            background: #eaebec;
            border: #ccc 1px solid;
        }

        table th {
            padding: 10px 15px;
            border-left: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            background: #FFD700;
        }

        table tr {
            text-align: center;
            padding-left: 20px;
        }

        table td {
            padding: 10px 15px;
            border-top: 1px solid #ffffff;
            border-bottom: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
        }

        .table-center {
            margin-left: auto;
            margin-right: auto;
        }

        .mb-1 {
            margin-bottom: 1rem;
        }
    </style>

    <!-- header -->
    <div class="text-center">
        <img src="{{ public_path('assets/img/logo-laporan.png') }}" class="img" alt="logo.png" width="150" height="120">
        <div style="margin-left:6rem;">
            <span class="text-header text-bold text-danger">
                <br>

                <span class="size2">
                    YAYASAN PENDIDIKAN ISLAM DARUSSALAM<br>
                </span>
                <span class="text-desc">Jalan Mawar dalam Timur NO:41 <br>Telepon (021) 4305275 Website <span class="underline">www.tanjungpriukoke.com</span> - Email <span class="underline">tkislam@tkislam.com</span> <br> Desa Angin ribut Kulon Kec. Priuk Kel.Goa Kodepos. 14270 <br> </span>

        </div>

    </div>
    <div>
        <!-- /header -->
        <br>
        <br>
        <hr class="border">

        <!-- content -->

        <div class=" text-center mb-1">
            <h2>LAPORAN PENDAFTARAN MURID TK</h2>
        </div>
        <table class="table-center mb-1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Pekerjaan Ibu</th>
                    <th>No Telpon Ayah</th>
                    <th>No Telpon Ibu</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftaran as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_murid }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tempat_lahir }}</td>
                    <td>{{ $item->nama_ayah }}</td>
                    <td>{{ $item->nama_ibu }}</td>
                    <td>{{ $item->pekerjaan_ayah }}</td>
                    <td>{{ $item->pekerjaan_ibu }}</td>
                    <td>{{ $item->no_tlp_ayah }}</td>
                    <td>{{ $item->no_tlp_ibu }}</td>
                    <td>{{ $item->created_at->format('d-M-Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- /content -->

        <!-- footer -->
        <div>Pembuat : {{ auth()->user()->name }}</div>
        <!-- /footer -->
</body>

</html>