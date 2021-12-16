<section class="container sm:mx-4 mx-auto">
    <{!! $section['data']['title__status'] !!} class="text-5xl leading-tight mb-5 font-black text-gray-800 dark:text-gray-100 mx-4">
        {!! $section['data']['title'] !!}
        </{!! $section['data']['title__status'] !!}>
        @if ($section['data']['wysiwyg'])
            <div class="wysiwyg">
                {!! App::getWYSIWYG($section['data']['wysiwyg']) !!}
            </div>
        @endif
        <div class="my-4 mx-4 grid grid-cols-1 gap-y-10 sm:grid-cols-2 md:grid-cols-3 gap-x-6 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
            @php $sectionQuery = SectionBlog::getQuery($section['data']['query'], $section['data']['query__number-posts']); @endphp
            @foreach ($sectionQuery as $id)
                @include('partials.post.simple')
            @endforeach
        </div>
</section>
