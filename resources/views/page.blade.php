@extends('layouts.app')

@section('content')
<div class="mx-4 sm:mx-0 pb-8">
  @include('partials.breadcrumbs.simple')
  <div class="container mx-auto my-10">
    <h1 class="text-5xl leading-tight mb-5 font-black text-gray-100">
      {!! get_the_title() !!}
    </h1>
  </div>
  @while(have_posts()) @php the_post() @endphp    
    @include('partials.content.page')
  @endwhile
</div>
@endsection