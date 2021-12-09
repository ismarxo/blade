{{-- 
    Template Name: Services page
--}}

@extends('layouts.app')

@section('content')
    @include('partials.breadcrumbs.simple')
    @include('partials.blog-head.simple')
    <div class="container mx-auto">
        <div class="my-4 -mx-6 lg:flex lg:flex-wrap">
        @if (have_posts())
            @while(have_posts()) @php the_post(); $id = get_the_id(); @endphp
                @include('partials.post.simple')
            @endwhile
        @else
            {{ __('Sorry, no results were found.', 'sage') }}
        @endif
        </div>
    </div>
   
    {{-- 
     
    @include('sections.query.service.simple')
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