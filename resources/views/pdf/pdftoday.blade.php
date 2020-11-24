<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>
    <!-- Content Row -->

    <div class="container-fluid">

        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <div class="row">
                <div class="col">
                    <h2 class="m-0 font-weight-bold text-primary">Data Absen</h2>
                    <h4 style="margin-top: 15px;">Tanggal Print PDF : {{date('d-m-Y')}}</h4>
                    <h4>Nama Penyetak : {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" cellspacing="0" width=100%" border="1">
                    <tr>
                        <th>Id</th>
                        <th style="width: 10%;">Tanggal</th>
                        <th>Jam</th>
                        <th style="width: 8%;">Kelas</th>
                        <th style="width: 10%;">Guru Pengajar</th>
                        <th style="width: 10%;">Mata Pelajaran</th>
                        <th>Link Pembelajaran</th>
                        <th>Dokumentasi</th>
                        <th>Keterangan</th>
                    </tr>
                    @foreach($absen as $b)
                    <tr>
                        <th>{{$b->id}}</th>
                        <th>{{$b->tanggal}}</th>
                        <th>{{$b->jam_pelajaran}}</th>
                        <th>
                            @foreach($b->KelasRuang as $item)
                            {{ $item->nama_kelas }}
                            @endforeach
                        </th>
                        <th>
                            @foreach($b->Guru as $item)
                            {{ $item->nama_guru }}
                            @endforeach
                        </th>
                        <th>
                            @foreach($b->Mapel as $item)
                            {{ $item->mata_pelajaran }}
                            @endforeach
                        </th>
                        <th>{{$b->link_pembelajaran}}</th>
                        <th><img style="width: 20%;" src="storage/absens/November2020/{{ $b->dokumentasi}}"></th>
                        <th>{{$b->keterangan}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>

</html>
