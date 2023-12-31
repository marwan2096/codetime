<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10); // Paginate the employee records

        return view('employs.index', compact('employees'))

            ->with(request()->input('page'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('employs.create', ['companies' => $companies]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Employee::create([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'last_name' => $request->last_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,


        ]);

         return redirect()->route('employees.index')->with('success', 'Employee created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employs.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $companies = Company::all();

        return view('employs.edit', compact('employee', 'companies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        
        $employee->update([

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'last_name' => $request->last_name,
            'last_name' => $request->last_name,
            'company_id' => $request->company_id,
            'email' => $request->email,
            'phone' => $request->phone,


        ]);

         return redirect()->route('employees.index')->with('success', 'company created successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $Employee)
    {
        $Employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
    }
}
