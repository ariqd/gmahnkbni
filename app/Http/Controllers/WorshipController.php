<?php

namespace App\Http\Controllers;

use App\Models\Worship;
use App\Services\DateService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorshipController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('worship.index', [
            'worships' => Worship::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Worship $worship)
    {
        return view('worship.show', [
            'worship' => $worship
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Worship $worship)
    {
        $dateService = new DateService();
        $now = Carbon::now();

        return view('worship.form', [
            'worship' => $worship,
            'saturdays' => $dateService->generateTable($request, $worship->day),
            'quarter' => @$request->quarter ?? $now->quarter,
            'year' => @$request->year ?? $now->year
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
