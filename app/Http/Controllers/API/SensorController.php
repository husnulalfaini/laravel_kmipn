<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sensor;
use App\Ratadata;

class SensorController extends Controller
{
    //mengirimkan data sensor ke perangkat android
    public function kirimdata()
    {
        $sensor = Ratadata::all();
        return response()->json($sensor);
    }
    
    //menerima data sensor dari perangkat hardware
    public function terimadata(Request $request)
    {
        $sensor = Sensor::create([
                
            'ph' => $request->input('ph'),
            'kelembapan' => $request->input('kelembapan'),
            
        ]);

        if ($sensor) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Disimpan!',
                'sensor' => $sensor
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Disimpan!',
            ], 401);
        }
    }
}
