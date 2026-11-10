<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::latest()->get();
        
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Data project berhasil ditambahkan');
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
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'teknologi' => 'required|string|max:255',
            'status' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $imageName = $project->image;
        if ($request->hasFile('image')) {
            if ($project->image) {
                $oldImagePath = public_path('images/' . $project->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'teknologi' => $request->teknologi,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Data project berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project = Project::findOrFail($id);

        if ($project->image) {
            $imagePath = public_path('images/' . $project->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Data berhasil dihapus');
    }
    public function exportPdf()
    {
        $projects = Project::all();
        $pdf = Pdf::loadView('admin.projects.pdf', compact('projects'))
            ->setPaper('a4', 'landscape');
        return $pdf->stream('projects.pdf');
    }
    public function exportPdfById($id)
    {
        $project = Project::findOrFail($id);
        $pdf = Pdf::loadView('admin.projects.pdf_single', compact('project'))
            ->setPaper('a4', 'portrait');
        return $pdf->stream('project_' . $project->id . '.pdf');
    }
}
