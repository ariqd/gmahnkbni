<?php

namespace App\Http\Controllers;

use App\Models\ServantWorship;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ServantWorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function show(ServantWorship $servantWorship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function edit(ServantWorship $servantWorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worship  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->get('value');

        $filteredArray = Arr::where($input, function ($value, $key) {
            return !empty($value['servant_id']);
        });

        foreach($filteredArray as $input) {
            $date = Carbon::parse($input['month'] . ' ' . $input['day'] . ', ' . date('Y'));
            ServantWorship::updateOrCreate(
                ['worship_id' => $id, 'skill_id' => $input['skill_id'], 'assign_date' => $date],
                ['servant_id' => $input['servant_id']]
            );
        }

        return redirect()->back()->with('success', 'Data jadwal berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServantWorship  $servantWorship
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServantWorship $servantWorship)
    {
        //
    }
}
