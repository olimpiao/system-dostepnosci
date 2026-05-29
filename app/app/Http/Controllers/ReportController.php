<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use App\Models\Category;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::with('category')
            ->latest()
            ->get();

        return view('reports.index', compact('reports'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('reports.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'reporter_name' => 'required',
            'organization' => 'nullable',
            'category_id' => 'required',
            'status' => 'required',
        ]);

        Report::create($validated);

        return redirect('/reports');
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        $categories = Category::all();

        return view('reports.edit', compact(
            'report',
            'categories'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        $validated = $request->validate([

            'title' => 'required',
            'description' => 'required',
            'reporter_name' => 'required',
            'organization' => 'nullable',
            'status' => 'required',
            'category_id' => 'required',

        ]);

        $report->update($validated);

        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('reports.index');
    }
}
