{{-- Template Name: Front Page Template 
    --}}

@extends('layouts.clean')

@section('content')

    <body class="font-sans antialiased text-gray-600 min-h-full flex flex-col ">
       

        <main class="flex-auto ">

            <div class="overflow-hidden bg-gray-900 text-gray-300 -mt-32 pt-32">
                <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8 pt-16 lg:pt-9 xl:pt-20 pb-16">
                    <div class="sm:mb-24 xl:mb-32 lg:flex">
                        <div
                            class="flex-none relative z-10 flex flex-col items-start lg:pt-10 max-w-screen-sm mx-auto lg:max-w-2xl lg:mx-0 lg:pr-20 mb-12 sm:mb-16 lg:mb-0">
                            <h1
                                class="order-1 text-3xl sm:text-5xl sm:leading-none font-extrabold tracking-tight text-white mb-4">
                                <span class="text-teal-400">Beautiful UI components,</span> crafted with Tailwind CSS</h1>
                            <p class="text-sm font-semibold tracking-wide uppercase mb-4">By the makers of Tailwind CSS</p>
                            <p class="order-2 leading-relaxed mb-8">Over 500+ professionally designed, fully responsive,
                                expertly crafted component examples you can drop into your Tailwind projects and customize
                                to your heart’s content. Get started by checking out our free preview components, or
                                browsing all of the examples in the categories you're most curious about.</p>
                            <dl class="order-1 flex items-center text-xs font-semibold uppercase tracking-wide mb-4">
                                <dt class="sr-only">All packages include</dt>
                                <dd class="flex items-center">
                                    <svg aria-hidden="true" viewBox="0 0 25 27" width="25" height="27" fill="none"
                                        class="flex-none mr-2">
                                        <g filter="url(#html-logo-filter)">
                                            <path d="M1 .85h22.5l-2 20.5-9.25 4-9.25-4L1 .85z" stroke="#4B5563"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                        <path d="M16.5 5.85H8v5.5h8.5v6l-4.25 2-4.25-2v-2.5" stroke="#9CA3AF"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <defs>
                                            <filter id="html-logo-filter" x=".25" y="-.899" width="24" height="27"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                                </feBlend>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                                </feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                                </feComposite>
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                                </feColorMatrix>
                                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                    HTML
                                </dd>
                                <dd class="flex items-center ml-6">
                                    <svg aria-hidden="true" viewBox="0 0 29 29" width="29" height="29" fill="none"
                                        class="flex-none mr-2">
                                        <g filter="url(#react-logo-filter-0)">
                                            <ellipse cx="14.75" cy="14.106" rx="13.25" ry="5.25" stroke="#4B5563"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                        </g>
                                        <g filter="url(#react-logo-filter-1)">
                                            <ellipse cx="14.75" cy="14.099" rx="13.25" ry="5.25"
                                                transform="rotate(-60 14.75 14.1)" stroke="#4B5563" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                        </g>
                                        <g filter="url(#react-logo-filter-2)">
                                            <ellipse cx="14.75" cy="14.1" rx="13.25" ry="5.25"
                                                transform="rotate(-120 14.75 14.1)" stroke="#4B5563" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></ellipse>
                                        </g>
                                        <circle cx="14.75" cy="14.106" r="2" fill="#1F2937" stroke="#9CA3AF"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                        <defs>
                                            <filter id="react-logo-filter-0" x=".75" y="7.106" width="28" height="13"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                                </feBlend>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                                </feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                                </feComposite>
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                                </feColorMatrix>
                                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                            <filter id="react-logo-filter-1" x="5.964" y=".575" width="17.572"
                                                height="26.047" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                                </feBlend>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                                </feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                                </feComposite>
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                                </feColorMatrix>
                                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                            <filter id="react-logo-filter-2" x="5.964" y=".576" width="17.572"
                                                height="26.047" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                                </feBlend>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                                </feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                                </feComposite>
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                                </feColorMatrix>
                                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                    React
                                </dd>
                                <dd class="flex items-center ml-6">
                                    <svg aria-hidden="true" viewBox="0 0 29 25" width="29" height="25" fill="none"
                                        class="flex-none mr-2">
                                        <g filter="url(#vue-logo-filter)">
                                            <path d="M18.25.85l-4 6.5-4-6.5H1l13.25 22.5L27.5.85h-9.25z" stroke="#4B5563"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                        <path d="M18.25.85l-4 6.5-4-6.5H6l8.25 13.5L22.5.85h-4.25z" fill="#1F2937"
                                            stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <defs>
                                            <filter id="vue-logo-filter" x=".25" y="-.899" width="28" height="25"
                                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                                <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape">
                                                </feBlend>
                                                <feColorMatrix in="SourceAlpha"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha">
                                                </feColorMatrix>
                                                <feOffset dy="-1"></feOffset>
                                                <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1">
                                                </feComposite>
                                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0">
                                                </feColorMatrix>
                                                <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                    Vue
                                </dd>
                            </dl>
                            <div class="order-2 w-full text-center grid grid-cols-1 gap-3 sm:flex sm:gap-0 sm:space-x-6">
                                <a href="/preview"
                                    class="text-sm font-semibold bg-white text-gray-900 py-3 px-4 rounded-lg hover:bg-gray-300 hover:text-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">Try
                                    it out</a>
                                <a href="#components"
                                    class="text-sm font-semibold bg-gray-800 text-gray-300 py-3 px-4 rounded-lg hover:bg-gray-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-900">Browse
                                    everything</a>
                            </div>
                        </div>
                        <div class="relative max-w-screen-sm mx-auto lg:max-w-none lg:-ml-12 lg:mr-0 xl:-ml-6">
                            <img src="/img/beams.jpg" alt=""
                                class="absolute top-[-20%] sm:top-[-40%] transform translate-x-[-34%] w-[40.312rem] sm:w-[60.5rem] max-w-none">
                            <svg aria-hidden="true" viewBox="0 0 900 589"
                                class="w-[135%] sm:w-[56.25rem] overflow-visible relative lg:absolute lg:top-0 lg:left-0 mx-auto lg:mx-0 mb-[-17%] sm:-mb-44 lg:mb-0">
                                <defs>
                                    <linearGradient id="hero-gradient" gradientTransform="rotate(90)">
                                        <stop offset="0%" stop-color="white"></stop>
                                        <stop offset="80%" stop-color="white" stop-opacity="0.2"></stop>
                                        <stop offset="100%" stop-color="black" stop-opacity="0"></stop>
                                    </linearGradient>
                                    <mask id="hero-mask">
                                        <rect x="-32" y="-32" width="964" height="653" fill="url(#hero-gradient)"></rect>
                                    </mask>
                                    <clipPath id="one">
                                        <rect width="560" height="265" rx="6"></rect>
                                        <rect width="308" height="218" x="592" rx="6"></rect>
                                        <rect width="236" height="241" x="592" y="250" rx="6"></rect>
                                        <rect width="476" height="356" x="84" y="297" rx="6"></rect>
                                    </clipPath>
                                </defs>
                                <g mask="url(#hero-mask)">
                                    <rect width="777" height="605" x="68.5" y="-15.5" rx="6"
                                        stroke="rgba(128, 135, 149, 0.2)" fill="none" vector-effect="non-scaling-stroke">
                                    </rect>
                                    <line vector-effect="non-scaling-stroke" x1="576" x2="576" y1="-15" y2="605"
                                        stroke="rgba(128, 135, 149, 0.2)"></line>
                                    <line vector-effect="non-scaling-stroke" x1="68.5" x2="576" y1="281" y2="281"
                                        stroke="rgba(128, 135, 149, 0.2)"></line>
                                    <line vector-effect="non-scaling-stroke" x1="576" x2="845.5" y1="234" y2="234"
                                        stroke="rgba(128, 135, 149, 0.2)"></line>
                                    <image width="900" height="621" clip-path="url(#one)" href="/img/hero.jpg"></image>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div
                        class="relative max-w-screen-sm mx-auto lg:mx-0 lg:max-w-none grid lg:grid-cols-3 gap-10 lg:gap-8 text-sm">
                        <div class="flex space-x-6">
                            <svg aria-hidden="true" width="44" height="44" fill="none" class="flex-none">
                                <g filter="url(#hero-feature-1-filter)">
                                    <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                        fill="#1F2937"></path>
                                </g>
                                <path
                                    d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                                    stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M29 27.335L32.25 29l-6.603 3.382a8 8 0 01-7.294 0L11.75 29 15 27.335M29 20.336L32.25 22l-6.603 3.382a8 8 0 01-7.294 0L11.75 22 15 20.336"
                                    stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M11.75 15l9.338-4.783a2 2 0 011.824 0L32.25 15l-6.603 3.382a8 8 0 01-7.294 0L11.75 15z"
                                    fill="#22D3EE" fill-opacity=".2" stroke="#22D3EE" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <defs>
                                    <filter id="hero-feature-1-filter" x="2" y="1" width="40" height="41"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                            result="hardAlpha"></feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <div>
                                <h2 class="font-semibold text-white mb-2">500+ Examples</h2>
                                <p class="leading-normal">Beautifully designed, expertly crafted components that follow all
                                    accessibility best practices and are easy to customize.</p>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <svg aria-hidden="true" width="44" height="44" fill="none" class="flex-none">
                                <g filter="url(#hero-feature-2-filter)">
                                    <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                        fill="#1F2937"></path>
                                </g>
                                <path
                                    d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                                    stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M24.25 13.75l-4.5 16.5" stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path
                                    d="M18.75 9.75h-1a4 4 0 00-4 4v4.007a3 3 0 01-.879 2.122v0a3 3 0 000 4.242v0a3 3 0 01.879 2.122v4.007a4 4 0 004 4h1M25.25 9.75h1a4 4 0 014 4v4.007a3 3 0 00.879 2.122v0a3 3 0 010 4.242v0a3 3 0 00-.879 2.122v4.007a4 4 0 01-4 4h-1"
                                    stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <defs>
                                    <filter id="hero-feature-2-filter" x="2" y="1" width="40" height="41"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                            result="hardAlpha"></feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <div>
                                <h2 class="font-semibold text-white mb-2"><a href="/documentation#using-react">React, Vue,
                                        and HTML</a></h2>
                                <p class="leading-normal">Accessible, interactive examples for React and Vue powered by <a
                                        href="https://headlessui.dev" class="text-white hover:underline">Headless UI</a>,
                                    plus vanilla HTML if you’d rather write any necessary JS yourself.</p>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <svg aria-hidden="true" width="44" height="44" fill="none" class="flex-none">
                                <g filter="url(#hero-feature-3-filter)">
                                    <path d="M2 10a8 8 0 018-8h24a8 8 0 018 8v24a8 8 0 01-8 8H10a8 8 0 01-8-8V10z"
                                        fill="#1F2937"></path>
                                </g>
                                <path
                                    d="M2.75 10A7.25 7.25 0 0110 2.75h24A7.25 7.25 0 0141.25 10v24A7.25 7.25 0 0134 41.25H10A7.25 7.25 0 012.75 34V10z"
                                    stroke="#334155" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M9.75 23.25v-1.5a4 4 0 014-4h8.5a4 4 0 014 4v8.5a4 4 0 01-4 4h-1.5"
                                    stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M29.75 34.25h.5a4 4 0 004-4v-18.5a2 2 0 00-2-2h-18.5a4 4 0 00-4 4v.5"
                                    stroke="#475569" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path d="M33.5 10.5l-23 23" stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M27.75 9.75h4.5a2 2 0 012 2v4.5M16.25 34.25h-4.5a2 2 0 01-2-2v-4.5"
                                    stroke="#22D3EE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <defs>
                                    <filter id="hero-feature-3-filter" x="2" y="1" width="40" height="41"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                        <feBlend in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                                        <feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                            result="hardAlpha"></feColorMatrix>
                                        <feOffset dy="-1"></feOffset>
                                        <feGaussianBlur stdDeviation=".5"></feGaussianBlur>
                                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"></feComposite>
                                        <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"></feColorMatrix>
                                        <feBlend in2="shape" result="effect1_innerShadow"></feBlend>
                                    </filter>
                                </defs>
                            </svg>
                            <div>
                                <h2 class="font-semibold text-white mb-2">Fully Responsive</h2>
                                <p class="leading-normal">Every example is fully responsive and carefully designed and
                                    implemented to look great at any screen size.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Jump links"
                class="sticky top-0 z-40 bg-white text-sm font-medium text-gray-900 py-5 ring-1 ring-gray-900 ring-opacity-5 shadow-sm">
                <div class="max-w-container mx-auto px-4 sm:px-6 lg:px-8 flex space-x-5 sm:space-x-10 lg:space-x-14">
                    <a href="#product-marketing">Marketing</a>
                    <a href="#product-application-ui">Application UI</a>
                    <a href="#product-ecommerce" class="flex items-center">
                        Ecommerce<span class="sr-only hidden sm:inline"> - </span><span
                            class="hidden sm:inline ml-3 text-xs font-semibold p-1.5 -my-1 bg-teal-50 text-teal-700 rounded-md">New</span>
                    </a>
                </div>
            </nav>

            <div id="components" class="max-w-container mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-24 space-y-8">

                <section aria-labelledby="product-marketing-heading" id="product-marketing" class="divide-y divide-gray-200"
                    style="scroll-margin-top:6.25rem">
                    <div class="pb-6 sm:flex sm:items-center sm:justify-between sm:flex-wrap">
                        <h2 id="product-marketing-heading" class="text-2xl font-extrabold text-gray-900">Marketing</h2>
                        <p class="w-full flex-none text-sm text-gray-500 mt-2">Landing page heroes, feature sections,
                            newsletter sign up forms — everything you need to build beautiful marketing websites.</p>
                    </div>
                    <div id="product-marketing-sections" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Page Sections</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/marketing/sections/heroes"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/heroes.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Hero Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">9 components</p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/feature-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/feature-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Feature Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">10 components</p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/cta-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/cta-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        CTA Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/pricing"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/pricing.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Pricing Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">9 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/header"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/header.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Header Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/faq-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/faq-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        FAQs
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">9 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/newsletter-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/newsletter-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Newsletter Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/stats-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/stats-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Stats
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/testimonials"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/testimonials.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Testimonials
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/blog-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/blog-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Blog Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/contact-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/contact-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Contact Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/team-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/team-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Team Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/content-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/content-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Content Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/footers"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/footers.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Footers
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/sections/logo-clouds"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/logo-clouds.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Logo Clouds
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-marketing-elements" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Elements</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/marketing/elements/headers"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/headers.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Headers
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/marketing/elements/banners"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/banners.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Banners
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                </div>
                            </a>
                            <a href="/components/marketing/elements/flyout-menus"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/flyout-menus.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Flyout Menus
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-marketing-feedback" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Feedback</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/marketing/feedback/404-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/404-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        404 Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-marketing-page-examples" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Page Examples</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/marketing/page-examples/landing-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/landing-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Landing Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/page-examples/pricing-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/pricing-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Pricing Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/marketing/page-examples/contact-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/marketing/contact-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Contact Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <section aria-labelledby="product-application-ui-heading" id="product-application-ui"
                    class="divide-y divide-gray-200" style="scroll-margin-top:6.25rem">
                    <div class="pb-6 sm:flex sm:items-center sm:justify-between sm:flex-wrap">
                        <h2 id="product-application-ui-heading" class="text-2xl font-extrabold text-gray-900">Application
                            UI</h2>
                        <p class="w-full flex-none text-sm text-gray-500 mt-2">Form layouts, tables, modal windows
                            —&nbsp;everything you need to build beautiful responsive web applications.</p>
                    </div>
                    <div id="product-application-ui-application-shells"
                        class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Application Shells</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/application-shells/stacked"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/stacked.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Stacked Layouts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">9 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/application-shells/sidebar"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/sidebar.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Sidebar Layouts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/application-shells/multi-column"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/multi-column.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Multi-Column Layouts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-headings" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Headings</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/headings/page-headings"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/page-headings.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Page Headings
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">11 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/headings/card-headings"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/card-headings.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Card Headings
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/headings/section-headings"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/section-headings.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Section Headings
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">10 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-data-display"
                        class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Data Display</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/data-display/description-lists"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/description-lists.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Description Lists
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/data-display/stats"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/stats.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Stats
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-lists" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Lists</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/lists/tables"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/tables.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Tables
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/lists/stacked-lists"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/stacked-lists.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Stacked Lists
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/lists/grid-lists"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/grid-lists.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Grid Lists
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/lists/feeds"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/feeds.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Feeds
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-forms" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Forms</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/forms/form-layouts"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/form-layouts.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Form Layouts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/input-groups"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/input-groups.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Input Groups
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">20 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/select-menus"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/select-menus.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Select Menus
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/sign-in-forms"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/sign-in-forms.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Sign-in and Registration
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/textareas"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/textareas.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Textareas
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/radio-groups"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/radio-groups.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Radio Groups
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">12 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/checkboxes"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/checkboxes.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Checkboxes
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/toggles"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/toggles.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Toggles
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/forms/action-panels"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/action-panels.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Action Panels
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-feedback" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Feedback</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/feedback/alerts"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/alerts.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Alerts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/feedback/empty-states"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/empty-states.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Empty States
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-navigation"
                        class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Navigation</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/navigation/navbars"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/navbars.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Navbars
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">11 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/pagination"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/pagination.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Pagination
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/tabs"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/tabs.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Tabs
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/vertical-navigation"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/vertical-navigation.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Vertical Navigation
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/sidebar-navigation"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/sidebar-navigation.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Sidebar Navigation
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/breadcrumbs"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/breadcrumbs.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Breadcrumbs
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/navigation/steps"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/steps.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Steps
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-overlays" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Overlays</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/overlays/modals"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/modals.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Modals
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/overlays/slide-overs"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/slide-overs.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Slide-overs
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">12 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/overlays/notifications"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/notifications.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Notifications
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-elements" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Elements</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/elements/avatars"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/avatars.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Avatars
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">11 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/elements/dropdowns"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/dropdowns.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Dropdowns
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/application-ui/elements/badges"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/badges.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Badges
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/elements/buttons"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/buttons.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Buttons
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/elements/button-groups"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/button-groups.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Button Groups
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-layout" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Layout</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/layout/containers"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/containers.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Containers
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/layout/panels"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/panels.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Panels
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">10 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/layout/list-containers"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/list-containers.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        List containers
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">7 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/layout/media-objects"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/media-objects.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Media Objects
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/layout/dividers"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/dividers.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Dividers
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-application-ui-page-examples"
                        class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Page Examples</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/application-ui/page-examples/home-screens"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/home-screens.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Home Screens
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/page-examples/detail-screens"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/detail-screens.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Detail Screens
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/application-ui/page-examples/settings-screens"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/application-ui/settings-screens.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Settings Screens
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <section aria-labelledby="product-ecommerce-heading" id="product-ecommerce"
                    class="divide-y divide-gray-200" style="scroll-margin-top:6.25rem">
                    <div class="pb-6 sm:flex sm:items-center sm:justify-between sm:flex-wrap">
                        <h2 id="product-ecommerce-heading" class="text-2xl font-extrabold text-gray-900">Ecommerce</h2>
                    </div>
                    <div id="product-ecommerce-components" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Components</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/ecommerce/components/product-overviews"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/product-overviews.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Product Overviews
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/product-lists"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/product-lists.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Product Lists
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">11 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/category-previews"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/category-previews.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Category Previews
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/shopping-carts"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/shopping-carts.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Shopping Carts
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">6 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/category-filters"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/category-filters.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Category Filters
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/product-quickviews"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/product-quickviews.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Product Quickviews
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/product-features"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/product-features.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Product Features
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">9 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/store-navigation"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/store-navigation.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Store Navigation
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/promo-sections"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/promo-sections.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Promo Sections
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/checkout-forms"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/checkout-forms.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Checkout Forms
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/reviews"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/reviews.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Reviews
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/order-summaries"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/order-summaries.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Order Summaries
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/order-history"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/order-history.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Order History
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/components/incentives"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/incentives.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Incentives
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">8 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="product-ecommerce-page-examples" class="grid grid-cols-3 xl:grid-cols-4 py-8 gap-x-8 gap-y-6">
                        <h3 class="text-gray-900 font-semibold col-span-3 xl:col-span-1">Page Examples</h3>
                        <div class="col-span-3 grid sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-y-8 lg:gap-x-8">
                            <a href="/components/ecommerce/page-examples/storefront-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/storefront-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Storefront Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">4 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/product-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/product-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Product Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/category-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/category-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Category Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/shopping-cart-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/shopping-cart-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Shopping Cart Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/checkout-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/checkout-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Checkout Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/order-detail-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/order-detail-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Order Detail Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">3 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                            <a href="/components/ecommerce/page-examples/order-history-pages"
                                class="group relative bg-white rounded-lg shadow-sm overflow-hidden ring-1 ring-black ring-opacity-5">
                                <div class="relative bg-gray-100 pt-[50%] overflow-hidden">
                                    <div class="absolute inset-0 w-full h-full rounded-t-lg overflow-hidden">
                                        <img src="/img/category-thumbnails/ecommerce/order-history-pages.png" alt=""
                                            class="absolute inset-0 w-full h-full">
                                    </div>
                                </div>
                                <div class="py-3 px-4">
                                    <p class="text-sm font-medium text-gray-900 mb-1">
                                        Order History Pages
                                    </p>
                                    <p class="text-xs font-medium text-gray-500">5 components</p>
                                    <p
                                        class="absolute z-10 top-3 right-3 text-white bg-gray-900 bg-opacity-30 rounded-full flex items-center justify-center p-1">
                                        <span class="sr-only">PNG previews only, upgrade to get the HTML.</span>
                                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                                            <path
                                                d="M5.75 11.75a1 1 0 011-1h10.5a1 1 0 011 1v5.5a2 2 0 01-2 2h-8.5a2 2 0 01-2-2v-5.5zM7.75 10.5v-.157c0-1.562-.094-3.302.996-4.42C9.368 5.288 10.374 4.75 12 4.75c1.626 0 2.632.537 3.254 1.174 1.09 1.117.996 2.857.996 4.419v.157"
                                                stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

        </main>

        <footer
            class="w-full max-w-container mx-auto border-t py-10 text-center flex items-center justify-center text-sm text-gray-500">
            <p>© 2022 Tailwind Labs Inc. All rights reserved.</p>
            <p class="ml-3 border-l border-gray-200 pl-3">
                <a class="hover:text-teal-600" href="/privacy-policy">Privacy Policy</a>
            </p>
        </footer>

        <div x-data="alpineComponents.commandPalette([{&quot;url&quot;:&quot;\/components\/application-ui\/application-shells\/stacked&quot;,&quot;name&quot;:&quot;Stacked Layouts&quot;,&quot;category&quot;:&quot;Application UI \/ Application Shells&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/application-shells\/sidebar&quot;,&quot;name&quot;:&quot;Sidebar Layouts&quot;,&quot;category&quot;:&quot;Application UI \/ Application Shells&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/application-shells\/multi-column&quot;,&quot;name&quot;:&quot;Multi-Column Layouts&quot;,&quot;category&quot;:&quot;Application UI \/ Application Shells&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/headings\/page-headings&quot;,&quot;name&quot;:&quot;Page Headings&quot;,&quot;category&quot;:&quot;Application UI \/ Headings&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/headings\/card-headings&quot;,&quot;name&quot;:&quot;Card Headings&quot;,&quot;category&quot;:&quot;Application UI \/ Headings&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/headings\/section-headings&quot;,&quot;name&quot;:&quot;Section Headings&quot;,&quot;category&quot;:&quot;Application UI \/ Headings&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/data-display\/description-lists&quot;,&quot;name&quot;:&quot;Description Lists&quot;,&quot;category&quot;:&quot;Application UI \/ Data Display&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/data-display\/stats&quot;,&quot;name&quot;:&quot;Stats&quot;,&quot;category&quot;:&quot;Application UI \/ Data Display&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/lists\/tables&quot;,&quot;name&quot;:&quot;Tables&quot;,&quot;category&quot;:&quot;Application UI \/ Lists&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/lists\/stacked-lists&quot;,&quot;name&quot;:&quot;Stacked Lists&quot;,&quot;category&quot;:&quot;Application UI \/ Lists&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/lists\/grid-lists&quot;,&quot;name&quot;:&quot;Grid Lists&quot;,&quot;category&quot;:&quot;Application UI \/ Lists&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/lists\/feeds&quot;,&quot;name&quot;:&quot;Feeds&quot;,&quot;category&quot;:&quot;Application UI \/ Lists&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/form-layouts&quot;,&quot;name&quot;:&quot;Form Layouts&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/input-groups&quot;,&quot;name&quot;:&quot;Input Groups&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/select-menus&quot;,&quot;name&quot;:&quot;Select Menus&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/textareas&quot;,&quot;name&quot;:&quot;Textareas&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/radio-groups&quot;,&quot;name&quot;:&quot;Radio Groups&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/checkboxes&quot;,&quot;name&quot;:&quot;Checkboxes&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/toggles&quot;,&quot;name&quot;:&quot;Toggles&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/sign-in-forms&quot;,&quot;name&quot;:&quot;Sign-in and Registration&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/forms\/action-panels&quot;,&quot;name&quot;:&quot;Action Panels&quot;,&quot;category&quot;:&quot;Application UI \/ Forms&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/feedback\/alerts&quot;,&quot;name&quot;:&quot;Alerts&quot;,&quot;category&quot;:&quot;Application UI \/ Feedback&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/feedback\/empty-states&quot;,&quot;name&quot;:&quot;Empty States&quot;,&quot;category&quot;:&quot;Application UI \/ Feedback&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/tabs&quot;,&quot;name&quot;:&quot;Tabs&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/navbars&quot;,&quot;name&quot;:&quot;Navbars&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/vertical-navigation&quot;,&quot;name&quot;:&quot;Vertical Navigation&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/pagination&quot;,&quot;name&quot;:&quot;Pagination&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/sidebar-navigation&quot;,&quot;name&quot;:&quot;Sidebar Navigation&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/breadcrumbs&quot;,&quot;name&quot;:&quot;Breadcrumbs&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/navigation\/steps&quot;,&quot;name&quot;:&quot;Steps&quot;,&quot;category&quot;:&quot;Application UI \/ Navigation&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/overlays\/modals&quot;,&quot;name&quot;:&quot;Modals&quot;,&quot;category&quot;:&quot;Application UI \/ Overlays&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/overlays\/slide-overs&quot;,&quot;name&quot;:&quot;Slide-overs&quot;,&quot;category&quot;:&quot;Application UI \/ Overlays&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/overlays\/notifications&quot;,&quot;name&quot;:&quot;Notifications&quot;,&quot;category&quot;:&quot;Application UI \/ Overlays&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/elements\/avatars&quot;,&quot;name&quot;:&quot;Avatars&quot;,&quot;category&quot;:&quot;Application UI \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/elements\/badges&quot;,&quot;name&quot;:&quot;Badges&quot;,&quot;category&quot;:&quot;Application UI \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/elements\/buttons&quot;,&quot;name&quot;:&quot;Buttons&quot;,&quot;category&quot;:&quot;Application UI \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/elements\/button-groups&quot;,&quot;name&quot;:&quot;Button Groups&quot;,&quot;category&quot;:&quot;Application UI \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/elements\/dropdowns&quot;,&quot;name&quot;:&quot;Dropdowns&quot;,&quot;category&quot;:&quot;Application UI \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/layout\/containers&quot;,&quot;name&quot;:&quot;Containers&quot;,&quot;category&quot;:&quot;Application UI \/ Layout&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/layout\/panels&quot;,&quot;name&quot;:&quot;Panels&quot;,&quot;category&quot;:&quot;Application UI \/ Layout&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/layout\/list-containers&quot;,&quot;name&quot;:&quot;List containers&quot;,&quot;category&quot;:&quot;Application UI \/ Layout&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/layout\/media-objects&quot;,&quot;name&quot;:&quot;Media Objects&quot;,&quot;category&quot;:&quot;Application UI \/ Layout&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/layout\/dividers&quot;,&quot;name&quot;:&quot;Dividers&quot;,&quot;category&quot;:&quot;Application UI \/ Layout&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/page-examples\/home-screens&quot;,&quot;name&quot;:&quot;Home Screens&quot;,&quot;category&quot;:&quot;Application UI \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/page-examples\/detail-screens&quot;,&quot;name&quot;:&quot;Detail Screens&quot;,&quot;category&quot;:&quot;Application UI \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/application-ui\/page-examples\/settings-screens&quot;,&quot;name&quot;:&quot;Settings Screens&quot;,&quot;category&quot;:&quot;Application UI \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/product-overviews&quot;,&quot;name&quot;:&quot;Product Overviews&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/product-lists&quot;,&quot;name&quot;:&quot;Product Lists&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/category-previews&quot;,&quot;name&quot;:&quot;Category Previews&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/shopping-carts&quot;,&quot;name&quot;:&quot;Shopping Carts&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/checkout-forms&quot;,&quot;name&quot;:&quot;Checkout Forms&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/category-filters&quot;,&quot;name&quot;:&quot;Category Filters&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/reviews&quot;,&quot;name&quot;:&quot;Reviews&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/product-quickviews&quot;,&quot;name&quot;:&quot;Product Quickviews&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/product-features&quot;,&quot;name&quot;:&quot;Product Features&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/store-navigation&quot;,&quot;name&quot;:&quot;Store Navigation&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/order-summaries&quot;,&quot;name&quot;:&quot;Order Summaries&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/order-history&quot;,&quot;name&quot;:&quot;Order History&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/promo-sections&quot;,&quot;name&quot;:&quot;Promo Sections&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/components\/incentives&quot;,&quot;name&quot;:&quot;Incentives&quot;,&quot;category&quot;:&quot;Ecommerce \/ Components&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/storefront-pages&quot;,&quot;name&quot;:&quot;Storefront Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/product-pages&quot;,&quot;name&quot;:&quot;Product Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/category-pages&quot;,&quot;name&quot;:&quot;Category Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/shopping-cart-pages&quot;,&quot;name&quot;:&quot;Shopping Cart Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/checkout-pages&quot;,&quot;name&quot;:&quot;Checkout Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/order-detail-pages&quot;,&quot;name&quot;:&quot;Order Detail Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/ecommerce\/page-examples\/order-history-pages&quot;,&quot;name&quot;:&quot;Order History Pages&quot;,&quot;category&quot;:&quot;Ecommerce \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/heroes&quot;,&quot;name&quot;:&quot;Hero Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/feature-sections&quot;,&quot;name&quot;:&quot;Feature Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/cta-sections&quot;,&quot;name&quot;:&quot;CTA Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/pricing&quot;,&quot;name&quot;:&quot;Pricing Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/header&quot;,&quot;name&quot;:&quot;Header Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/faq-sections&quot;,&quot;name&quot;:&quot;FAQs&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/newsletter-sections&quot;,&quot;name&quot;:&quot;Newsletter Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/stats-sections&quot;,&quot;name&quot;:&quot;Stats&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/testimonials&quot;,&quot;name&quot;:&quot;Testimonials&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/blog-sections&quot;,&quot;name&quot;:&quot;Blog Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/contact-sections&quot;,&quot;name&quot;:&quot;Contact Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/team-sections&quot;,&quot;name&quot;:&quot;Team Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/content-sections&quot;,&quot;name&quot;:&quot;Content Sections&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/footers&quot;,&quot;name&quot;:&quot;Footers&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/sections\/logo-clouds&quot;,&quot;name&quot;:&quot;Logo Clouds&quot;,&quot;category&quot;:&quot;Marketing \/ Page Sections&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/elements\/headers&quot;,&quot;name&quot;:&quot;Headers&quot;,&quot;category&quot;:&quot;Marketing \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/elements\/flyout-menus&quot;,&quot;name&quot;:&quot;Flyout Menus&quot;,&quot;category&quot;:&quot;Marketing \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/elements\/banners&quot;,&quot;name&quot;:&quot;Banners&quot;,&quot;category&quot;:&quot;Marketing \/ Elements&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/feedback\/404-pages&quot;,&quot;name&quot;:&quot;404 Pages&quot;,&quot;category&quot;:&quot;Marketing \/ Feedback&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/page-examples\/landing-pages&quot;,&quot;name&quot;:&quot;Landing Pages&quot;,&quot;category&quot;:&quot;Marketing \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/page-examples\/pricing-pages&quot;,&quot;name&quot;:&quot;Pricing Pages&quot;,&quot;category&quot;:&quot;Marketing \/ Page Examples&quot;},{&quot;url&quot;:&quot;\/components\/marketing\/page-examples\/contact-pages&quot;,&quot;name&quot;:&quot;Contact Pages&quot;,&quot;category&quot;:&quot;Marketing \/ Page Examples&quot;}])"
            x-init="init()" @keydown.window.escape="close()" @open-command-palette.window="open()">
            <div style="display: none;" x-show="isOpen" role="combobox" aria-haspopup="listbox" aria-expanded="true"
                class="fixed z-50 pt-16 flex items-start justify-center inset-0 sm:pt-24">
                <div x-show="isOpen" x-transition:enter="ease-out duration-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-150"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="fixed inset-0 bg-gray-800 bg-opacity-60 transition-opacity" style="display: none;"></div>
                <div x-show="isOpen" x-transition:enter="ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="relative transform transition-all max-w-lg w-full px-4" style="display: none;">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden" @click.away="close()">
                        <form role="search" @submit.prevent="go()" novalidate="" class="relative flex items-center pr-4"
                            :class="search ? 'shadow-sm' : ''">
                            <input @keydown.prevent.escape="" @keydown.prevent.arrow-up="selectUp()"
                                @keydown.prevent.arrow-down="selectDown()" x-ref="search" x-model="search" type="search"
                                aria-autocomplete="list" autocomplete="off" autocorrect="off" autocapitalize="off"
                                spellcheck="false" style="caret-color: #6b7280"
                                class="flex-auto -mr-9 appearance-none bg-transparent pl-4 pr-12 py-4 text-gray-600 text-base sm:text-sm placeholder-gray-500 focus:outline-none"
                                placeholder="Find anything..." aria-label="Search components" aria-controls="search-results"
                                :aria-activedescendant="'search-result-' + selected"
                                aria-activedescendant="search-result-0">
                            <svg width="20" height="20" fill="none" class="flex-none text-gray-400 pointer-events-none">
                                <circle cx="8.5" cy="8.5" r="5.75" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></circle>
                                <path d="M17.25 17.25L13 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </form>
                        <ul role="listbox" id="search-results" x-show="results.length > 0" x-ref="results"
                            class="text-sm font-medium overflow-y-auto border-t border-gray-200 divide-y divide-gray-200 rounded-b-lg max-h-[18.375rem]"
                            style="display: none;">
                            <template hidden="" x-for="({ name, url, category }, i) in results" :key="url">
                                <li role="option" :id="'search-result-' + i" :aria-selected="(selected === i).toString()">
                                    <a :href="url" tabindex="-1" class="flex justify-between p-4"
                                        :class="{ 'bg-gray-50': selected === i }" @mouseenter="selected = i">
                                        <span x-text="name" class="whitespace-nowrap"
                                            :class="{'text-gray-900': selected !== i, 'text-teal-600': selected === i }"></span>
                                        <span x-text="category" class="ml-4 text-right text-gray-500"></span>
                                    </a>
                                </li>
                            </template>
                        </ul>
                        <div x-show="search &amp;&amp; results.length === 0" class="bg-gray-50 p-16 text-center"
                            style="display: none;">
                            <h2 class="text-gray-900 font-semibold mb-2">No results found</h2>
                            <p class="text-sm">We can’t find anything with that term at the moment, try searching
                                something else.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.usefathom.com/script.js" site="SOXJJCZQ" defer=""></script>
        <script src="https://tailwindui.com/js/app.js?id=69745a124d8e71a0ccf1"></script>
        <script src="https://tailwindui.com/js/alpine.js?id=aec657470ad97cbba5c2"></script>
        <script>
            ;
            (function() {
                try {
                    if (window.localStorage) {
                        const utmSource = new URLSearchParams(window.location.search).get('utm_source')
                        const utmMedium = new URLSearchParams(window.location.search).get('utm_medium')

                        window.localStorage.setItem('utm', JSON.stringify({
                            source: utmSource,
                            medium: utmMedium
                        }))
                    }
                } catch (e) {}
            })()
        </script>


    </body>

@endsection
