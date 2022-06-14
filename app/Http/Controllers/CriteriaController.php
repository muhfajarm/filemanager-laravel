<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriteriaRequest;
use App\Models\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $criterias = Criteria::getCriteria();
        return view('collage.accreditation.criteria.index', compact('criterias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CriteriaRequest $request)
    {
        $request->store();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Criteria $criteria)
    {
        return view('collage.accreditation.criteria.edit', ['criteria' => $criteria::first()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CriteriaRequest $request, $id)
    {
        Criteria::find($id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('collage.criteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Criteria::find($id)->delete();
        return back();
    }
}
