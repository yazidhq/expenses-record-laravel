<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\Category;
use App\Models\Expenses;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => Str::ucfirst(auth()->user()->name) . "'s Profile",
            'income' => Income::where('user_id', auth()->user()->id)->get(),
            'expenses' => Expenses::where('user_id', auth()->user()->id)->get(),
            'todayExpenses' => Expenses::where('user_id', auth()->user()->id)->whereDate('date', Carbon::today())
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
