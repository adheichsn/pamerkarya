<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.profile.show', compact('user'));
    }

    public function edit() // Change this method name to "edit"
    {
        $user = Auth::user();
        return view('dashboard.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'contact_number' => ['required', 'string', 'max:255'],
        'education' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'instagram' => ['nullable', 'string', 'max:255'], // Make it optional
        'twitter' => ['nullable', 'string', 'max:255'], // Make it optional
        'linkedin' => ['nullable', 'string', 'max:255'], // Make it optional
        ]);

        // Update user attributes
        $user->update($validatedData);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
