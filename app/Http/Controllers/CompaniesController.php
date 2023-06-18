<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companys = Company::latest()->paginate(10);

        return view('companys.index',compact('companys'))
            ->with(request()->input('page'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("companys.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompaniesRequest $request)
    {
        $file=$request->file('logo');
        $name =Str::random(10);
        $url=Storage::putFileAs('image',$file,$name.'.'.$file->extension());

        Company::create([

            'name' => $request->name,
            'email' => $request->email,
            'logo' => $url,
            'website' => $request->website,


        ]);

         return redirect()->route('companies.index')->with('success', 'Company created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('companys.show', compact('company'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('companys.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompaniesRequest $request, $id)
    {
        $company = Company::findOrFail($id);

        $file = $request->file('logo');

        if ($file) {
            $name = Str::random(10);
            $url = Storage::putFileAs('image', $file, $name.'.'.$file->extension());
            $company->logo = $url;
        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;

        $company->save();

        return redirect()->route('companies.index')->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'company deleted successfully');
    }
}
