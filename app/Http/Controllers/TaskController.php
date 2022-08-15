<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use RealRashid\SweetAlert\Facades\Alert;

class TaskController extends Controller
{

    protected $tasks;


    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
 
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        $data = array(
            'title' => 'Tasks',
            'tasks' => $this->tasks->forUser($request->user())
            
        );
        return view('tasks.tasks', $data);
    }

    public function create()
    {
        $data = array('title' => 'New Task');
        return view('tasks.index', $data);
    }


    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|max:255',
        ]);
       // $task = Task::create($storeData);

        //$task->save();
        
        $request->user()->tasks()->create([
           'name' => $request->name,
       ]);
    
        //return redirect('/tasks');
    }

    public function destroy(Request $request, Task $task)
{
    $this->authorize('destroy', $task);
 
    // Delete The Task...

    $task->delete();
 
    return redirect('/tasks');
}
    }
