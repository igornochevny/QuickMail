@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading container-fluid">
                        <div class="form-group">
                            <a href="{{ route('bunch.index')  }}"
                               class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2">
                                <i aria-hidden="true" class="fa fa-backward"></i>
                                back
                            </a>
                            <div class="text-center col-md-9 col-sm-7 col-xs-6">
                                Bunch
                                "<b>{{$bunch->name}}</b>"
                                (subscribers)
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-4">
                                <div class="pull-right">
                                    {{Form::open(['class' => 'confirm-delete', 'route' => array_merge(['bunch.destroy'], compact('bunch', 'subscriber')), 'method' => 'DELETE'])}}
                                    {{ link_to_route('bunch.edit', 'edit', [$bunch->id], ['class' => 'btn btn-success btn-xs']) }}
                                    |
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                        @endif
                        <table class="table table-bordered table-responsive table-striped">
                            <tbody>
                            <tr>
                                <th width="25%">First Name</th>
                                <th width="25%">Last Name</th>
                                <th width="30%">Email</th>
                                <th width="20%">Action</th>
                            </tr>
                            <tr>
                                <td colspan="5" title="Create new subscriber" class="light-green-background no-padding">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="{{route('subscriber.create', compact('subscriber','bunch'))}}"
                                               class="table-cell fa-green padding-sm">
                                                <i aria-hidden="true" class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td>{{$subscriber->first_name}}</td>
                                    <td>{{$subscriber->last_name}}</td>
                                    <td>{{$subscriber->email}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => array_merge(['subscriber.destroy'], compact('bunch','subscriber')), 'method' => 'DELETE'])}}
                                        {{ link_to_route('subscriber.edit', 'edit', compact('bunch','subscriber'), ['class' => 'btn btn-success btn-xs']) }}
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