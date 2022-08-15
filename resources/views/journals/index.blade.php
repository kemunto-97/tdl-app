<!-- resources/views/tasks/index.blade.php -->
 
@extends('layouts.app')
 
@section('content')
 
    <!-- Bootstrap Boilerplate... -->
 
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
 
        <form action="{{ url('storejournal') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="journal-name" class="col-sm-3 control-label">Journal</label>
 
                <div class="col-sm-6">
                    <input type="text" name="name" id="journal-name" class="form-control">
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
 
   
@endsection

