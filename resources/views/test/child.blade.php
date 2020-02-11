@extends('layouts.layout')

@section('Title', 'Child Page')

@section('header')
    @parent
    <h2>This is appended to the header</h2>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection