{{-- 
    Template Name: Front Page Template 
--}}

@extends('layouts.app')

@section('content')
    @if(Sections::test())
        @foreach (Sections::test() as $key => $item)
            @include('sections.'.$key.'.'.$item)  
        @endforeach
    @else
        @include('sections.hero.image-right') 
    @endif
@endsection


