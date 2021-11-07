<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FranchiseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'FranchisePage';
        $franchise = Franchise::all();

        return view('content.Franchise.franchise', compact('title', 'franchise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'FranchisePage';
        return view('content.Franchise.franchiseCreate', compact('title'));
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
            'franchise_name' => 'required|min:4|max:50',
            'franchise_founded' => 'required',
            'franchise_type' => 'required',
            'franchise_outlet' => 'required',
            'franchise_investment' => 'required',
            'franchise_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'franchise_website' => 'required',
            'franchise_description' => 'required|min:100'
        ]);

        $validateData['franchise_name'] = $request->franchise_name;
        $validateData['franchise_founded'] = $request->franchise_founded;
        $validateData['franchise_type'] = $request->franchise_type;
        $validateData['franchise_outlet'] = $request->franchise_outlet;
        $validateData['franchise_investment'] = $request->franchise_investment;
        $validateData['franchise_website'] = $request->franchise_website;
        $validateData['franchise_description'] = $request->franchise_description;

        if ($request->hasFile('franchise_logo')) {
            $validateData['franchise_logo'] = $request->file('franchise_logo')->store('post-images/franchise_logo');
        }

        Franchise::create($validateData);

        return redirect(route('franchise.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function show($franchise_id)
    {
        $title = 'FranchisePage';
        $franchise = Franchise::where('franchise_id', $franchise_id)->first();
        return view('content.Franchise.franchiseShow', compact('title', 'franchise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function edit($franchise_id)
    {
        $title = 'FranchisePage';
        $franchise = Franchise::findOrFail($franchise_id);
        return view('content.Franchise.franchiseEdit', compact('title', 'franchise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $franchise_id)
    {
        $franchise = Franchise::findOrFail($franchise_id);

        $this->validate($request, [
            'franchise_name' => 'required|min:4|max:50',
            'franchise_founded' => 'required',
            'franchise_type' => 'required',
            'franchise_outlet' => 'required',
            'franchise_investment' => 'required',
            'franchise_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'franchise_website' => 'required',
            'franchise_description' => 'required|min:100'
        ]);

        $validateData['franchise_name'] = $request->franchise_name;
        $validateData['franchise_founded'] = $request->franchise_founded;
        $validateData['franchise_type'] = $request->franchise_type;
        $validateData['franchise_outlet'] = $request->franchise_outlet;
        $validateData['franchise_investment'] = $request->franchise_investment;
        $validateData['franchise_website'] = $request->franchise_website;
        $validateData['franchise_description'] = $request->franchise_description;

        if ($request->hasFile('franchise_logo')) {
            if($request->old_franchise_logo){
                Storage::delete($request->old_franchise_logo);
            }
            $validateData['franchise_logo'] = $request->file('franchise_logo')->store('post-images/franchise_logo');
        }

        Franchise::where('franchise_id', $franchise_id)->update($validateData);

        return redirect(route('franchise.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy($franchise_id)
    {
        $franchise = Franchise::findOrFail($franchise_id);

        if($franchise->franchise_logo){
            Storage::delete($franchise->franchise_logo);
        }

        $franchise->delete();

        return redirect(route('franchise.index'));
    }
}
