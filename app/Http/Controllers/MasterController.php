<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Sensor;
use App\Ratadata;


class MasterController extends Controller
{
    public function login()
    {
        return view ('login');
    }


    public function riwayat_lahan()
    {
        $riwayat = Ratadata::all();
        return view ('riwayat_lahan', compact('riwayat'));
    }

    public function notifikasi()
    {
        $notif = Ratadata::all()->last();
        $rata = new Ratadata;
        $sensor=Sensor::avg('kelembapan',);
        $sensor1=Sensor::avg('ph');
        $hapus = Sensor::truncate();

        $rata->kelembapan= $sensor;
        $rata->ph= $sensor1;
        // dd($sensor);
       
        $kelembapan = $notif->kelembapan;
        $ph=$notif->ph;
        if ($ph<6) {
            $hasilph='asam';
        } 
        elseif ($ph>7) {
            $hasilph='basa';
        }
        else {
            $hasilph='normal';
        }

        if ($kelembapan<300) {
            $hasilkelembapan='kelembapan tinggi';
        }
        elseif ($kelembapan>600) {
            $hasilkelembapan='kelembapan rendah';
        }
        else {
            $hasilkelembapan='kelembapan normal';
        }

        $notif->kondisi_kelembapan = $hasilkelembapan;
        $notif->kondisi_ph = $hasilph;
        $notif->update();
        $rata->save();

        return view ('notifikasi', compact('notif'));
    }
    public function fcm()
    {
        return view ('fcm');
    }

    public function delete($id)
    {
        $delete = Sensor::find($id); //memanggil satu data pasien
        $delete-> delete();
        return redirect('riwayat_lahan')->with('sukses','Data berhasil dihapus'); 
        
    }
}
