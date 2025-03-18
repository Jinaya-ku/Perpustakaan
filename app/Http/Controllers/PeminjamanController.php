<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PeminjamanController extends Controller
{

    public function create(Buku $buku)
    {
        // Cek apakah buku tersedia
        $isPinjam = Peminjaman::where('buku_id', $buku->id)
                             ->where('status', 'dipinjam')
                             ->exists();

        if ($isPinjam) {
            return redirect()->route('home')->with('error', 'Buku sedang dipinjam');
        }

        return view('borrow', compact('buku'));
    }

    public function store(Request $request, Buku $buku)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }

        // Cek lagi apakah buku masih tersedia
        $isPinjam = Peminjaman::where('buku_id', $buku->id)
                             ->where('status', 'dipinjam')
                             ->exists();

        if ($isPinjam) {
            return back()->with('error', 'Buku sudah dipinjam oleh orang lain');
        }

        // Cek jumlah buku yang sedang dipinjam oleh user
        $activeBorrows = Peminjaman::where('user_id', Auth::id())
                                  ->where('status', 'dipinjam')
                                  ->count();

        if ($activeBorrows >= 3) {
            return back()->with('error', 'Anda telah mencapai batas maksimal peminjaman buku');
        }

        try {
            $peminjaman = new Peminjaman();
            $peminjaman->user_id = Auth::id();
            $peminjaman->buku_id = $buku->id;
            $peminjaman->tanggal_peminjaman = Carbon::now();
            $peminjaman->tanggal_pengembalian = Carbon::now()->addDays(7);
            $peminjaman->status = 'dipinjam';
            $peminjaman->save();

            return redirect()->route('home')->with('success', 'Berhasil meminjam buku! Harap kembalikan sebelum ' .
                $peminjaman->tanggal_pengembalian->format('d M Y'));
        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat meminjam buku');
        }
    }
}
