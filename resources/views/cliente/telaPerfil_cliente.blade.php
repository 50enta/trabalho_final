@extends('event.Inicio-2')
@section('teste')
    {{auth()->guard('web')->user()->name}}
@endsection
