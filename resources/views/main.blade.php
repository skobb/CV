@extends('layout')
@section('content')
    <div class="intro">
        Hello!
    </div>
    <div class="flex-container_row">
        <ul class="nav-bar">
            <a href="{{ url('backend') }}" class="nav-bar__nav-item">Backend</a>
            <a href="{{ url('frontend') }}" class="nav-bar__nav-item">Frontend</a>
            <a href="{{ url('backend') }}"  class="nav-bar__nav-item">Soft skills</a>
        </ul>
        <div class="photo">
            <img src="/images/cat.jpg">
        </div>
    </div>
@stop
