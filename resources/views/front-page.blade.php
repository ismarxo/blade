{{-- 
    Template Name: Front Page Template 
--}}

@extends('layouts.app')

@section('content')   
    @foreach (PageSections::getSections() as $key => $section)
        @include('sections.'.$key.'.'.$section['view'], $section['data'])  
    @endforeach   
@endsection


