<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function Home()
    {
        $berita = Berita::all();
        $sorted = $berita->sortByDesc('tanggal');
        $sorted->all();
        $sorted = Berita::paginate(5);
        return view('admin')->with('berita', $sorted);
    }
    public function gotoCreate()
    {
        return view('createnews');
    }
    public function store(Request $request)
    {
        $berita = $this->validate($request, [
            'judul' => ['required'],
            'tanggal' => ['required'],
            'sumber' => ['required', 'string'],
            'shortdesc' => ['required'],
            'isi' => ['required'],
            'gambar' => ['required', 'mimes:jpg,png,jpeg']
        ]);

        $img_path = $request->file('gambar')->store('gambar', 'public');

        $berita['gambar'] = $img_path;

        Berita::create($berita);

        return redirect('/berita');
    }
    public function gotoNewsPage($id)
    {
        $berita = Berita::where('id', 'like', $id)->get();

        return view('pageberita')->with('berita', $berita);
    }
    public function delete(Berita $id)
    {
        $id->delete();

        return redirect('/berita');
    }
    public function gotoUpdateNews($id)
    {
        $berita = Berita::where('id', 'like', $id)->get();

        return view('updatenews')->with('berita', $berita);
    }
    public function Update(Request $request, $id)
    {
        $beritabaru = $this->validate($request, [
            'judul' => ['required'],
            'tanggal' => ['required'],
            'sumber' => ['required', 'string'],
            'shortdesc' => ['required'],
            'isi' => ['required'],
            'gambar' => ['required', 'mimes:jpg,png,jpeg']
        ]);

        $berita = Berita::where('id', 'like', $id)->first();

        Storage::disk('public')->delete($berita->gambar);

        $img_path = $request->file('gambar')->store('gambar', 'public');

        $beritabaru['gambar'] = $img_path;

        Berita::where('id', 'like', $id)->update($beritabaru);

        return redirect('/berita');
    }
}
