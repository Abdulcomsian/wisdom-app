<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;
use Exception;

class CategoryController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/categories';
    private $_route = 'categories';


    public function __construct()
    {
        $this->_service = new CategoryService();
    }

    public function index()
    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }

    public function store(CategoryRequest $request)
    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Data Saved Successfully!');
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function show($id)
    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.show', compact('data'));
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.show')->with('success', 'Data Updated Successfully!.');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    public function updateSource(Request $request)
    {
        try {
            $data = $this->_service->updateSource($request->all());
            return response()->json(['data' => $data, 'message' => 'Data Updated Successfully!']);
        } catch (\Throwable $th) {
            // throw $th;
            return response()->json('error' , $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Data Deleted Successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }
}
