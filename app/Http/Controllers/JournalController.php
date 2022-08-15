<?php

namespace App\Http\Controllers;
use App\Models\journals;
use Illuminate\Http\Request;

class JournalController extends Controller
{

    public function __construct( )
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = array(
            'title' => 'Journals',
            'journals' => journals::all(),
            
        );
        return view('journals.journals', $data);
    }

    public function create()
    {
        $data = array('title' => 'New Journal');
        return view('journals.index', $data);
    }


    public function store(Request $request)
    {
        $storeData = $request->validate([
            'intention' => 'required|max:255',
            'affirmation' => 'required|max:255',
            'gratitude' => 'required|max:255',
        ]);
       $journal = journals::create($storeData);
       echo "200";
    }

    public function destroy(Request $request, Journal $journal)
{
    $this->authorize('destroy', $journal);
 
    // Delete The Task...

    $journal->delete();
 
    return redirect('/journals');
}
}
