<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employes = Employe::all();
        return view('/employes/index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/employes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'registration_number' => 'required|numeric|unique:employes,registration_number',
            'fullname' => 'required|unique:employes,fullname',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'adress' => 'required',
            'city' => 'required'
        ]);

        Employe::create($request->except(['_token']));
        return redirect('/employes/index')->with([
            'success' => 'Employe added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view('employes.show')->with([
            "employe" => $employe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view('employes.edit')->with([
            "employe" => $employe
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        $this->validate($request, [
            'registration_number' => 'required|numeric|unique:employes,id,'. $employe->registration_number,
            'fullname' => 'required',
            'depart' => 'required',
            'hire_date' => 'required',
            'phone' => 'required|numeric',
            'adress' => 'required',
            'city' => 'required',
        ]);
        $employe->update($request->except(['_token', '_method']));
        return redirect('/employes/index')->with([
            'success' => 'Employe updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employe = Employe::where('registration_number', $id);
        $employe->delete();
        return redirect('/employes/index')->with([
            'success' => 'Employe deleted successfully'
        ]);
    }

    public function vacationRequest($id){
        $employe = Employe::where('registration_number', $id)->first();
        return view('employes.vacation-request')->with([
            'employe' => $employe
        ]);
    }

    public function certificateRequest($id){
        $employe = Employe::where('registration_number', $id)->first();
        return view('employes.certificate-request')->with([
            'employe' => $employe
        ]);
    }
}
