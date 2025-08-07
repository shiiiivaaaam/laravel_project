<?php
namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user', 'ideas'));
    }

    public function edit(User $user)
    {

        $this->authorize('update', $user);
        $editing = true;
        $ideas   = $user->ideas()->paginate(5);
        return view('users.edit', compact('user', 'editing', 'ideas'));
    }

    public function update(User $user , UpdateUserRequest $request)
    {
        $validated = $request->validated();

        if ($request->has('image')) {
            $imagePath          = $request->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

        }

        $user->update($validated);
        return redirect()->route('profile')->with('success', 'Profile Details Upated Successfully');
    }
    public function profile()
    {
        return $this->show(auth()->user());
    }

}
