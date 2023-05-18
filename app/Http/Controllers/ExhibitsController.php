<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

use App\Models\Exhibit;

class ExhibitsController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $uniqueName = $request->input('unique_name');
            return redirect()->route('exhibits.unique', ['unique_name' => $uniqueName]);
        }
        $exhibits = Exhibit::all();

        return view('exhibits.index', compact('exhibits'));
    }

    public function showUnique($unique_name): View
    {
        $unique_name = strtolower($unique_name);
        $exhibit = DB::table('exhibits')->where('unique_name', $unique_name)->first();

        if(!$exhibit)
        {
            // Handle the case when the exhibit is not found
            abort(404);
        }

        //Prep image string paths from database
        $imagePaths = explode(';', rtrim($exhibit->picture_name, ';'));

        return view('exhibits.unique', compact('exhibit', 'imagePaths'));
    }
}
