<?php

namespace App\Http\Controllers;

use App\Lokasi;
use App\pasien;
use App\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DaftarVaksinasiController extends Controller
{

    public function pilihKotaPage(Request $request)
    {
        $search = $request->get("search");

        if ($search != NULL) {

            //Menampilkan kota sesuai filter
            $kota = Kota::where('kota', 'LIKE', '%' . $search . '%')->get();
            return view('pilihKota', compact('kota'));
        } else {

            //Menampilkan semua kota
            $kota = Kota::all();
            return view('pilihKota', compact('kota'));
        }
    }

    public function searchKota(Request $request){

        if ($request->ajax()) {

            $search = $request->get("search");

            $kota = Kota::where('kota', 'LIKE', '%' . $search . '%')->get();

            return (json_encode($kota));
        }
    }

    public function pilihLokasiPage($id, Request $request)
    {

        $lokasi = Lokasi::where('id_kota', 'like', $id)->get();

        if (count($lokasi)<1) {
            return view('blank');
        } else {
            $search = $request->get("search");

            if ($search != NULL) {

                $lokasi = Lokasi::where('alamat', 'LIKE', '%' . $search . '%')->where('id_kota', 'LIKE', $id)->get();
                return view('/pilihLokasi', compact('lokasi'));
            } else {
                return view('/pilihLokasi', compact('lokasi'));
            }
        }
    }

    public function searchLokasi(Request $request){

        if ($request->ajax()) {
            $id = $request->id_kota;
            $search = $request->get("search");

            $lokasi = Lokasi::where('alamat', 'LIKE', '%' . $search . '%')->where('id_kota', 'LIKE', $id)->get();

            return (json_encode($lokasi));
        }
    }

    public function createLocationPage()
    {
        $kota = Kota::all();

        return view('createlocation', compact('kota'));
    }

    public function createLocation(Request $request)
    {

        $lokasi = $this->validate($request, [
            'id_kota' => ['required'],
            'nama' => ['required'],
            'alamat' => ['required'],
            'tanggal' => ['required'],
            'jam' => ['required'],
            'no_telp' => ['sometimes'],
            'gambar' => ['required', 'mimes:png,jpg,jpeg']
        ]);

        $img_path = $request->file('gambar')->store('gambar', 'public');

        $lokasi['gambar'] = $img_path;

        Lokasi::create($lokasi);

        return redirect('kota');
    }

    public function deleteLocation(Lokasi $id)
    {
        $id->delete();

        // Storage::disk('public')->delete($x->gambar);

        return redirect('kota');
    }

    public function updateLocationPage($id)
    {

        $lokasi = Lokasi::where('id', 'like', $id)->get();

        return view('updatelocation', compact('lokasi'));
    }

    public function toVaccine($id)
    {
        $place = Lokasi::find($id);

        return view('daftar', compact('place', 'id'));
    }

    public function vaksinasi(Request $request)
    {

        //Current date
        $date = today()->format('Y-m-d');

        $new_patient = $this->validate($request, [
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'NIK' => ['required', 'digits:16', 'unique:calons', 'numeric'],
            'bukti' => ['required', 'image', 'mimes:png,jpg,j'],
        ]);

        //Penamaan kedua sesuai format file
        $proofImage = $request['bukti']->getClientOriginalExtension();

        //Nama gambar sesuai nama orang
        $id = $request['name'] . '_' . $proofImage;

        $imagePath = $request->file('bukti')->storeAs('folder_nik', $id);

        $result = pasien::create([
            'id_lokasi' => $request['id'],
            'user_id' => Auth::user()->id,
            'name' => $request['name'],
            'tanggal_vaksin' => $request['tanggal'],
            'NIK' => $request['NIK'],
            'jam_vaksin' => $request['jam'],
            'bukti' => $imagePath,
        ]);

        //Beginning nama function route ke home
        return redirect()->route('beginning')->with('success', 'Registrasi berhasil');
    }

    public function updateLocation(Request $request, $id)
    {
        $lokasibaru = $this->validate($request, [
            'nama' => ['required'],
            'alamat' => ['required'],
            'no_telp' => ['sometimes'],
            'tanggal' => ['required'],
            'jam' => ['required'],
            'gambar' => ['mimes:png,jpg,jpeg']
        ]);

        $lokasi = Lokasi::where('id', 'like', $id)->first();

        // Storage::disk('public')->delete($lokasi->gambar);

        $img_path = $request->file('gambar')->store('gambar', 'public');

        $lokasibaru['gambar'] = $img_path;

        Lokasi::where('id', 'like', $id)->update($lokasibaru);

        return redirect('/kota');
    }
}
