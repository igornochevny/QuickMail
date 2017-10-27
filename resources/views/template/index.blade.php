@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center">
                            <b>Templates</b>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                        @endif
                        <table class="table table-bordered table-responsive table-striped">
                            <tbody>
                            <tr>
                                <th width="25%">Name</th>
                                <th width="55%">Content</th>
                                <th width="20%">Action</th>
                            </tr>
                            <tr>
                                <td colspan="5" title="Create new template" class="light-green-background no-padding">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="{{route('template.create')}}" class="table-cell fa-green padding-sm">
                                                <i aria-hidden="true" class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @foreach ($templates as $model)
                                <tr class="clickable_row" onclick="window.location = '{{ route('template.show', [$model->id]) }}'">
                                    <td>{{$model->name}}</td>
                                    <td>{{$model->content}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['template.destroy', $model->id],
                                       'method' => 'DELETE'])}}
                                        {{ link_to_route('template.show', 'info', [$model->id], ['class' => 'btn btn-info btn-xs']) }}
                                        |
                                        {{ link_to_route('template.edit', 'edit', [$model->id], ['class' => 'btn btn-success btn-xs']) }}
                                        {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                        {{Form::close()}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection