@include('partials.footer.'.App::getFooterTemplate()) 
@php do_action('get_footer') @endphp   
@php wp_footer() @endphp