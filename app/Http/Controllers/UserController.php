<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Traits\RemoveFileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    use RemoveFileTrait;

    private $_service = null;
    private $_directory = 'auth/pages/users';
    private $_route = 'users';

    /**
     * Create a new controller instance.
     *
     * @return $reauest, $modal
     */
    public function __construct()
    {
        $this->_service = new UserService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] = $this->_service->index();
        return view($this->_directory . '.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->_directory . '.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $this->_service->store($request->validated());
            return redirect()->route($this->_route . '.index');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route($this->_route . '.index')->with('error', 'Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->_service->show($id);
        return view($this->_directory . '.show', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $data = Auth::user();
        return view($this->_directory . '.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->_service->show($id);

        if ($data == null) {
            abort(404);
        }

        return view($this->_directory . '.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editprofile()
    {
        $data = Auth::user();
        return view($this->_directory . '.edit_my_profile', compact('data'));
    }

    /**
     * Update My profile.
     *
     * @param Request Validation $validation
     * @return \Illuminate\Http\Response
     */
    public function updatemyprofile(Request $request)
    {
        $user = Auth::user();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country_code = $request->country_code;
        $user->phone_no = $request->phone_no;

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        // Handle image update
        if ($request->hasFile('image')) {
            if (!empty($user->avatar)) {
                $this->unlinkFile($user->avatar);
            }

            // Upload new image
            $imagePath = $request->file('image')->store('avatars', 'public');
            $user->avatar = $imagePath;
        }

        $user->save();

        return redirect()->route('auth')->with('success', 'Profile updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request Validation $validation
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $this->_service->update($id, $request->validated());
        return redirect()->route($this->_route . '.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->_service->destroy($id);
        return redirect()->route($this->_route . '.index');
    }
}
