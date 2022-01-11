<section class="my-4" data-section-type="sections/hero" data-section-name="port-game">
    <div class="relative px-4">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-3 grid-cols-1 gap-5">
                <div id="slider" class="col-span-2 min-h-full">
                    @php $slideIndex = 1; @endphp
                    @foreach ($section['data']['slides'] as $slide)
                    @if($slideIndex != 2 && $slideIndex != 3)
                    <a href="{!! $slide['action'] !!}" class="flex flex-col rounded-lg shadow-lg overflow-hidden ">
                        <div class="flex-shrink-0 relative h-auto">
                            <img class="h-full w-full object-cover absolute z-10"
                                src="{!! SectionHero::getImageUrl($slide['background__image']) !!}"
                                alt="{!! SectionHero::getImageAlt($slide['background__image']) !!}">
                            <div class="h-full w-full flex-1 flex flex-col justify-between relative z-20 ">
                                <div class="flex bg-gradient-to-b from-black px-5 py-4">
                                    <div class="text-sm font-medium text-white hover:underline">
                                        {!! $slide['pre-title'] !!}
                                    </div>
                                </div>
                                <div class="h-96"></div>
                                <div class="mt-0 flex flex-col bg-gradient-to-t from-black px-5 pt-0 pb-4">
                                    <div class="text-xl xl:text-5xl md:text-3xl font-black text-white">
                                        {!! $slide['title'] !!}
                                    </div>
                                    <div class="">
                                        <div class="flex space-x-1 text-sm text-gray-400 mt-2">
                                            {!! App::getWYSIWYG($slide['wysiwyg']) !!}
                                            {{-- <time datetime="2020-03-16">
                                                Mar 16, 2020
                                            </time>
                                            <span aria-hidden="true">
                                                ·
                                            </span>
                                            <span>
                                                6 min read
                                            </span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endif
                    @php $slideIndex++ @endphp
                    @endforeach 
                </div>
                <div class="grid grid-cols-1 gap-5">
                    @php $slideIndex = 1; @endphp
                    @foreach ($section['data']['slides'] as $slide)
                    @if($slideIndex == 2 || $slideIndex == 3)
                    <a href="" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0 relative h-72">
                            <img class="h-80 w-full object-cover absolute z-10"
                                src="{!! SectionHero::getImageUrl($slide['background__image']) !!}"
                                alt="{!! SectionHero::getImageAlt($slide['background__image']) !!}">
                            <div class="h-full w-full flex-1 flex flex-col justify-between absolute z-20 ">
                                <div class="flex bg-gradient-to-b from-black px-5 py-4">
                                    <div class="text-sm font-medium text-white hover:underline">
                                        {!! $slide['pre-title'] !!}
                                    </div>
                                </div>
                                <div></div>
                                <div class="mt-6 flex flex-col bg-gradient-to-t from-black px-5 pt-10 pb-4">
                                    <div class="text-xl font-semibold text-white">
                                        {!! $slide['title'] !!}
                                    </div>
                                    <div class="">
                                        <div class="flex space-x-1 text-sm text-gray-400 mt-2">
                                            {{-- <time datetime="2020-03-16">
                                                Mar 16, 2020
                                            </time>
                                            <span aria-hidden="true">
                                                ·
                                            </span>
                                            <span>
                                                6 min read
                                            </span> --}}
                                            {!! App::getWYSIWYG($slide['wysiwyg']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>                   
                    @endif
                    @php $slideIndex++ @endphp
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', ()=> {

            $('#slider').slick({
                dots: false,
                infinite: true,
                speed: 2500,
                adaptiveHeight: true,
                fade: true,
                arrows: false,
            });
        });        
    </script>
</section>
