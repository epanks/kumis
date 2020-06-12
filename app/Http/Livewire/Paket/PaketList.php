<?php

namespace App\Http\Livewire\Paket;

use App\Paket;
use Livewire\Component;

class PaketList extends Component
{
    public $search;

    public function destroy($id)
    {
        if ($id) {
            $datapaket = Paket::find($id);
            $datapaket->delete();
            $this->emit('datapaket:update');
            session()->flash('success', 'Data berhasil dihapus');
        }

        //return redirect()->route('paket.list');
        ///return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';
        $dataSearch = Paket::where('nmpaket', 'like', $searchTerm)->where('wilayah_id', 3)->paginate(10);
        //dd($dataSearch);
        //$datapaket = Paket::paginate(10);
        return view('livewire.paket.paket-list', [
            'datapaket' => $this->search === null ? Paket::where('wilayah_id', 3)->paginate(10) : $dataSearch
        ]);
    }
}
