@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <h1>Welcome!</h1>
  <p>Let's create something awesome this week.</p>
</div>


<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cooking pie with cream">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Submit!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6">
    <div class="input-group">
      <div class="alert alert-success" role="alert" style="padding-bottom: 12px;padding-top: 11px;">
        Your todo update successfully
      </div>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">Todo List</div>
      <div class="panel-body">
        <!-- Table -->
        <table class="table table-striped">
          <thead></thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>
              <a href="{{ route('todo.edit') }}" class="btn btn-info btn-xs">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                </a>
                <button type="button" class="btn btn-danger btn-xs">
                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Delete
                </button>
                <button type="button" class="btn btn-success btn-xs">
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mark as Complete!
                </button>
              </td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>
                <span class="badge">Complete</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection