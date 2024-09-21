<?php

namespace App\Http\Controllers;

use App\Models\DataPagination;
use Illuminate\Http\Request;

class DataPaginationController extends Controller
{
    public function index(){
        $datas = DataPagination::paginate(10);

        return view('data-table', compact('datas'));
    }
}
