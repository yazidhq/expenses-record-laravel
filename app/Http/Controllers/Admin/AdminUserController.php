<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Income;
use App\Models\Category;
use App\Models\Expenses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Users",
            'users' => User::get(),
            'totalUsers' => User::where('role', 'user')->count(),
        ];
        return view("admin.users", $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $category = Category::where('user_id', $id)->firstOrFail();
        $expenses = Expenses::where('user_id', $id)->firstOrFail();
        $income = Income::where('user_id', $id)->firstOrFail();
        $user->delete();
        $category->delete();
        $expenses->delete();
        $income->delete();
        return redirect()->route('adminuser.index');
    }
}
