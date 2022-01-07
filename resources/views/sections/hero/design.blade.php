<section 
    class="space-y-20 overflow-hidden sm:mb-32 sm:space-y-32 md:mb-20 md:space-y-40"
>
    @foreach ($section['data']['slides'] as $slide)
    <div class="relative">
        <div class="px-4 sm:px-6 md:px-8  pt-20">
            <div
                class="absolute h-full inset-0 bg-bottom bg-no-repeat bg-gray-50 dark:bg-[#0B1120]"
                style="background-image: url({!! SectionHero::getImageUrl($slide['background__image']) !!});
                background-size: 86.125rem;"
                >
                <div class="absolute inset-0 bg-grid-gray-900/[0.04] bg-[bottom_1px_center] dark:bg-grid-gray-400/[0.05] dark:bg-bottom dark:border-b dark:border-gray-100/5"
                    style="mask-image:linear-gradient(to bottom, transparent, black);-webkit-mask-image:linear-gradient(to bottom, transparent, black)">
                </div>
            </div>
            <div class="relative max-w-5xl mx-auto pt-20 sm:pt-24 lg:pt-32">
                <h1
                    class="text-gray-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center dark:text-white">                    
                    {!! $slide['title'] !!}
                </h1>
                <div class="mt-6 text-lg text-gray-600 text-center max-w-3xl mx-auto dark:text-gray-400">
                    {!! App::getWYSIWYG($slide['wysiwyg']) !!}
                </div>                
                <div class="mt-6 sm:mt-10 flex justify-center space-x-6 text-sm pb-10">
                    @foreach ($slide['buttons'] as $button)                       
                        <a 
                            @if ($button['color'])
                                class="bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400"
                            @else
                                class="hidden sm:flex items-center w-72 text-left space-x-3 px-4 h-12 bg-white ring-1 ring-gray-900/10 hover:ring-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm rounded-lg text-gray-400 dark:bg-gray-800 dark:ring-0 dark:text-gray-300 dark:highlight-white/5 dark:hover:bg-gray-700"
                            @endif
                                href="{!! $button['link'] !!}">
                                {!! SectionHero::getButtonIcon($button['image']) !!}
                            <span>{!! $button['title'] !!}</span>
                        </a>
                    @endforeach                  
                </div>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 mt-20 sm:mt-24 lg:mt-32 lg:grid lg:gap-8 lg:grid-cols-12 lg:items-center">
        </div>
    </div>
    @endforeach 
</section>