<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-address-book" style="margin-right: 10px;"></i>
        Data <b>Guru</b>
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
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
                        <i class="fas fa-file-pdf" style="margin-right: 5px; color: blue;"></i>
                        Print PDF
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        <i class="fas fa-file-excel" style="margin-right: 5px; color: green;"></i>
                        Print Excel
                    </x-jet-dropdown-link>

                </x-slot>
            </x-jet-dropdown>

            <!-- table -->
            <table class="table-responsive w-full text-center">
                <thead>
                    <tr class="text-white" style="background-color: #6875F5;">
                        <th class="px-4 py-2" style="width: 15%;">Nik</th>
                        <th class="px-4 py-2" style="width: 15%;">Nama Guru</th>
                        <th class="px-4 py-2" style="width: 12%;">Tempat Lahir</th>
                        <th class="px-4 py-2" style="width: 10%;">Tanggal Lahir</th>
                        <th class="px-4 py-2 w-20">Agama</th>
                        <th class="px-4 py-2" style="width: 10%;">Jenis Kelamin</th>
                        <th class="px-4 py-2">Foto Guru</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    @forelse($guru as $row)
                    <tr>
                        <td class="border px-4 py-2">{{ $row->nik }}</td>
                        <td class="border px-4 py-2">{{ $row->nama_guru }}</td>
                        <td class="border px-4 py-2">{{ $row->tempat_lahir }}</td>
                        <td class="border px-4 py-2">{{ $row->tanggal_lahir }}</td>
                        <td class="border px-4 py-2">{{ $row->agama }}</td>
                        <td class="border px-4 py-2">{{ $row->jenis_kelamin }}</td>
                        <td class="border px-4 py-2"><img src="storage\{{ $row->foto_guru }}" alt="..."></td>
                    </tr>
                    @empty
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="8">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody> -->
                <tbody>
                    @foreach($guru as $row)
                    <tr>
                        <td class="border px-4 py-2">{{ $row->nik }}</td>
                        <td class="border px-4 py-2">{{ $row->nama_guru }}</td>
                        <td class="border px-4 py-2">{{ $row->tempat_lahir }}</td>
                        <td class="border px-4 py-2">{{ $row->tanggal_lahir }}</td>
                        <td class="border px-4 py-2">{{ $row->agama }}</td>
                        <td class="border px-4 py-2">{{ $row->jenis_kelamin }}</td>
                        <td class="border px-4 py-2"><img src="storage\{{ $row->foto_guru }}" alt="..."></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="margin-top: 20px;">
                {{ $guru->links() }}
            </div>
        </div>
    </div>
</div>
