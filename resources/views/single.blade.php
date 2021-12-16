@extends('layouts.app')

@section('content')  
    {{--if sidebar  --}}
      {{-- sidebar --}}
      {{-- content --}}
    {{-- else --}}
    @while(have_posts()) @php the_post() @endphp
      @include('partials.content-single-'.get_post_type())
    @endwhile  
    {{-- endif --}}
@endsection
