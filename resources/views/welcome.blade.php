<!doctype html>
<html class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <title>Portfolio Tailwind CSS</title>
    </head>

    <body class="bg-primary overflow-x-hidden">

        <header class="sticky top-0 z-50">
            <div class="">
                <nav class="flex justify-between items-center px-10 py-3 bg-zinc-800 shadow-lg rounded-b-lg text-white">
                    <div class="branding" id="branding">
                        <a href="#home" class="text-potter font-semibold text-xl">dhnradcliffe</a>
                    </div>

                    <div class="change-color flex gap-x-1 cursor-pointer" id="btnchange">
                        <div class="w-5 h-5 border rounded-full"></div>
                        <div class="w-5 h-5 border rounded-full"></div>
                        <div class="w-5 h-5 border rounded-full"></div>
                        {{-- <button class="w-5 h-5 bg-[#d60b0b] rounded-full" type="button" id="gryffindor"></button>
                        <button class="w-5 h-5 bg-[#cf9d02] rounded-full" id="hufflepuff" type="button"></button>
                        <button class="w-5 h-5 bg-[#2563eb] rounded-full" id="ravenclaw" type="button"></button>
                        <button class="w-5 h-5 bg-[#15803d] rounded-full" id="slytherin" type="button"></button>
                        <button class="w-5 h-5 bg-[#ea580c] border-4 rounded-full" id="potter" type="button"></button> --}}
                    </div>
        
                    {{-- <ul class="flex justify-evenly w-1/2 font-semibold">
                        <li>
                            <a href="#home" class="hover:text-potter">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="hover:text-potter">Tentang Saya</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="hover:text-potter">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="hover:text-potter">Contact</a>
                        </li>
                    </ul> --}}
                </nav>
            </div>         
        </header>
        
        <main class="container mx-auto text-white mt-16">

            <section id="home" class="hero flex flex-wrap justify-around mt-10 m-1 rounded-md shadow-2xl">
                <div class="flex flex-col justify-center text-center md:text-left">
                    <p class="text-3xl md:text-4xl lg:text-5xl font-bold">Dhendi <span class="text-potter" id="radcliffe">Radcliffe</span></p>
                    <p class="text-sm md:text-lg lg:text-2xl mb-3">Fear of a name only increases fear of the thing itself</p>
                    <button class="hpotter mx-auto md:m-0 w-32 bg-potter border-2 border-transparent text-sm md:text-md lg:text-lg px-3 py-1 rounded-lg">Contact Me!</button>
                    {{-- <div class="button mt-5 group">
                        <a href="#" id="contact-me" class="bg-potter border-2 border-transparent text-sm md:text-md lg:text-lg px-3 py-2 rounded-lg group-hover:bg-transparent group-hover:text-potter group-hover:border-potter group-hover:border-2 hover:duration-500">Contact Me!</a>
                    </div> --}}
                </div>

                <div class="relative img-hero mt-10 ">
                    <img src="photos/avadhen.png" alt="" class="w-80 lg:w-full">
                    <span class="absolute bottom-0 -z-10"> 
                        <svg class="w-80 lg:w-full" height="400" width="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#C2410C" d="M49.9,-16.5C59.3,13,58.1,45.6,42.8,56.2C27.4,66.7,-2,55,-23.4,38.1C-44.8,21.2,-58.1,-1,-52.9,-24.7C-47.6,-48.3,-23.8,-73.4,-1.8,-72.8C20.2,-72.3,40.4,-46,49.9,-16.5Z" transform="translate(100 100) scale(1.1)"/>
                        </svg>
                    </span>
                </div>
            </section>

            <section class="about mt-36 flex flex-wrap rounded-md shadow-2xl" id="about">  
                <div class="about-me md:w-1/2 p-4">
                    <p class="text-potter text-lg uppercase font-semibold">Tentang Saya</p>
                    <p class="font-semibold text-2xl mt-2">Hallo! Saya Dhendi James Radcliffe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia repellendus,</p>
                    <p class="text-gray-200 mt-3">debitis est excepturi maiores eveniet autem officiis consectetur incidunt, repudiandae molestiae. Aliquam excepturi corporis porro exercitationem! Quibusdam voluptas alias facilis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, amet! Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, sint!</p>
                </div>
                <div class="sosmed md:w-1/2 p-4 mt-5">
                    <p class="header text-2xl font-bold">Mari Berteman</p>
                    <p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, libero? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sapiente?</p>
                    <div class="link-sosmed flex items-center gap-4">

                        {{-- instagram --}}
                        <a href="#" class="rounded-full border-2 p-2 border-transparent hpotter" target="_blank" target="_blank">
                            <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        {{-- twitter --}}
                        <a href="#" target="_blank" class="rounded-full border-2 p-2 border-transparent hpotter">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                        </a>

                        {{-- youtube --}}
                        <a href="#" target="_blank" class="rounded-full border-2 p-2 border-transparent hpotter">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>

                        {{-- tiktok --}}
                        <a href="#" target="_blank" class="rounded-full border-2 p-2 border-transparent hpotter">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                        </a>

                        {{-- linkin --}}
                        <a href="#" target="_blank" class="rounded-full border-2 p-2 border-transparent hpotter">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>

                        {{-- figma --}}
                        <a href="#" target="_blank" class="rounded-full border-2 p-2 border-transparent hpotter">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Figma</title><path d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z"/></svg>
                        </a>
                    </div>
                </div>
            </section>
            
            <section class="container mt-36 mb-16 pb-10 shadow-2xl rounded-md" id="portfolio">
                <div class="header text-center max-w-2xl mx-auto mb-8">
                    <p class="uppercase text-potter font-bold text-2xl">Portfolio</p>
                    <p class="mt-2 text-lg">Projek Terbaru!</p>
                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nisi perferendis quidem commodi? Repellat, facere molestiae quas voluptates nesciunt est.</p>
                </div>

                <div class="w-full flex flex-wrap justify-center gap-y-5">

                    <a href="#" target="_blank" class="rounded-xl lg:w-1/3 overflow-hidden shadow-2xl w-full mx-3 group hover:duration-1000 hover:blur-sm ">
                        <img class="w-full group-hover:scale-110 group-hover:duration-1000" src="photos/project/1.png" alt="">
                        <div class="px-5 py-3 g">
                            <p class="text-potter text-lg">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium ducimus aliquid excepturi corporis laborum reiciendis magnam dolor dolorem pariatur.</p>
                        </div>
                    </a>
 
                    <a href="#" target="_blank" class="rounded-xl lg:w-1/3 overflow-hidden shadow-2xl w-full mx-3 group hover:duration-1000 hover:blur-sm ">
                        <img class="w-full group-hover:scale-110 group-hover:duration-1000" src="photos/project/2.png" alt="">
                        <div class="px-5 py-3 g">
                            <p class="text-potter text-lg">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium ducimus aliquid excepturi corporis laborum reiciendis magnam dolor dolorem pariatur.</p>
                        </div>
                    </a>
 
                    <a href="#" target="_blank" class="rounded-xl lg:w-1/3 overflow-hidden shadow-2xl w-full mx-3 group hover:duration-1000 hover:blur-sm ">
                        <img class="w-full group-hover:scale-110 group-hover:duration-1000" src="photos/project/3.png" alt="">
                        <div class="px-5 py-3 g">
                            <p class="text-potter text-lg">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium ducimus aliquid excepturi corporis laborum reiciendis magnam dolor dolorem pariatur.</p>
                        </div>
                    </a>
 
                    <a href="#" target="_blank" class="rounded-xl lg:w-1/3 overflow-hidden shadow-2xl w-full mx-3 group hover:duration-1000 hover:blur-sm ">
                        <img class="w-full group-hover:scale-110 group-hover:duration-1000" src="photos/project/4.png" alt="">
                        <div class="px-5 py-3 g">
                            <p class="text-potter text-lg">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium ducimus aliquid excepturi corporis laborum reiciendis magnam dolor dolorem pariatur.</p>
                        </div>
                    </a>
 
                    <a href="#" target="_blank" class="rounded-xl lg:w-1/3 overflow-hidden shadow-2xl w-full mx-3 group hover:duration-1000 hover:blur-sm ">
                        <img class="w-full group-hover:scale-110 group-hover:duration-1000" src="photos/project/5.png" alt="">
                        <div class="px-5 py-3 g">
                            <p class="text-potter text-lg">Lorem ipsum dolor sit amet.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium ducimus aliquid excepturi corporis laborum reiciendis magnam dolor dolorem pariatur.</p>
                        </div>
                    </a>
 
                    
 
                </div>
            </section>

            <section id="contact" class="container mt-36 mb-16 pb-10 shadow-2xl rounded-md">
                <div class="header text-center max-w-2xl mx-auto mb-8">
                    <p class="uppercase text-potter font-bold text-2xl">Contact</p>
                    <p class="mt-2 text-lg">Hubungi Saya!</p>
                    <p class="text-gray-200">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nisi perferendis quidem commodi? Repellat, facere molestiae quas voluptates nesciunt est.</p>
                </div>

                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <form action="" class="flex flex-col gap-y-5">
                        <div class="px-3">
                            <label for="nama" class="text-potter text-bold">Nama</label>
                            <input type="text" id="nama" class="w-full p-2 bg-zinc-800 focus:bg-transparent rounded-md focus:outline-none focus:ring-grytext-potter focus:ring-2 shadow-lg"> 
                        </div>
 
                        <div class="px-3">
                            <label for="email" class="text-potter text-bold">Email</label>
                            <input type="email" id="email" class="w-full p-2 bg-zinc-800 focus:bg-transparent rounded-md focus:outline-none focus:ring-grytext-potter focus:ring-2 shadow-lg"> 
                        </div>

                        <div class="px-3">
                            <label for="pesan" class="text-potter text-bold">Pesan</label>
                            <textarea type="text" id="pesan" class="w-full p-1 bg-zinc-800 focus:bg-transparent rounded-md focus:outline-none focus:ring-grytext-potter focus:ring-2 shadow-lg"></textarea>
                        </div>

                        <div  class="px-3">
                            <button type="submit" id="kirim" class="bg-potter hpotter border-2 border-transparent text-sm lg:text-md px-2 py-1 rounded-lg hover:bg-transparent">Kirim</button>
                        </div>
 
                    </form>
                </div>
            </section>

        </main>

        <footer class="container mt-20 mb-5 pb-4 shadow-2xl rounded-md text-center">
            <p>
                <a href="#" class="text-gray-200 text-[13px]">
                    Copyright &copy; 2022 
                    <span class="text-potter">dhnradcliffe</span>
                    | All rights reserved.
                </a>
            </p>
        </footer>

    </body>
</html>