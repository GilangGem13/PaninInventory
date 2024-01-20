<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $user = User::paginate(10);
        return response()->view('Users.index', ['User' => $user]);
    }
    public function create()
    {
        return view('Users.create');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:user,admin',
        ]);
        
        $user = User::create(request(['name', 'email', 'password','role']));
        
        auth()->login($user);
        
        return redirect()->to('/Users');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('Users.edit')->with(['Users' => $user]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $form_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
        );

        User::where('id', $id)->update($form_data);
        return redirect()->route('Users.index')->with('success', 'JenisBarang updated successfully');
    }
    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('Users.index')->with('success', 'Data Berhasil Dihapus!');
    }
}