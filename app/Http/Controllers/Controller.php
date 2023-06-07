<?php

namespace App\Http\Controllers;

use App\Models\BarangayOfficial;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome()
    {
        $brgyCaptains = BarangayOfficial::where('position', '1')->get();
        $officials = DB::table('barangay_officials')->orderBy('position', 'asc')->get();
        return view('welcome', [
            'officials' => $officials,
            'brgyCaptains' => $brgyCaptains,
        ]);
    }
}
