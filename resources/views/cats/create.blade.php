@extends('layouts.master')
@section('header')
  <h1>Add a new cat</h1>
@stop

@section('content')
  {!! Form::open(['url' => 'cats', 'enctype' => 'multipart/form-data']) !!}
    @include('partials.forms.cat')
  {!! Form::close() !!}
@stop
