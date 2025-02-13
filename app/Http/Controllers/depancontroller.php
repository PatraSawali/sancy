<?php
// DepanController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halaman;
use App\Models\riwayat;

class DepanController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = Halaman::find($about_id);

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = Halaman::find($interest_id);

        $award_id = get_meta_value('_halaman_award');
        $award_data = Halaman::find($award_id);

        $experience_data = riwayat::where('tipe', 'experience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();

        return view('depan.index', compact('about_data', 'interest_data', 'award_data', 'experience_data', 'education_data'));
    }
}