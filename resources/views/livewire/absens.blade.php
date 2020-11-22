<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-book" style="margin-right: 10px;"></i>
        Data <b>Absen</b>
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <!-- dropdown -->
            <x-jet-dropdown align="right" width="48" style="margin-bottom: -20px;">
                <x-slot name="trigger">
                    <div class="ml-1" align="right" style="margin-right: 10px; margin-bottom: 10px;">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Select Action
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        Print PDF
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        Print Excel
                    </x-jet-dropdown-link>

                </x-slot>
            </x-jet-dropdown>

            <!-- table -->
            <table class="table-fixed w-full text-center">
                <thead>
                    <tr class="text-white" style="background-color: #6875F5;">
                        <th class="px-4 py-2" style="width: 14%;">Tanggal</th>
                        <th class="px-4 py-2" style="width: 10%;">Jam Pelajaran</th>
                        <th class="px-4 py-2 w-30">Kelas</th>
                        <th class="px-4 py-2 w-30">Guru Pengajar</th>
                        <th class="px-4 py-2 w-30">Mata Pelajaran</th>
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
                        <td class="border px-4 py-2">
                            @foreach($row->KelasRuang as $item)
                            {{ $item->nama_kelas }}
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">
                            @foreach($row->Guru as $item)
                            {{ $item->nama_guru }}
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">
                            @foreach($row->Mapel as $item)
                            {{ $item->mata_pelajaran }}
                            @endforeach
                        </td>
                        <td class="border px-4 py-2">{{ $row->link_pembelajaran }}</td>
                        <td class="border px-4 py-2"><img src="storage\{{ $row->dokumentasi }}" alt="..."></td>
                        <td class="border px-4 py-2">{{ $row->keterangan }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="8">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
