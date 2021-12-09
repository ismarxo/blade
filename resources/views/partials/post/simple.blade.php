<a href="{!! Blog::getPostLink($id) !!}" class="py-6 px-6 md:w-1/4">
    <div class="rounded-md">
        <img class="bg-gray-100 object-cover object-center w-full lg:h-48 md:h-36 rounded-md"
            {!! Blog::getPostThumbnailAttributes($id) !!}>
        <div class="py-4">
            <div class="mb-2 text-sm text-gray-400">{!! Blog::getPostDate($id) !!}</div>
            <div class="mb-2 text-lg font-medium ">{!! Blog::getPostTitle($id) !!}</div>
            <div class="mb-2 text-sm">{!! Blog::getPostExcerpt($id) !!}</div>
            {{-- @foreach (SectionBlog::getPostTags($item) as $tag)
  <span class="inline-block p-2 mt-2 text-xs font-medium text-grey-800 bg-grey-200 rounded">
    {!! SectionBlog::getCategoryNameById($tag) !!}
  </span>
  @endforeach --}}
        </div>
    </div>
</a>