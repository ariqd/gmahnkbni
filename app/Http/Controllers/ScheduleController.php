<?php

namespace App\Http\Controllers;

use App\Models\Servant;
use App\Models\Worship;
use App\Services\DateService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule.index', [
            'worships' => Worship::all()
        ]);
    }

    public function show(Request $request, $id)
    {
        $worship = Worship::find($id);
        $dateService = new DateService();
        $now = Carbon::now();

        return view('schedule.show', [
            'worship' => $worship,
            'months' => $dateService->generateTable($request, $worship->day),
            'quarter' => @$request->quarter ?? $now->quarter,
            'year' => @$request->year ?? $now->year,
            'servants' => Servant::all()
        ]);
    }
}
