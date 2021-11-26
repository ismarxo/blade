@extends('layouts.app')

@section('content')
  @include('partials.breadcrumbs.simple')
  @while(have_posts()) @php the_post() @endphp    
    @include('partials.content.page')
  @endwhile
@endsection