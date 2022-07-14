<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\Criteria;
use App\Models\Requirement;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function edit($id)
    {
        $criteriasExist = Requirement::find($id)->criterias->pluck('id')->toArray();
        $criterias = Criteria::whereNotIn('id', $criteriasExist)->get();

        return view('condition.index', [
            'requirement' => Requirement::find($id),
            'criterias' => $criterias
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'criteria_id' => 'required',
        ]);

        Condition::create([
            'criteria_id' => $request->criteria_id,
            'requirement_id' => $id
        ]);

        return redirect()->back()->with('success', 'Data kriteria berhasil ditambah.');
    }

    public function destroy(Request $request, $id)
    {
        $requirement = Requirement::find($id);
        $requirement->criterias()->detach($request->criteria_id);

        return redirect()->back()->with('success', 'Data kriteria berhasil dihapus.');
    }
}
