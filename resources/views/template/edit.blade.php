@extends('layouts.panel')
<?php  /** @var \Illuminate\Support\ViewErrorBag $errors */  ?>
@section('panel')
    <div class="panel-heading container-fluid">
        <div class="form-group">
            <a href="{{ route('template.index')  }}" class="btn btn-info btn-xs col-md-1 col-sm-2 col-xs-2">
                <i aria-hidden="true" class="fa fa-backward"></i>
                back
            </a>
            <div class="text-center col-md-9 col-sm-7 col-xs-6">Edit template: <b>{{$template->name}}</b></div>
            <div class="col-md-2 col-sm-3 col-xs-4">
                <div class="pull-right">
                    {{Form::open(['class' => 'confirm-delete', 'route' => ['template.destroy', $template->id], 'method' => 'DELETE'])}}
                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        {!! Form::model($template, ['route' => ['template.update', $template->id], 'method' => 'PUT']) !!}
        @include('template._form')
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@stop