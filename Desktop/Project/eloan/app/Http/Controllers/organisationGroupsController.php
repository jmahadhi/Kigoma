<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\organisationGroup;
class organisationGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return organisationGroup::latest()->paginate(10);
        return organisationGroup::all();
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
        $this->validate($request,[
            'orgGroupCode' => 'required|string|unique:organisation_groups|max:10',
            'orgGroupName' => 'required|string|unique:organisation_groups|max:191'
        ]);

        return organisationGroup::create([
            'orgGroupCode' => $request['orgGroupCode'],
            'orgGroupName' => $request['orgGroupName']
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orgGroup = organisationGroup::findOrFail($id);
        $this->validate($request,[
            'orgGroupCode' => 'required|string|max:10|unique:organisation_groups,orgGroupCode,'.$orgGroup->id,
            'orgGroupName' => 'required|string|max:191|unique:organisation_groups,orgGroupName,'.$orgGroup->id,
        ]);
        $orgGroup->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orgGroup = organisationGroup::findOrFail($id);

        //Delete User
        $orgGroup->delete();

        return ['message' => 'Org Group Deleted'];

    }
}
