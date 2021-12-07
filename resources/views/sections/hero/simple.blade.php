<div class="container mx-auto"> 
    <div class="" id="hero-slider">
      @foreach ($section['data']['slides'] as $slide)
      <div>
        <div class="relative z-0 py-10 md:py-12 bg-white dark:bg-gray-800 overflow-hidden">
          <div class="container mx-auto px-2">
            {{-- row --}}
            <div class="flex flex-wrap flex-row justify-center">
              {{-- hero content --}}
              <div class="flex-shrink max-w-full w-full md:w-9/12 lg:w-1/2 self-center lg:pr-12">
                <div class="text-center lg:text-left mt-6 lg:mt-0 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                  <div class="mb-4">
                    @if ($slide['pre-title__accent']) 
                    <span class="text-sm py-1 px-2 bg-red-500 text-gray-100 rounded">{!! $slide['pre-title__accent'] !!}</span>
                    @endif
                    @if ($slide['pre-title']) 
                    <span class="ml-1">{!! $slide['pre-title'] !!}</span>  
                    @endif                
                  </div>
                  <div class="mb-8">
                    <{!! $slide['title__status'] !!} class="text-5xl leading-tight mb-5 font-black text-gray-800 dark:text-gray-100">
                      {!! $slide['title'] !!}
                    </{!! $slide['title__status'] !!}>
                    @if ($slide['wysiwyg']) 
                    <div class="text-gray-500 leading-relaxed font-light text-xl mx-auto divb-2">
                      {!! apply_filters('the_content', $slide['wysiwyg']) !!}
                    </div>
                    @endif
                  </div>
                  @foreach ($slide['buttons'] as $button)
                    <a 
                      @if ($button['color'])
                        class="py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-700 hover:ring-0 hover:border-red-700 focus:bg-red-700 focus:border-red-700 focus:outline-none focus:ring-0 mr-4" 
                      @else
                        class="py-3 px-5 inline-block text-center rounded-md leading-normal text-gray-100 bg-gray-900 border border-gray-900 hover:text-white hover:bg-black hover:ring-0 hover:border-black focus:bg-black focus:border-black focus:outline-none focus:ring-0" 
                      @endif
                        href="{!! $button['link'] !!}"
                    >
                      {!! SectionHero::getButtonIcon($button['image']) !!}
                      <span>{!! $button['title'] !!}</span>
                    </a>                  
                  @endforeach              
                </div>
              </div>   
              {{-- hero image --}}
              <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center mt-10">
                @if ($slide['image']) 
                <div class="px-12 md:ml-16 md:pr-0 md:mt-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".1s">             
                      {!! SectionHero::getPicture($slide['image']) !!}                          
                </div>
                @endif
              </div>         
            </div>
            {{-- end row --}}
          </div>
        </div>
      </div>
      @endforeach 
    </div>
      
</div>
    