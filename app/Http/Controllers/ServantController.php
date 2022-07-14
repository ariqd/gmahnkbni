<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Servant;
use App\Models\Skill;
use Illuminate\Http\Request;

class ServantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servant.index', [
            'servants' => Servant::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servant.form', [
            'skills' => Skill::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'skill_id' => 'required',
        ]);

        Servant::create($request->all());

        return redirect()->route('servants.index')->with('success', 'Data partisipan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servant $servant)
    {
        return view('servant.form', [
            'skills' => Skill::all(),
            'servant' => $servant,
            'criterias' => Criteria::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servant $servant)
    {
        $request->validate([
            'name' => 'required',
            'skill_id' => 'required',
        ]);

        $servant->update($request->all());

        return redirect()->route('servants.index')->with('success', 'Data partisipan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
