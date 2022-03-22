@extends('admin.template')

@section('title', 'List Grade')

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>List Grade</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5   form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row" style="display: block;">
      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_content">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($list as $key => $list)
                <tr>
                  <th scope="row"><a href="/admin/listgrade/{{$list['id']}}">{{$list['id']}}</a></th>
                  <td><a href="/admin/subject/{{$list['id']}}">{{$list['name']}}</a></td>
                  <td><a type="button" class="btn btn-danger" href="/admin/listgrade/delete/{{$list['id']}}">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <a type="button" class="btn btn-success float-right" href="/admin/listgrade/add">Add</a>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection