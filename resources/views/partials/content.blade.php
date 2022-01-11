<div class="mx-auto max-w-prose">
        <div class="mx-4 sm:mx-0 ">
          @include('partials.breadcrumbs.simple')
        </div>
        <div class="my-10">
          <h1 class="mx-4 sm:mx-0 text-5xl leading-tight mb-5 font-black text-gray-100">
            {!! get_the_title() !!}
          </h1>
        </div>
        <div class="wysiwyg wysiwyg-thin text-gray-300 pb-8">
          @php the_content() @endphp
        </div>
</div>

