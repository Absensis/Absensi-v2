<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>?
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form enctype="multipart/form-data">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">
                        <!-- tanggal -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Tanggal :</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" wire:model="tanggal">
                            @error('tanggal') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- jam pelajaran -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Jam Masuk Pelajaran:</label>
                            <input type="time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="jam_pelajaran" placeholder="Enter Time"></input>
                            @error('jam_pelajaran') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- kelas -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Kelas:</label>
                            <select id="exampleFormControlInput3" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="kelas">
                                <option value="">Choose..</option>
                                @foreach($ruangkelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas}}</option>
                                @endforeach
                            </select>
                            @error('kelas') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- guru pengajar -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Guru Pengajar:</label>
                            <select id="exampleFormControlInput4" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="guru_pengajar">
                                <option value="">Choose..</option>
                                @foreach($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                                @endforeach
                            </select>
                            @error('guru_pengajar') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- mata pelajaran -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">Mata Pelajaran:</label>
                            <select id="exampleFormControlInput5" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="mata_pelajaran">
                                <option value="">Choose..</option>
                                @foreach($mapel as $m)
                                <option value="{{ $m->id }}">{{ $m->mata_pelajaran }}</option>
                                @endforeach
                            </select>
                            @error('mata_pelajaran') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- link pembelajaran -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput6" class="block text-gray-700 text-sm font-bold mb-2">Link Pembelajaran:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput6" wire:model="link_pembelajaran" placeholder="Enter The Link"></input>
                            @error('link_pembelajaran') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- dokumentasi -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput7" class="block text-gray-700 text-sm font-bold mb-2">Dokumentasi: </label>
                            <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <p class="text-sm text-gray-600">
                                        <input type="file" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:model="dokumentasi">
                                        Upload a file
                                        </input>
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 10MB
                                    </p>
                                </div>
                            </div>
                            @error('dokumentasi') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <!-- keteragan -->
                        <div class="mb-4">
                            <label for="exampleFormControlInput8" class="block text-gray-700 text-sm font-bold mb-2">Keterangan:</label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput8" wire:model="keterangan" placeholder="Enter The Information"></textarea>
                            @error('keterangan') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
