<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-address-book" style="margin-right: 10px;"></i>
        Data <b>Absen</b>
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif

            <p style="position: absolute;"><b>Today Absen Date</b> : {{date('Y-m-d')}}</p>

            <!-- dropdown -->
            <x-jet-dropdown align="right" width="48" style="margin-bottom: -20px;">
                <x-slot name="trigger">
                    <div class="ml-1" align="right" style="margin-right: 10px; margin-bottom: 10px;">
                        <i class="fas fa-ellipsis-v"></i>
                    </div>
                    </button>
                </x-slot>

                @if(auth()->user()->role_id == 2)
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
                @else
                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Select Action
                    </div>

                    <x-jet-dropdown-link wire:click="create()">
                        <i class="fas fa-plus" style="margin-right: 5px; color: green;"></i>
                        Create New Absen
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        <i class="fas fa-file-pdf" style="margin-right: 5px; color: blue;"></i>
                        Print PDF
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        <i class="fas fa-file-excel" style="margin-right: 5px; color: green;"></i>
                        Print Excel
                    </x-jet-dropdown-link>

                </x-slot>
                @endif
            </x-jet-dropdown>

            @if($isOpen)
            @include('livewire.createabsen')
            @endif

            <!-- table -->
            <table class="table-responsive w-full text-center">
                <thead>
                    <tr class="text-white" style="background-color: #6875F5;">
                        @if(auth()->user()->role_id == 2)
                        <th class="px-4 py-2" style="width: 9%;">Tanggal</th>
                        <th class="px-4 py-2" style="width: 7%;">Jam Pelajaran</th>
                        <th class="px-4 py-2" style="width: 7%;">Kelas</th>
                        <th class="px-4 py-2" style="width: 13%;">Guru Pengajar</th>
                        <th class="px-4 py-2" style="width: 15%;">Mata Pelajaran</th>
                        <th class="px-4 py-2" style="width: 10%;">Link Pembelajaran</th>
                        <th class="px-4 py-2" style="width: 14%;">Dokumentasi</th>
                        <th class="px-4 py-2">Kategori</th>
                        @else
                        <th class="px-4 py-2" style="width: 9%;">Tanggal</th>
                        <th class="px-4 py-2" style="width: 7%;">Jam Pelajaran</th>
                        <th class="px-4 py-2" style="width: 7%;">Kelas</th>
                        <th class="px-4 py-2" style="width: 13%;">Guru Pengajar</th>
                        <th class="px-4 py-2" style="width: 15%;">Mata Pelajaran</th>
                        <th class="px-4 py-2" style="width: 10%;">Link Pembelajaran</th>
                        <th class="px-4 py-2" style="width: 14%;">Dokumentasi</th>
                        <th class="px-4 py-2" style="width: 12%;">Kategori</th>
                        <th class="px-4 py-2">Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($absen as $row)
                    <tr>
                        @if(auth()->user()->role_id == 2)
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
                        <td class="border px-4 py-2"><img src="{{ asset('storage/absens/November2020/') . '/' .$row->dokumentasi}}" alt="..."></td>
                        <td class="border px-4 py-2">{{ $row->keterangan }}</td>
                        @else
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
                        <td class="border px-4 py-2"><img src="{{ asset('storage/absens/November2020/') . '/' .$row->dokumentasi}}" alt=" ..."></td>
                        <td class="border px-4 py-2">{{ $row->keterangan }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $row->id }})" style="width: 100px;" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-2">
                                <i class="fas fa-edit" style="color: white;"></i>
                                Edit
                            </button>
                            <button wire:click="delete({{ $row->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                <i class="fas fa-trash" style="color: white;"></i>
                                Delete
                            </button>
                        </td>
                        @endif
                    </tr>
                    @empty
                    @if(auth()->user()->role_id == 2)
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="8">Tidak ada data</td>
                    </tr>
                    @else
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="9">Tidak ada data</td>
                    </tr>
                    @endif
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
