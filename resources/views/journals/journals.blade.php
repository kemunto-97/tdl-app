@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="col-md-12">
                <h6>Journals</h6>
            </div>
        </div>
        <div class="card-body">
        <div class="nav-item">
              <a class="nav-link {{ ($title=='Add Journal') ? 'active':'' }}" href="javascript:void(0)" 
              data-toggle="modal" id="newJournal" data-target="#journalModal">
                <div class="form-group">
                  <button style="float: right" type="submit"  class="btn btn-primary">New Journal</button>
                </div>
              </a>
            </div>
            <div class="table-responsive-sm">
            <table class="table table-bordered task-table">
 
                <!-- Table Headings -->
                <thead>
                    <th>Today's Intention</th>
                    <th>My Affirmations</th>
                    <th>I'm Grateful For: </th>
                    <th>Date</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($journals as $journal)
                        <tr>
                            <!-- Task Name -->
                            <td class="table-text">
                                <div>{{ $journal->intention }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{ $journal->affirmation }}</div>
                            </td> <td class="table-text">
                                <div>{{ $journal->gratitude }}</div>
                            </td>
                            <td>
                                <div>{{ $journal->created_at }}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

        </div>

    </div>
</div>

<div wire:ignore.self class="modal fade" id="journalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="journalModalLabel">Add New Task</h5>
                          </div>
                        <div class="modal-body">
                        <form name="journal"  id="journalForm">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="intention-name" class="col-sm-3 control-label">Intention(s):</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="intention" id="intention-name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="affirmation-name" class="col-sm-3 control-label">Affirmation(s):</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="affirmation" id="affirmation-name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="gratitude-name" class="col-sm-3 control-label">I'm Grateful For:</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="gratitude" id="gratitude-name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default" id="addJournal">
                                        <i class="fa fa-plus"></i> Add Journal
                                    </button>
                                </div>
                            </div>
                        </form>
                          </div>
                         
                      </div>
                  </div>
              </div>

@endsection


