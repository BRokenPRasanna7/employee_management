<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{

    public function index()
    {
        try {
            $departments = Department::all();

            foreach ($departments as $department) {
                $department->formattedCreatedAt = $department->created_at->format('d M, Y');
            }

            // return $this->success('Departments retrieved successfully.', $departments, 200);
            return response()->json($departments, 200);
        } catch (\Exception $e) {
            return $this->error('Failed to retrieve departments', $e->getMessage(), $e->getCode());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'department' => 'required|string|max:255|unique:departments,name',
            ]);

            DB::beginTransaction();

            $department = Department::create([
                'name' => $request->input('department'),
            ]);

            DB::commit();

            return $this->success('Department added successfully', $department, 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->error('Failed to add department', $e->getMessage(), 500);
        }
    }

    public function departmentDropdown()
    {
        try {
            $departments = Department::orderBy('id')->pluck('name', 'id')->toArray();
            return $this->success('Department names fetched successfully', $departments, 200);
        } catch (\Exception $e) {
            return $this->error('', $e->getMessage(), 500);
        }
    }

}
