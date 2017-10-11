@extends('layouts.master')
@section('header')
  <a href="{{url('/')}}">Back to overview</a>
  <h2>
    {{ $cat->name }}
  </h2>
    <a href="{{ url('cats/' . $cat->id . '/edit') }}" class="glyphicon glyphicon-edit">Edit</a>
    <a href="{{ url('cats/' . $cat->id . '/delete') }}" class="glyphicon glyphicon-delete">Delete</a>
  <p>Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
@stop

@section('content')
  <p>Date of birth: {{ $cat->date_of_birth }}
  @if ($cat->breed)
    Breed: <a href="{{url('/cats/breeds/' . $cat->breed->name)}}">{{ $cat->breed->name }}</a>
  @endif
  </p>
@stop
