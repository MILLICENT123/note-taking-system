<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Mail\NoteInfo;
use Illuminate\Support\Facades\Mail;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        $category = $request->input('category');

        if ($search) {
            $search = "%$search%";
            $notes = Note::where('title', 'like', $search)
                ->orWhere('content', 'like', $search);

            if ($category) {
                $notes = $notes->where('category', ucfirst($category));
            }

            $notes = $notes->orderBy('title', 'asc')->paginate(10);
        } else {
            if ($category) {
                $notes = Note::where('category', ucfirst($category))
                    ->orderBy('title', 'asc')
                    ->paginate(10);
            } else {
                $notes = Note::orderBy('title', 'asc')->simplePaginate(10);
            }
        }

        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'required|string'
        ]);

        $note = Note::create($validatedData);

        $user = auth()->user();
        if ($user) {
            Mail::to($user->email)->send(new NoteInfo($note));
        }

        return redirect()->route('notes.index')->with('success', 'Note created and Email sent successfully!🎉🎊🍾');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category' => 'required|string'
        ]);

        $note = Note::findOrFail($id);
        $note->update($validatedData);

        return redirect()->route('notes.index')->with('primary', 'Note updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.index')->with('danger', 'Note deleted successfully.');
    }

    // Custom methods for additional functionality

    public function category($category)
    {
        $notes = Note::where('category', ucfirst($category))->paginate(10);
        return view('notes.index', compact('notes'));
    }
    
    public function personal()
    {
        $notes = Note::where('category', 'Personal')->paginate(10);
        return view('notes.index', compact('notes'));
    }
    
    public function work()
    {
        $notes = Note::where('category', 'Work')->paginate(10);
        return view('notes.index', compact('notes'));
    }
    
    public function study()
    {
        $notes = Note::where('category', 'Study')->paginate(10);
        return view('notes.index', compact('notes'));
    }
    
    public function recentNotes()
    {
        $recentNotes = Note::orderBy('created_at', 'desc')->take(10)->get();
        return view('notes.recentnotes', compact('recentNotes'));
    }
}
