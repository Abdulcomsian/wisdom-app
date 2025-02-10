<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;
use App\Http\Requests\QuoteRequest;

class QuoteController extends Controller
{
    private $_service = null;
    private $_directory = 'auth/pages/quotes';
    private $_route = 'quotes';


    public function __construct()
    {
        $this->_service = new QuoteService();
    }


    public function index()
    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }


    public function create()
    {
        return view($this->_directory . '.create');
    }


    public function storeCustomQuote(QuoteRequest $request, $id)
    {
        try {
            $this->_service->storeCustomQuote($request->validated(), $id);
            return redirect()->back()->with('success', 'Data Saved Successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Something went wrong.');
        }
    }


    public function show($id)
    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.show', compact('data'));
    }


    public function edit($id)
    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.edit', compact('data'));
    }


    public function update(QuoteRequest $request, $id)
    {
        try {
            $this->_service->update($id, $request->validated());
            return redirect()->route($this->_route . '.index')->with('success', 'Data Updated Successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
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
