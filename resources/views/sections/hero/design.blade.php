<section 
    class="space-y-20 overflow-hidden sm:mb-32 sm:space-y-32 md:mb-20 md:space-y-40"
>
    @foreach ($section['data']['slides'] as $slide)
    <div class="relative">
        <div class="px-4 sm:px-6 md:px-8  pt-20">
            <div
                class="absolute h-full inset-0 bg-bottom bg-no-repeat nw:bg-gray-50 bg-[#0B1120]"
                style="background-image: url({!! SectionHero::getImageUrl($slide['background__image']) !!});
                background-size: 86.125rem; background-color: #0B1120;"
                >
                <div class="absolute inset-0 nw:bg-grid-gray-900/[0.04] nw:bg-[bottom_1px_center] bg-grid-gray-400/[0.05] bg-bottom border-b border-gray-100/5"
                    style="mask-image:linear-gradient(to bottom, transparent, black);-webkit-mask-image:linear-gradient(to bottom, transparent, black)">
                </div>
            </div>
            <div class="relative max-w-5xl mx-auto pt-20 sm:pt-24 lg:pt-32">
                <h1
                    class="nw:text-gray-900 font-extrabold text-4xl sm:text-5xl lg:text-6xl tracking-tight text-center text-white">                    
                    {!! $slide['title'] !!}
                </h1>
                <div class="mt-6 text-lg nw:text-gray-600 text-center max-w-3xl mx-auto text-gray-400">
                    {!! App::getWYSIWYG($slide['wysiwyg']) !!}
                </div>                
                <div class="mt-6 sm:mt-10 flex justify-center space-x-6 text-sm pb-10">
                    @foreach ($slide['buttons'] as $button)                       
                        <a 
                            @if ($button['color'])
                                class="focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto bg-sky-500 highlight-white/20 hover:bg-sky-400"
                            @else
                                class="hidden sm:flex items-center w-72 text-left space-x-3 px-4 h-12 nw:bg-white nw:ring-1 nw:ring-gray-900/10 nw:hover:ring-gray-300 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm rounded-lg nw:text-gray-400 bg-gray-800 ring-0 text-gray-300 highlight-white/5 hover:bg-gray-700"
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