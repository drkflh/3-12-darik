<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $fotos = Image::latest()->paginate(10);
        return view('foto.index', compact('fotos'));
    }
    public function create()
    {
        return view('foto.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);
        $image = $request->file('image');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/fotoup');
        $image->move($destinationPath, $name);
        Image::create([
            'image' => $name,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('Image.index')->with('success', 'Foto berhasil ditambahkan');
    }
    public function show($id)
    {
        $foto = Image::find($id);
        return view('foto.show', compact('foto'));
    }
    public function edit(Image $fotos)
    {
        return view('foto.edit', compact('fotos'));
    }

    public function update(Request $request, Image $fotos)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/fotoup');
            $image->move($destinationPath, $name);
            $fotos->image = $name;
        }
        $fotos->title = $request->title;
        $fotos->content = $request->content;
        $fotos->save();
        return redirect()->route('Image.index')->with('success', 'Foto berhasil diubah');
    }

    public function destroy($id)
    {
        $fotos = Image::findOrFail($id);
        Storage::disk('local')->delete('fotoup/' . $fotos->image);
        $fotos->delete();

        if ($fotos) {
            //redirect dengan pesan sukses
            return redirect()->route('Image.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('Image.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}