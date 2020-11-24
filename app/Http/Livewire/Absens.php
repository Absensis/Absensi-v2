<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Absen;
use App\Models\Guru;
use App\Models\KelasRuang;
use App\Models\Mapel;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use PDF;

class Absens extends Component
{
    use WithFileUploads;
    public $absen, $tanggal, $jam_pelajaran, $kelas, $guru_pengajar, $mata_pelajaran, $link_pembelajaran, $dokumentasi, $keterangan, $absen_id;
    public $isOpen = 0;


    // render view liveware
    public function render()
    {
        $this->absen = Absen::where('tanggal', Carbon::today())->get();

        // get all data
        $mapel = Mapel::get();
        $guru = Guru::get();
        $kelas = KelasRuang::get();

        return view('livewire.absens', ['mapel' => $mapel, 'guru' => $guru, 'ruangkelas' => $kelas]);
    }

    // reset input fields
    public function resetInputFields()
    {
        $this->tanggal = '';
        $this->jam_pelajaran = '';
        $this->kelas = '';
        $this->guru_pengajar = '';
        $this->mata_pelajaran = '';
        $this->link_pembelajaran = '';
        $this->dokumentasi = '';
        $this->keterangan = '';
    }

    // untuk membuka modal
    public function openModal()
    {
        $this->isOpen = true;
    }

    // untuk close modal
    public function closeModal()
    {
        $this->isOpen = false;
    }

    // untuk membuka modal saat dipencet tombol create
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    // function untuk store dan update data
    public function store()
    {
        $this->validate([
            'tanggal' => 'required',
            'jam_pelajaran' => 'required',
            'kelas' => 'required',
            'guru_pengajar' => 'required',
            'mata_pelajaran' => 'required',
            'link_pembelajaran' => 'required',
            'dokumentasi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
        ]);

        $image = 'absens\November2020\ ' . $this->dokumentasi->getClientOriginalName();

        $this->dokumentasi->storeAs('public\absens\November2020', $image);

        Absen::updateOrCreate(['id' => $this->absen_id], [
            'tanggal' => $this->tanggal,
            'jam_pelajaran' => $this->jam_pelajaran,
            'kelas' => $this->kelas,
            'guru_pengajar' => $this->guru_pengajar,
            'mata_pelajaran' => $this->mata_pelajaran,
            'link_pembelajaran' => $this->link_pembelajaran,
            'dokumentasi' => $image,
            'keterangan' => $this->keterangan,
        ]);

        session()->flash(
            'message',
            $this->absen_id ? 'Absen Updated Successfully.' : 'Absen Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    // function untuk get data for edit
    public function edit($id)
    {
        $Absen = Absen::findOrFail($id);
        $this->absen_id = $id;
        $this->tanggal = $Absen->tanggal;
        $this->jam_pelajaran = $Absen->jam_pelajaran;
        $this->kelas = $Absen->kelas;
        $this->guru_pengajar = $Absen->guru_pengajar;
        $this->mata_pelajaran = $Absen->mata_pelajaran;
        $this->link_pembelajaran = $Absen->link_pembelajaran;
        $this->keterangan = $Absen->keterangan;

        $this->openModal();
    }

    // function untuk delete data
    public function delete($id)
    {
        Absen::find($id)->delete();
        session()->flash('message', 'Absen Deleted Successfully.');
    }
}
