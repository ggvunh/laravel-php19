@extends('layouts.master')
@section('header')
  @if (isset($breed))
    <a href="{{ url('/') }}">Back to over view</a>
  @endif
  <h2>
     All  @if(isset($breed)) {{ $breed->name }} @endif cats
     @if (Auth::check())
        <a href="{{'cats/create'}}" class="btn btn-success pull-right">Add Cat</a>
     @endif
  </h2>
@stop
@section('content')
  @foreach( $cats as  $cat )
    <div>
      <a href="{{ url('cats/' . $cat->id) }}"><strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}</a>
    </div>
  @endforeach
@stop
