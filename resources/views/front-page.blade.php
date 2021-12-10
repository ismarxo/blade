{{-- 
    Template Name: Front Page Template 
--}}

@extends('layouts.app')

@section('content')   
    @foreach (PageSections::getSections() as $section)
        @include('sections.'.$section['type'].'.'.$section['view'], $section['data'])  
    @endforeach   
@endsection


