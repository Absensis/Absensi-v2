<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <i class="fas fa-book" style="margin-right: 10px;"></i>
        Data <b>Mata Pelajaran</b>
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
            <table class="table-fixed w-full text-center">
                <thead>
                    <tr class="text-white" style="background-color: #6875F5;">
                        <th class="px-4 py-2" style="width: 10%;">No</th>
                        <th class="px-4 py-2">Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @forelse($mapel as $row)
                    <tr>
                        <td class="border px-4 py-2">{{$i++ }}</td>
                        <td class="border px-4 py-2">{{ $row->mata_pelajaran }}</td>
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
