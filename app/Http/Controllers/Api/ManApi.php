<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManModel;

class ManApi extends Controller
{

    public function Main_Api_Function()
    {

        $reslut =ManModel::all();
        try {
            return response()->json([
                'status' => true,
                'message' => 'Successfully add data',
                'data' => $reslut
            ]);
        } catch (\Throwable $rg) {
            return response()->json([
                'status' => false,
                'message' => $rg->getMessage(),
                'data' => [],
            ]);
        }
    }
}
