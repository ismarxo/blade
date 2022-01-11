<section>                       
    <div class="relative px-4">                          
        <div class="relative container mx-auto">                               
            <div class="mt-12 mx-auto grid gap-5 lg:grid-cols-4 md:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 lg:max-w-none">
                @php $sectionQuery = SectionBlog::getQuery($section['data']['query'], $section['data']['query__number-posts']); @endphp
                @foreach ($sectionQuery as $id)
                <a href="{!! Blog::getPostLink($id) !!}" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0 relative h-72">
                        <img class="h-80 w-full object-cover absolute z-10"
                            {!! Blog::getPostThumbnailAttributes($id) !!}>
                        <div  class="h-full w-full flex-1 flex flex-col justify-between absolute z-20 ">
                            <div class="flex bg-gradient-to-b from-black px-5 py-4">
                                <div class="text-sm font-medium text-white hover:underline">
                                    @php echo get_the_category($id)[0]->cat_name;  @endphp
                                </div>
                            </div>
                            <div></div>
                            <div class="mt-6 flex flex-col bg-gradient-to-t from-black px-5 pt-10 pb-4">
                                <div class="text-xl font-semibold text-white">
                                    {!! Blog::getPostTitle($id) !!}
                                </div>
                                <div class="">
                                    <div class="flex space-x-1 text-sm text-gray-400 mt-2">
                                        <time datetime="@php echo get_the_date( 'Y-m-d', $id) @endphp">
                                          @php echo get_the_date( 'd.m.y', $id) @endphp
                                        </time>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
