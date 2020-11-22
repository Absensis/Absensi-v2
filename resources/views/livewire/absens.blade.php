<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Data Absen
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <table class="table-fixed w-full text-center">
                <thead>
                    <tr class="text-white" style="background-color: #6875F5;">
                        <th class="px-4 py-2" style="width: 14%;">Tanggal</th>
                        <th class="px-4 py-2" style="width: 10%;">Jam Pelajaran</th>
                        <th class="px-4 py-2 w-20">Kelas</th>
                        <th class="px-4 py-2 w-20">Guru Pengajar</th>
                        <th class="px-4 py-2 w-20">Mata Pelajaran</th>
                        <th class="px-4 py-2" style="width: 20%;">Link Pembelajaran</th>
                        <th class="px-4 py-2">Dokumentasi</th>
                        <th class="px-4 py-2">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($absen as $row)
                    <tr>
                        <td class="border px-4 py-2">{{ $row->tanggal }}</td>
                        <td class="border px-4 py-2">{{ $row->jam_pelajaran }}</td>
                        <td class="border px-4 py-2">{{ $row->kelas }}</td>
                        <td class="border px-4 py-2">{{ $row->guru_pengajar }}</td>
                        <td class="border px-4 py-2">{{ $row->mata_pelajaran }}</td>
                        <td class="border px-4 py-2">{{ $row->link_pembelajaran }}</td>
                        <td class="border px-4 py-2"><img src="storage\{{ $row->dokumentasi }}" alt="..."></td>
                        <td class="border px-4 py-2">{{ $row->keterangan }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="5">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
