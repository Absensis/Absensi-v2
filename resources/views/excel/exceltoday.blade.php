<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tanggal Pembelajaran</th>
            <th>Jam Pembelajaran</th>
            <th>Kelas</th>
            <th>Guru Pengajar</th>
            <th>Mata Pelajaran</th>
            <th>Link Pembelajaran</th>
            <th>Dokumentasi</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($absens as $absen)
        <tr>
            <th>{{$absen->id}}</th>
            <th>{{$absen->tanggal}}</th>
            <th>{{$absen->jam_pelajaran}}</th>
            <th>
                @foreach($absen->KelasRuang as $item)
                {{ $item->nama_kelas }}
                @endforeach
            </th>
            <th>
                @foreach($absen->Guru as $item)
                {{ $item->nama_guru }}
                @endforeach
            </th>
            <th>
                @foreach($absen->Mapel as $item)
                {{ $item->mata_pelajaran }}
                @endforeach
            </th>
            <th>{{$absen->link_pembelajaran}}</th>
            <th>{{ $absen->dokumentasi}}</th>
            <th>{{$absen->keterangan}}</th>
        </tr>
        @endforeach
    </tbody>
</table>
