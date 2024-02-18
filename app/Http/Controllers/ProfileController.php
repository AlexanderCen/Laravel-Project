<?php

namespace App\Http\Controllers;

use App\Lokasi;
use App\Pasien;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user()->id;

        $info = Pasien::where('user_id', 'like', $user)->first();
        if($info === null){
            return view('blank');

        }else{
            //Cari info pasien vaksinasi
            $info = Pasien::where('user_id', 'like', $user)->first();

            //Ambil id lokasi lalu cari lokasi pasien
            $id = $info->id_lokasi;
            $location = Lokasi::where('id', 'like', $id)->first();

            //Ambil data user yaitu email
            $email = User::where('id', 'like', $user)->first();

            return view('profile', compact('info', 'location', 'email'));
        }

    }
}
