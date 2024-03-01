<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        $employees = Employee::all();

        return response()->json($employees, 200);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'department' => 'required|string|max:255',
                'email' => 'required|email|unique:employees',
                'contact_number' => 'required|string|max:20',
                'dob' => 'required|date',
                'blood_group' => 'nullable|string|max:10',
                'address' => 'nullable|string|max:255',
            ]);

            DB::beginTransaction();

            $employee = Employee::create([
                'name' => $request->input('name'),
                'department' => $request->input('department'),
                'email' => $request->input('email'),
                'contact_number' => $request->input('contact_number'),
                'dob' => $request->input('dob'),
                'blood_group' => $request->input('blood_group'),
                'address' => $request->input('address'),
            ]);

            DB::commit();

            return $this->success('Employee created successfully', ['employee' => $employee], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error('Failed to create employee', $e->getMessage(), 500);
        }
    }

    public function show(Request $request)
    {
        $id = $request->input('id');

        try {
            $employee = Employee::findOrFail($id);

            if ($employee instanceof Employee) {
                $employee->formattedCreatedAt = $employee->created_at->format('d M, Y');
                return $this->success('Successfully found employee.', $employee, 200);
            } else {
                return $this->error('Employee not found.', null, 404);
            }

        } catch (\Exception $e) {
            return $this->error('Employee not found', $e->getMessage(), 404);
        }
    }
}
