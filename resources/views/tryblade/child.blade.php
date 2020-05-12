@extends('tryblade.layout')
@section('title','Page Title')

@section('sidebar')
    <p>This is Appended to The master sidebar</p>
@endsection

@section('content')
    <p>This is my body content</p>
    @component('tryblade.alert')
        <strong>Musa</strong>
    @endcomponent

@endsection
