@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center">
                            <b>Bunches</b>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">{{Session::get('flash_message')}}</div>
                        @endif
                        <table class="table table-bordered table-responsive table-striped">
                            <tbody>
                            <tr>
                                <th width="15%">Name</th>
                                <th width="40%">Description</th>
                                <th width="15%">Emails</th>
                                <th width="30%">Action</th>
                            </tr>
                            <tr>
                                <td colspan="5" title="Create new campaign" class="light-green-background no-padding">
                                    <div class="row text-center">
                                        <div class="col-md-12">
                                            <a href="{{route('bunch.create')}}" class="table-cell fa-green padding-sm">
                                                <i aria-hidden="true" class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @foreach ($bunches as $bunch)
                                <tr class="clickable_row" onclick="window.location = '{{ route('subscriber.index', [$bunch]) }}'">
                                    <td>{{$bunch->name}}</td>
                                    <td>{{$bunch->description}}</td>
                                    <td>{{$bunch->subscribers->count()}}</td>
                                    <td>
                                        {{Form::open(['class' => 'confirm-delete', 'route' => ['bunch.destroy', $bunch],
                                       'method' => 'DELETE'])}}
                                        {{ link_to_route('subscriber.index', 'subscribers', [$bunch], ['class' => 'btn btn-info btn-xs']) }}
                                        |
                                        {{ link_to_route('bunch.edit', 'edit', [$bunch], ['class' => 'btn btn-success btn-xs']) }}
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