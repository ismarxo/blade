<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  <div id="body-wrapper">
    <div id="header-wrapper">
      @php do_action('get_header') @endphp
      @include('partials.header.logo-button')
    </div>
    <div id="main-wrapper">
      @if (App::sidebar()) 
      <aside id="sidebar">
      </aside>
      @endif
      <div id="content-wrapper" role="document">
        @yield('content')
      </div>
    </div>
    <div id="footer-wrapper">
      @php do_action('get_footer') @endphp
      @include('partials.footer')      
    </div>   
  </div>
  @php wp_footer() @endphp
</body>

</html>
