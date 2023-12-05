<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'title' => 'Categories',
            'categories' => Category::where('user_id', auth()->user()->id)->get()
        ];
        return view('dashboard.category.index', $data);
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
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required|min:10'
        ]);

        Category::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
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
    public function destroy(string $slug): RedirectResponse
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $category->delete();
        return redirect()->route('category.index');
    }
}
