<?php

namespace App\Http\Controllers\configDB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class updateTableNameUpperCaseToLowerCase extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $listaTabelas = DB::select("SHOW TABLES");
        return view('config.db.updateTableNameUpperCaseToLowerCase', compact('listaTabelas'));
    }
}
