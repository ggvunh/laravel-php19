@extends('layouts.master')
@section('header')
  @if (isset($breed))
    <a href="{{ url('/') }}">Back to over view</a>
  @endif
  <h2>
     All  @if(isset($breed)) {{ $breed->name }} @endif cats
     <a href="{{'cats/create'}}" class="btn btn-success pull-right">Add Cat</a>
  </h2>
@stop
@section('content')
  @foreach( $cats as  $cat )
    <div>
      <a href="#"><strong>{{ $cat->name }}</strong></a>
    </div>
  @endforeach
@stop
