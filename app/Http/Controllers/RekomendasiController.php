<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Peminjaman;

class RecommendationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $borrowedBooks = Peminjaman::where('user_id', $user->id)->pluck('buku_id');
        $recommendedBooks = Buku::whereNotIn('id', $borrowedBooks)->inRandomOrder()->take(5)->get();

        return view('recommendations', compact('recommendedBooks'));
    }
}
