<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    // Add other project management methods (index, create, store, etc.) from previous responses
    public function index()
    {
        $projects = \App\Models\Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'map_link' => 'required|url',
            'plot_size' => 'required|numeric',
            'built_up_area' => 'required|numeric',
            'no_of_floors' => 'required|integer',
            'project_type' => 'required|string',
            'construction_package' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'cloudinary');
        }

        \App\Models\Project::create($validated);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(\App\Models\Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, \App\Models\Project $project)
    {
        $validated = $request->validate([
            'project_name' => 'required|string|max:255',
            'client_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'map_link' => 'required|url',
            'plot_size' => 'required|numeric',
            'built_up_area' => 'required|numeric',
            'no_of_floors' => 'required|integer',
            'project_type' => 'required|string',
            'construction_package' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'cloudinary');
        }

        $project->update($validated);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(\App\Models\Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}