<div class="container mx-auto">
    <div class="wysiwyg">
        @php the_content() @endphp
    </div>
</div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
