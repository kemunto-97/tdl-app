<?php

namespace App\Http\Controllers;
use App\Models\goals;
use Illuminate\Http\Request;

class GoalController extends Controller
{

    public function __construct( )
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data = array(
            'title' => 'Goals',
            'goals' => goals::all(),
            
        );
        return view('goals.goals', $data);
    }

    public function create()
    {
        $data = array('title' => 'New Goal');
        return view('goals.index', $data);
    }


    public function store(Request $request)
    {
        $storeData = $request->validate([
            'goal' => 'required|max:255',
            'duration' => 'required|max:255',
            'status' => 'required|max:255',
        ]);
       $goal = goals::create($storeData);
       echo "200";
    }

    public function destroy(Request $request, Goal $goal)
{
    $this->authorize('destroy', $goal);
 
    // Delete The Task...

    $goal->delete();
 
    return redirect('/goals');
}
}
