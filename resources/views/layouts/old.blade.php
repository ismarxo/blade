<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body>
  <div id="body__inner">
    <div id="wrapper">
      <div id="header__wrapper">
        @php do_action('get_header') @endphp
        @include('partials.header')
      </div>
      <main id="main__wrapper">
        <div id="content__wrapper" role="document">
          @yield('content')
        </div>
      </main>
      <div id="footer__wrapper">
        @php do_action('get_footer') @endphp
        @include('partials.footer')      
      </div>
    </div>     
  </div>
  @php wp_footer() @endphp
  {!! App::getAnalytics() !!}
</body>

</html>
