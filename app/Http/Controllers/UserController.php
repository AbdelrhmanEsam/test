<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
    {
        $users = User::all( );
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required',
            'role' => 'required' ,
        ]);

        // User::create($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> $request->role,
        ]);
        return redirect()->route('users.index')->with('success' , 'done');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        // return view('User.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        return view('User.edit',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $User)
    {

        // $data = $request->validated();
        // if ($request->hasFile('photo')) {
        //     if (!empty($User->photo) && Storage::exists($User->photo)) {
        //         Storage::delete($User->photo);
        //     }
        //     $data['photo'] = request()->file('photo')->store('User');
        // }else{
        //     unset($data['photo']);
        // }
        // $User->update($data);

        /** view model add image by observe */


        $User->update($request->validated());
        return redirect()->route('User.index')->with('success' , 'done');
    }


    public function archive(){
        $User = User::onlyTrashed()->get();
        return view('User.archive',compact('User'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id' , $id)->delete();
        return redirect()->route('User.index')->with('success' , 'done');
    }

    /**
     * forceDelete the specified resource from storage.
     */
    public function forceDelete($id)
    {
        $User = User::findOrFail($id) ;

        // if (!empty($User->photo) && Storage::exists($User->photo)) {
        //     Storage::delete($User->photo);
        // }
        $User->forceDelete();
        return redirect()->back()->with('success' , 'done');
    }

    /**
     * restore the specified resource from storage.
     */
    public function restore($id)
    {
        // $User->restore();
        User::where('id' , $id)->restore();
        return redirect()->back()->with('success' , 'Restored');
    }
}
