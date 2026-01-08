<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'technology' => 'nullable|string',
            'duration' => 'nullable|string',
            'role' => 'nullable|string',
            'client' => 'nullable|string',
            'project_url' => 'nullable|url',
            'is_featured' => 'boolean',
            'thumbnail_file' => 'nullable|image|max:2048',
            'gallery_files' => 'nullable|array|max:3',
            'gallery_files.*' => 'nullable|image|max:2048',
        ]);

        $validated['slug'] = Str::slug($request->title);

        if ($request->hasFile('thumbnail_file')) {
            $path = $request->file('thumbnail_file')->store('projects', 'public');
            $validated['thumbnail'] = $path;
        }

        if ($request->hasFile('gallery_files')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_files') as $file) {
                $galleryPaths[] = $file->store('projects/gallery', 'public');
            }
            $validated['images'] = $galleryPaths;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string',
            'description' => 'nullable|string',
            'challenge' => 'nullable|string',
            'solution' => 'nullable|string',
            'technology' => 'nullable|string',
            'duration' => 'nullable|string',
            'role' => 'nullable|string',
            'client' => 'nullable|string',
            'project_url' => 'nullable|url',
            'is_featured' => 'boolean',
            'thumbnail_file' => 'nullable|image|max:2048',
            'gallery_files' => 'nullable|array|max:3',
            'gallery_files.*' => 'nullable|image|max:2048',
            'delete_images' => 'nullable|array',
            'delete_images.*' => 'integer',
        ]);

        if ($request->hasFile('thumbnail_file')) {
            // Delete old thumbnail if needed
            $path = $request->file('thumbnail_file')->store('projects', 'public');
            $validated['thumbnail'] = $path;
        }

        // Handle gallery image deletion
        $existingImages = $project->images ?? [];
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $index) {
                if (isset($existingImages[$index])) {
                    // Delete file from storage
                    \Storage::disk('public')->delete($existingImages[$index]);
                    unset($existingImages[$index]);
                }
            }
            // Reindex array
            $existingImages = array_values($existingImages);
        }

        // Handle new gallery uploads
        if ($request->hasFile('gallery_files')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_files') as $file) {
                $galleryPaths[] = $file->store('projects/gallery', 'public');
            }
            // Add new images to existing ones
            $existingImages = array_merge($existingImages, $galleryPaths);
            // Limit to 3 images
            $existingImages = array_slice($existingImages, 0, 3);
        }

        $validated['images'] = $existingImages;

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Projeto removido!');
    }
}
