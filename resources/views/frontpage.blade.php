{{--
  Template Name: FrontPage Template
--}}

@extends('layouts.app')

@section('content')
  @include('sections.hero.right-image')
  @include('test.font-weight')
  @include('test.font-size')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
@endsection


