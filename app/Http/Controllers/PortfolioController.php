<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $portfolio = DB::table('projects')->get();
        // $portfolio = Project::orderBy('created_at', 'DESC')->get();
        $portfolio = Project::latest()->get();

        return view('portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create', [
            'project' => new Project()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProjectRequest $request)
    {
        // $title = request('title');
        // $slug = request('slug');
        // $description = request('description');
        // Project::create([
        //     'title' => request('title'),
        //     'slug' => request('slug'),
        //     'description' => request('description'),
        // ]);
        
        Project::create($request->validated());
        return redirect()->route('portfolio.index');
        //
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     return view('portfolio.show', [
    //         'project' => Project::findOrFail($id)
    //     ]);
    // }
    // 
    public function show(Project $project)
    {
        return view('portfolio.show', [
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('portfolio.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        return redirect()->route('portfolio.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
