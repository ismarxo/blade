<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')
<body class="antialiased text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-900">
    @php do_action('get_header') @endphp
    @include('partials.header')    

    <main>       
        @yield('content')
    </main>
   
    @include('partials.footer')    
    {!! App::getAnalytics() !!}
</body>

</html>
