<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Franchise;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'BranchPage';
        $franchise = Franchise::all();
        $branch = Branch::all();
        return view('content.Branch.branch', compact('title','franchise','branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'BranchPage';
        $branch = Branch::all();
        return view('content.Branch.branchCreate', compact('title','branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'branch_location' => 'required',
            'branch_phone' => 'required',
            'branch_rating' => 'required',
        ]);

        Branch::create([
            'branch_location' => $request->branch_location,
            'branch_phone' => $request->branch_phone,
            'branch_rating' => $request->branch_rating,
            'franchise_id' => $request->franchise_id
        ]);
        return redirect(route('branch.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show($branch_id)
    {
        $title = 'BranchPage';
        $branch = Branch::where('branch_id', $branch_id)->first();
        return view('content.Branch.branchShow', compact('title','branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($branch_id)
    {
        $title = 'BranchPage';
        $franchise = Franchise::all();
        $branch = Branch::findOrFail($branch_id);
        return view('content.Branch.branchEdit', compact('title','franchise','branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $branch_id)
    {
        $branch = Branch::findOrFail($branch_id);
        $branch->update([
            'branch_location' => $request->branch_location,
            'branch_phone' => $request->branch_phone,
            'branch_rating' => $request->branch_rating,
            'franchise_id' => $request->franchise_id
        ]);
        return redirect(route('branch.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($branch_id)
    {
        $branch = Branch::findOrFail($branch_id);
        $branch->delete();
        return redirect(route('branch.index'));
    }
}
