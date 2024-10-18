<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans min-h-screen  bg-gradient-to-br from-gray-900 via-black to-gray-800  ">
        <section class="w-full px-3 antialiased lg:px-6">
            <div class="mx-auto max-w-7xl">
                <nav class="flex items-center w-full h-24 select-none" x-data="{ showMenu: false }">
                    <div class="relative flex flex-wrap items-start justify-between w-full mx-auto font-medium md:items-center md:h-24 md:justify-between">
                        <a href="#_" class="flex items-center w-1/4 py-4 pl-6 pr-4 space-x-2 font-extrabold text-white md:py-0">
                            <span class="flex items-center justify-center flex-shrink-0 w-8 h-8 text-gray-900 rounded-full bg-gradient-to-br from-white via-gray-200 to-white">
                                <svg class="w-auto h-5 -translate-y-px" viewBox="0 0 69 66" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m31.2 12.2-3.9 12.3-13.4.5-13.4.5 10.7 7.7L21.8 41l-3.9 12.1c-2.2 6.7-3.8 12.4-3.6 12.5.2.2 5-3 10.6-7.1 5.7-4.1 10.9-7.2 11.5-6.8.6.4 5.3 3.8 10.5 7.5 5.2 3.8 9.6 6.6 9.8 6.4.2-.2-1.4-5.8-3.6-12.5l-3.9-12.2 8.5-6.2c14.7-10.6 14.8-9.6-.4-9.7H44.2L40 12.5C37.7 5.6 35.7 0 35.5 0c-.3 0-2.2 5.5-4.3 12.2Z" fill="currentColor"/></svg>
                            </span>
                            <span>LOGO</span>
                        </a>
                        <div :class="{'flex': showMenu, 'hidden md:flex': !showMenu }" class="absolute z-50 flex-col items-center justify-center w-full h-auto px-2 text-center text-gray-400 -translate-x-1/2 border-0 border-gray-700 rounded-full md:border md:w-auto md:h-10 left-1/2 md:flex-row md:items-center">
                            <a href="#" class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center text-white md:py-2 group md:w-auto md:px-2 lg:mx-3 md:text-center">
                                <span>Home</span>
                                <span class="absolute bottom-0 left-0 w-full h-px duration-300 ease-out translate-y-px bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                            </a>
                            <a href="#" class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                                <span>Features</span>
                                <span class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                            </a>
                            <a href="#" class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                                <span>Features</span>
                                <span class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                            </a>
                            <a href="#" class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                                <span>Blog</span>
                                <span class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                            </a>
                            <a href="#" class="relative inline-block w-full h-full px-4 py-5 mx-2 font-medium leading-tight text-center duration-300 ease-out md:py-2 group hover:text-white md:w-auto md:px-2 lg:mx-3 md:text-center">
                                <span>Contact</span>
                                <span class="absolute bottom-0 w-0 h-px duration-300 ease-out translate-y-px group-hover:left-0 left-1/2 group-hover:w-full bg-gradient-to-r md:from-gray-700 md:via-gray-400 md:to-gray-700 from-gray-900 via-gray-600 to-gray-900"></span>
                            </a>
                        </div>
                        <div class="fixed top-0 left-0 z-40 items-center hidden w-full h-full p-3 text-sm bg-gray-900 bg-opacity-50 md:w-auto md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex': showMenu, 'hidden': !showMenu }">
                            <div class="flex-col items-center w-full h-full p-3 overflow-hidden bg-black bg-opacity-50 rounded-lg select-none md:p-0 backdrop-blur-lg md:h-auto md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                                <div class="flex flex-col items-center justify-end w-full h-full pt-2 md:w-full md:flex-row md:py-0">
                                    <a href="#_" class="w-full py-5 mr-0 text-center text-gray-200 md:py-3 md:w-auto hover:text-white md:pl-0 md:mr-3 lg:mr-5">Sign In</a>
                                    <a href="#_" class="inline-flex items-center justify-center w-full px-4 py-3 md:py-1.5 font-medium leading-6 text-center whitespace-no-wrap transition duration-150 ease-in-out border border-transparent md:mr-1 text-gray-600 md:w-auto bg-white rounded-lg md:rounded-full hover:bg-white focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700">Sign Up</a>
                                </div>
                            </div>
                        </div>
                        <div @click="showMenu = !showMenu" class="absolute right-0 z-50 flex flex-col items-end translate-y-1.5 w-10 h-10 p-2 mr-4 rounded-full cursor-pointer md:hidden hover:bg-gray-200/10 hover:bg-opacity-10" :class="{ 'text-gray-400': showMenu, 'text-gray-100': !showMenu }">
                            <svg class="w-6 h-6" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="w-6 h-6" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                    </div>
                </nav>
                <div class="container px-6 py-32 mx-auto text-center md:px-4">
                    <h1 x-data="{
                        startingAnimation: { opacity: 0 },
                        endingAnimation: { opacity: 1, stagger: 0.03, duration: 1.7, ease: 'power4.easeOut' },
                        addCNDScript: true,
                        splitCharactersIntoSpans(element) {
                        text = element.innerHTML;
                        modifiedHTML = [];
                        for (var i = 0; i < text.length; i++) {
                        attributes = '';
                        if(text[i].trim()){ attributes = 'class=\'inline-block\''; }
                        modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                        }
                        element.innerHTML = modifiedHTML.join('');
                        },
                        addScriptToHead(url) {
                        script = document.createElement('script');
                        script.src = url;
                        document.head.appendChild(script);
                        },
                        animateText() {
                        $el.classList.remove('invisible');
                        gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
                        }
                        }"
                        x-init="
                        splitCharactersIntoSpans($el);
                        if(addCNDScript){
                        addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
                        }
                        gsapInterval3 = setInterval(function(){
                        if(typeof gsap !== 'undefined'){
                        animateText();
                        clearInterval(gsapInterval3);
                        }
                        }, 5);
                        "
                        class="invisible block pb-0.5 overflow-hidden custom-font text-4xl font-extrabold  leading-10 tracking-tight text-white sm:text-5xl md:text-6xl xl:text-7xl"
                        >
                        El Starter Kit Definitivo
                        </h1>



                </div>

            </div>
        </section>


    </body>
</html>
