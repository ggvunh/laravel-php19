@extends('layouts.master')
@section('header')
  <h1>Add a new cat</h1>
@stop

@section('content')
  {!! Form::open(['url' => 'cats']) !!}
    @include('partials.forms.cat')
  {!! Form::close() !!}
@stop
