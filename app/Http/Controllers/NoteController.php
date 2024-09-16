<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Mail\NoteInfo;
use Illuminate\Support\Facades\Mail;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->input('category');

        if ($category) {
            $notes = Note::where('category', ucfirst($category))->get();
        } else {
            $notes = Note::all();
        }

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

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

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, $id)
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

    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return redirect()->route('notes.index')->with('danger', 'Note deleted successfully.');
    }

    public function category($category)
    {
        $notes = Note::where('category', ucfirst($category))->get();
        return view('notes.index', compact('notes'));
    }

    public function personal()
    {
        $notes = Note::where('category', 'Personal')->get();
        return view('notes.index', compact('notes'));
    }

    public function work()
    {
        $notes = Note::where('category', 'Work')->get();
        return view('notes.index', compact('notes'));
    }

    public function study()
    {
        $notes = Note::where('category', 'Study')->get();
        return view('notes.index', compact('notes'));
    }
}
