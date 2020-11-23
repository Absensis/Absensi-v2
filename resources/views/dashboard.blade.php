<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="fas fa-tachometer-alt" style="margin-right: 10px;"></i>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 mt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                <div class="flex">
                    <div class="bg-white rounded shadow" style="width: 100%; padding: 20px;">
                        <div class="rounded-full shadow" style="width: 60px; height: 60px; margin-left: 40%; background-color: #6875F5;">
                            <i class="fas fa-address-book fa-2x" style="margin-top: 15px; margin-left: 17px; color: white;"></i>
                        </div>
                        <h1 style="font-size: 20px; margin-left: 32%; margin-top: 7%;">Data<b style="color: #6875F5;"> Absen</b></h1>
                        <a href="{{ route('absen')}}">
                            <h2 style="font-size: 60px; margin-left:43%; margin-top: 5%;"><b>{{ $absencount }}</b></h2>
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <div class="bg-white rounded shadow" style="width: 100%; padding: 20px;">
                        <div class="bg-white rounded-full shadow" style="width: 60px; height: 60px; margin-left: 40%; background-color: green;">
                            <i class="fas fa-user-tie fa-2x" style="margin-top: 15px; margin-left: 17px; color: white;"></i>
                        </div>
                        <h1 style="font-size: 20px; margin-left: 35%; margin-top: 7%;">Data<b style="color: green;"> Guru</b></h1>
                        <a href="{{ route('guru')}}">
                            <h2 style="font-size: 60px; margin-left:40%; margin-top: 5%;"><b>{{ $gurucount}}</b></h2>
                        </a>
                    </div>
                </div>
                <div class="flex">
                    <div class="bg-white rounded shadow" style="width: 100%; padding: 20px;">
                        <div class="bg-white rounded-full shadow" style="width: 60px; height: 60px; margin-left: 40%; background-color: magenta;">
                            <i class="fas fa-book fa-2x" style="margin-top: 15px; margin-left: 17px; color: white;"></i>
                        </div>
                        <h1 style="font-size: 20px; margin-left: 35%; margin-top: 7%;">Data<b style="color: magenta;"> Mapel</b></h1>
                        <a href="{{ route('mapel')}}">
                            <h2 style="font-size: 60px; margin-left:40%; margin-top: 5%;"><b>{{ $mapelcount }}</b></h2>
                        </a>
                    </div>
                </div>
        </div>
        </dl>
    </div>
</x-app-layout>
