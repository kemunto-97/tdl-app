@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="col-md-12">
                <h6>Tasks</h6>
            </div>
        </div>
        <div class="card-body">
        <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Task') ? 'active':'' }}" href="javascript:void(0)" 
              data-toggle="modal" id="newTask" data-target="#taskModal">
                <div class="form-group">
                  <button style="float: right" type="submit"  class="btn btn-primary">New Task</button>
                </div>
              </a>
            </div>
            <div class="table-responsive-sm">
            <table class="table table-bordered task-table">
 
                <!-- Table Headings -->
                <thead>
                    <th>Task</th>
                    <th>Date</th>
                    <th>&nbsp;</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <div>{{ $task->created_at }}</div>
                            </td>
                            <td>
                            <form action="{{ url('task/'.$task->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                    
                                <button style="float: right" type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

<div wire:ignore.self class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="taskModalLabel">Add New Task</h5>
                          </div>
                        <div class="modal-body">
                        <form name="task"  id="taskForm">
                            {{ csrf_field() }}
                            
                
                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control">
                                </div>
                            </div>
                
                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default" id="addTask">
                                        <i class="fa fa-plus"></i> Add Task
                                    </button>
                                </div>
                            </div>
                        </form>
                          </div>
                         
                      </div>
                  </div>
              </div>

@endsection


