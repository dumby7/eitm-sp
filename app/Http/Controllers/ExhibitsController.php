<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ExhibitsController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $uniqueName = $request->input('unique_name');
            return redirect()->route('exhibits.unique', ['unique_name' => $uniqueName]);
        }

        return view('exhibits.index');
    }

    public function showUnique($unique_name): View
    {
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
