<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BarangayOfficial;

class ShowBrgyOfficial extends Component
{
    public $lname, $fname, $mname, $sname;

    public function render()
    {
        $officials = BarangayOfficial::all();

        return view('livewire.show-brgy-official', ['officials' => $officials]);
    }

    public function viewOfficial($id)
    {
        dd(BarangayOfficial::find($id));
        // return BarangayOfficial::find($id);
        $official = BarangayOfficial::find($id);
        $this->lname = $official->lname;
        $this->fname = $official->fname;
        $this->mname = $official->mname;
        $this->sname = $official->sname;
    }
}
