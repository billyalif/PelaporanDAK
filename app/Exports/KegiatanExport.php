<?php
namespace App\Exports;

use App\Models\Kegiatan;
use App\Models\Satker;
use App\Models\Bidang;
use App\Models\Subbidang;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class KegiatanExport implements FromView, ShouldAutoSize
{
    public function __construct($id)
    {
        $this->id = $id;
    }

    public function view(): View
    {
        $subbid = Subbidang::where('id',$this->id)->pluck('id_bidang');
        $bidang = Bidang::where('id',$subbid[0])->pluck('id_satker');
        
        return view('kegiatan-export-excel', [
            'no'        => 1,
            'satker'    => Satker::where('id',$bidang[0])->pluck('nama_satker'),
            'kegiatan'  => Kegiatan::where('id_subbidang', $this->id)->get(),
        ]);
    }
}
?>