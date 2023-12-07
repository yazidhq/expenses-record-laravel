<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expenses;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\RedirectResponse;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'title' => 'Expenses',
            'expenses' => Expenses::where('user_id', auth()->user()->id)->get(),
            'todayExpenses' => Expenses::where('user_id', auth()->user()->id)->whereDate('date', Carbon::today())->get(),
            'monthlyExpenses' => Expenses::where('user_id', auth()->user()->id)->whereYear('date', Carbon::now()->year)->whereMonth('date', Carbon::now()->month)->get(),
            'yearlyExpenses' => Expenses::where('user_id', auth()->user()->id)->whereYear('date', Carbon::now()->year)->get(),
        ];
        return view('dashboard.expenses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data = [
            'title' => 'Create',
            'categories' => Category::get(),
        ];
        return view('dashboard.expenses.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) :RedirectResponse
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'amount' => 'required',
            'description' => 'required|min:5',
            'date' => 'required',
        ]);

        Expenses::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'amount' => $request->amount,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug): View
    {
        $data = [
            'title' => 'Edit',
            'expenses' => Expenses::where('slug', $slug)->firstOrFail(),
            'categories' => Category::get(),
        ];
        return view('dashboard.expenses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug): RedirectResponse
    {
        $this->validate($request, [
            'description' => 'required|min:5',
        ]);
        $expenses = Expenses::where('slug', $slug)->firstOrFail();
        $expenses->update([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'amount' => $request->amount,
            'description' => $request->description,
            'date' => $request->date,
        ]);
        return redirect()->route('expenses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug):RedirectResponse
    {
        $expense = Expenses::where('slug', $slug)->firstOrFail();
        $expense->delete();
        return redirect()->route('expenses.index');
    }
}
