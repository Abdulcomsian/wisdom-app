<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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

        $validatedData = $request->all();

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        // Handle image upload
        // if ($request->hasFile('image')) {
        //     if ($user->avatar) {
        //         $this->deleteImage($user->avatar);
        //     }
        //     $imagePath = $this->uploadImage($request->file('image'), 'avatars/');
        //     $validatedData['avatar'] = $imagePath;
        // }

        // Combine country code with phone number before saving
        // if (!empty($validatedData['country_code']) && !empty($validatedData['phone'])) {
        //     $validatedData['phone'] = $validatedData['country_code'] . $validatedData['phone'];
        // }

        // Remove country_code from validatedData as it's not a database column
        // unset($validatedData['country_code']);

        $user->update($validatedData);

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
