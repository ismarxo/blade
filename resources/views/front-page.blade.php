{{-- 
    Template Name: Front Page Template 
--}}

@extends('layouts.app')

@section('content')
    @include('sections.hero.image-right')  
    @include('sections.feature.2x2')
    @include('sections.query.service.simple')
    @include('sections.query.blog.simple')
    {{-- 
     
    
    @include('sections.cta.simple')
    @include('sections.feature.simple')
    @include('sections.list.technology')
    @include('sections.list.history')
    @include('sections.cta.simple')
    @include('sections.query.portfolio.simple')
    @include('sections.query.clients.simple')
    @include('sections.query.blog.simple')
    @include('sections.content.include-simple')
    @include('partials.header.pre-header-banner')
    @include('partials.header.logo-button') 
    --}}   
  
@endsection


