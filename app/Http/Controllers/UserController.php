<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Income;
use App\Models\Category;
use App\Models\Expenses;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => Str::ucfirst(auth()->user()->name) . "'s Profile",
            'monthlyIncome' => Income::where('user_id', auth()->user()->id)->whereYear('date', Carbon::now()->year)->whereMonth('date', Carbon::now()->month)->get(),
            'monthlyExpenses' => Expenses::where('user_id', auth()->user()->id)->whereYear('date', Carbon::now()->year)->whereMonth('date', Carbon::now()->month)->get(),
            'todayExpenses' => Expenses::where('user_id', auth()->user()->id)->whereDate('date', Carbon::today())->get()
        ];
        return view("dashboard.profile.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'avatar' => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $imageName = now()->timestamp . '_' . $image->getClientOriginalName();
            $image->storeAs('public/image', $imageName);

            // Check if the old avatar is not the default avatar
            if ($user->avatar !== 'default-ava.png') {
                Storage::delete('public/image/' . $user->avatar);
            }

            $user->update([
                'avatar' => $imageName,
                'name' => $request->name,
                'email' => $request->email,
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
