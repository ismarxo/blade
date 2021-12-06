{{-- 
    Template Name: Front Page Template 
--}}

@extends('layouts.app')

@section('content')   
    @foreach (PageSections ::getSections() as $key => $item)
        @include('sections.'.$key.'.'.$item)  
    @endforeach   
@endsection


