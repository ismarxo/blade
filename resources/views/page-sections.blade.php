{{-- 
    Template Name: Page Sections Template 
--}}

@extends('layouts.app')

@section('content')   
    <div id="section-list">
        @foreach (PageSections::getSections() as $section)
            @include('sections.'.$section['type'].'.'.$section['view'], $section['data'])  
        @endforeach   
    </div>
@endsection