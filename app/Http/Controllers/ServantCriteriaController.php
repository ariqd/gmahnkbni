<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Servant;
use App\Models\ServantCriteria;
use Illuminate\Http\Request;

class ServantCriteriaController extends Controller
{
    public function index($id)
    {
        $criteriasExist = Servant::find($id)->criterias->pluck('id')->toArray();
        $criterias = Criteria::whereNotIn('id', $criteriasExist)->get();

        return view('servant.criteria.index', [
            'servant' => Servant::find($id),
            'criterias' => $criterias
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'criteria_id' => 'required',
        ]);

        ServantCriteria::create([
            'criteria_id' => $request->criteria_id,
            'servant_id' => $id
        ]);

        return redirect()->back()->with('success', 'Data kriteria partisipan berhasil ditambah.');
    }

    public function destroy(Request $request, $id)
    {
        $servant = Servant::find($id);
        $servant->criterias()->detach($request->criteria_id);

        return redirect()->back()->with('success', 'Data kriteria partisipan berhasil dihapus.');
    }
}
