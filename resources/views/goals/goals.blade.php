@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="col-md-12">
                <h6>Goals</h6>
            </div>
        </div>
        <div class="card-body">
        <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Goal') ? 'active':'' }}" href="javascript:void(0)" 
              data-toggle="modal" id="newGoal" data-target="#goalModal">
                <div class="form-group">
                  <button style="float: right" type="submit"  class="btn btn-danger">New Goal</button>
                </div>
              </a>
            </div>
            <div class="table-responsive-sm">
            <table class="table table-bordered task-table">
 
                <!-- Table Headings -->
                <thead>
                    <th>Goal</th>
                    <th>Duration</th>
                    <th>Status </th>
                    <th>Date</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($goals as $goal)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $goal->goal }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $goal->duration }}</div>
                            </td> <td class="table-text">
                                <div>{{ $goal->status }}</div>
                            </td>
                            <td>
                                <div>{{ $goal->created_at }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

<div wire:ignore.self class="modal fade" id="goalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="goalModalLabel">Add New Task</h5>
                          </div>
                        <div class="modal-body">
                        <form name="goal"  id="goalForm">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="goal-name" class="col-sm-3 control-label">Goal:</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="goal" id="goal-name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="duration-name" class="col-sm-3 control-label">Duration</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="duration" id="duration-name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status-name" class="col-sm-3 control-label">Status</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="status" id="status-name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default" id="addGoal">
                                        <i class="fa fa-plus"></i> Add Goal
                                    </button>
                                </div>
                            </div>
                        </form>
                          </div>
                         
                      </div>
                  </div>
              </div>

@endsection


