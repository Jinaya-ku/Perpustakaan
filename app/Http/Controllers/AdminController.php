<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard(){
        $buku = Buku::with(['kategori'])->get();
        $user = User::all();
        $peminjaman= Peminjaman::with(['user', 'buku'])->get();
        $jumlahBuku = Buku::all()->count();
        $jumlahUser = User::all()->count();
        $jumlahDipinjam = Peminjaman::all()->count();

        return view('admin.dashboard', [
            'buku' => $buku,
            'user' => $user,
            'jumlahBuku' => $jumlahBuku,
            'jumlahUser' => $jumlahUser,
            'jumlahDipinjam' => $jumlahDipinjam,
            'peminjaman' => $peminjaman,

        ]);
    }

    public function profilAdmin(){
        return view('admin.profilAdmin');
    }

    public function deleteBuku($id){
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->back();
    }

    public function formEditBuku($id){
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.formEditBuku', [
            'buku' => $buku,
            'kategori' => $kategori,
        ]);
    }

    public function editBukuAction(Request $request, $id){
        $buku = Buku::findOrFail($id);

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('admin.dashboard');
    }


    public function formTambahBuku(){
        $kategori = Kategori::all();

        return view('admin.formTambahBuku', [
            'kategori' => $kategori
        ]);
    }

    public function tambahBukuAction(Request $request){
        // dd($request->all());
        Buku::insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tanggal_terbit' => $request->tanggal_terbit,
            'gambar_buku' => $request->gambar_buku,
            'stok' => $request->stok,
            'kategori_id' => $request->kategori,
        ]);

        return redirect()->route('admin.dashboard');
    }

    //batas buku dan user

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back();
    }

    public function formEditUser($id){
        $user = User::findOrFail($id);
        return view('admin.formEditUser', [
            'user' => $user
        ]);
    }

    public function EditUserAction(Request $request, $id){
        $user = User::findOrFail($id);

        $user->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function formTambahUser(){
        $user = User::all();

        return view('admin.formTambahUser', [
            'user' => $user
        ]);
    }

    public function tambahUserAction(Request $request){
        // dd($request->all());
        User::insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('admin.dashboard');
    }

    //batas User dan peminjaman

    public function deletePeminjaman($id){
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->back();
    }

    public function formEditPeminjaman($id){
        $peminjaman = Peminjaman::with(['user', 'buku'])->where('id', $id)->first();
        $buku = Buku::all();
        return view('admin.formEditPeminjaman', [
            'peminjaman' => $peminjaman,
            'buku' => $buku,
        ]);
    }

    public function EditPeminjamanAction(Request $request, $id){
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->update([
            'buku_id' => $request->buku,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function formTambahPeminjaman(){
        $peminjaman = Peminjaman::all();
        $user = User::where('role', "peminjam")->get();
        $buku = Buku::all();

        return view('admin.formTambahPeminjaman', [
            'peminjaman' => $peminjaman,
            'user' => $user,
            'buku' => $buku,
        ]);
    }

    public function tambahPeminjamanAction(Request $request){
        Peminjaman::insert([
            'user_id' => $request->user,
            'buku_id' => $request->buku,
            'tanggal_peminjaman' => $request->tanggal_peminjaman,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.dashboard');
    }
}
