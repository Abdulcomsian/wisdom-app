<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Services\TestimonialService;
use App\Http\Requests\TestimonialRequest;

class TestimonialsController extends Controller
{
    private $_service = null;
    private $_route = 'testimonials';

    public function __construct()
    {
        $this->_service = new TestimonialService();
    }

    public function index()
    {
        $data = Testimonial::all();
        return view('auth.pages.testimonials.index', compact('data'));
    }

    public function store(TestimonialRequest $request)
    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Data Saved Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route($this->_route . '.index')->with('error', $th->getMessage());
        }
    }

    public function update(TestimonialRequest $request, $id)
    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Data Updated Successfully!.');
        } catch (\Throwable $th) {
            return redirect()->route($this->_route . '.index')->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->_service->destroy($id);
            return redirect()->route($this->_route . '.index')->with('success', 'Data Deleted Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route($this->_route . '.index')->with('error', $th->getMessage());
        }
    }
}
