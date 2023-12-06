<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'title' => 'Income',
            'income' => Income::where('user_id', auth()->user()->id)->get()
        ];
        return view('dashboard.income.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create New Income'
        ];
        return view('dashboard.income.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validate = $this->validate($request, [
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required|min:5',
            'date' => 'required',
        ]);

        $validate['user_id'] = auth()->user()->id;
        Income::create($validate);

        return redirect()->route('income.index');
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
    public function edit(string $slug): View
    {
        $data = [
            'title' => 'Edit Income',
            'income' => Income::where('slug', $slug)->firstOrFail(),
        ];
        return view('dashboard.income.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $validate = $this->validate($request, [
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required|min:5',
            'date' => 'required',
        ]);

        Income::where('slug', $slug)->update($validate);
        return redirect()->route('income.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $income = Income::where('slug', $slug)->firstOrFail();
        $income->delete();
        return redirect()->route('income.index');
    }
}
