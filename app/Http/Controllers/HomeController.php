<?php

namespace App\Http\Controllers;

use App\Models\TestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        $user = Auth::user();
        $testResults = TestResult::where('user_id', $user->id)
            ->orderBy('submitted', 'desc')
            ->get();

        return view('home', ['testResults' => $testResults]);
    }

    /**
     * Saves test results.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeTestResult(Request $request)
    {
        $user = Auth::user();

        $answers = $request->all();
        $correctAnswers = 0;
        foreach ($answers as $question => $answer) {
            if ($answer == "B") {
                $correctAnswers++;
            }
        }

        $testResult = new TestResult();
        $testResult->user_id = $user->id;
        $testResult->correct_answers = $correctAnswers;
        $testResult->submitted = Carbon::now()->tz('Europe/Prague');
        $testResult->save();

        return redirect()->route('home');
    }
}
