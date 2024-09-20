<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserInfo;

class UserController extends Controller
{
 
    public function index(Request $request)
    {
        $search = $request->query('search');
    
        if ($search) {
            $search = "%$search%";
            $users = User::where('firstname', 'like', $search)
                ->orWhere('lastname', 'like', $search)
                ->orWhere('email', 'like', $search)
                ->paginate(10);
        } else {
            $users = User::paginate(10);
        }
    
        return view('users.index', compact('users'));
    }
    

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
            'role' => 'required|in:admin,superadmin',
        ]);
    
       
        $validatedData['password'] = Hash::make($validatedData['password']);
        $newUser = User::create($validatedData); 
    
       
        Mail::to(auth()->user()->email)->send(new UserInfo($newUser)); 
    
    
        return redirect()->route('users.index')->with('success', 'User created and Email sent successfully!');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|confirmed',
            'role' => 'required|in:admin,superadmin',
        ]);

        $user = User::findOrFail($id);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']);
        }

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
