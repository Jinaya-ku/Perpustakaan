<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $bukus = Buku::latest()->paginate(10);
        return view('buku.index', compact('bukus'));
    }

    // Menampilkan form tambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan buku baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|numeric|min:0'
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    // Menampilkan detail buku
    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    // Menampilkan form edit buku
    public function edit(Buku $buku)
    {
        return view('buku.edit', compact('buku'));
    }

    // Mengupdate data buku
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric',
            'stok' => 'required|numeric|min:0'
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diperbarui');
    }

    // Menghapus buku
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil dihapus');
    }

    // Fungsi pencarian buku (yang sudah ada sebelumnya)
    public function search(Request $request)
    {
        $query = Buku::query();

        if ($request->filled('judul')) {
            $query->where('judul', 'like', '%' . $request->judul . '%');
        }

        if ($request->filled('penulis')) {
            $query->where('penulis', 'like', '%' . $request->penulis . '%');
        }

        $bukus = $query->get();

        return view('buku.search', compact('bukus'));
    }
}
