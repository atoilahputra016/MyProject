<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>MyPortfolio</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Header Start -->
        <header class="transparent absolute top-0 left-0 w-full flex items-center z-10">
          <div class="container">
            <div class="flex items-center justify-betwen relative">
              <div class="px-4">
                <a href="#Home" class="font-bold text-lg text-gelap block py-5">Atoilah</a>
              </div>
              <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                  <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                  <span class="hamburger-line transition duration-300 ease-in-out"></span>
                  <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
      
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] top-full right-4 lg:block lg:rounded-none  lg:bg-transparent lg:shadow-none lg:max-w-full lg:static">
                  <ul class="block lg:flex">
                    <li class="group">
                      <a href="#Home" class=" text-base text-semi py-2 mx-8 flex group-hover:text-terang">Beranda</a>
                    </li>
                    <li class="group">
                      <a href="#About" class=" text-base text-semi py-2 mx-8 flex group-hover:text-terang">About</a>
                    </li>
                    <li class="group">
                      <a href="#Portfolio" class=" text-base text-semi py-2 mx-8 flex group-hover:text-terang">Portfolio</a>
                    </li>
                    <li class="group">
                      <a href="#Blog" class=" text-base text-semi py-2 mx-8 flex group-hover:text-terang">Blog</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </header>
        <!-- Header End -->
      
        <!-- Hero Section Start -->
        <section id="Home" class="pt-36">
            <div class="container">
              <div class="lg:flex flex-warp">
                <div class="w-full self-center px-4 lg:w-1/2">
                  <h1 class="text-base font-semibold text-sedang md:text-xl">Halo Semua, Saya 
                    <span class="block font-bold text-gelap text-4xl mt-1">Ato'Illah Putra</span>  </h1>
                  <h2 class="font-medium  text-sedang txt-lg mb-5 lg:text-2xl">Pelajar | 
                    <span class="text-bold text-gelap ">Progammer Pemula</span>
                  </h2>
                  <p class="font-medium text-semi mb-10 leading-relaxed">
                    Web Dokumentasi Project Dan Perkembangan Menjadi Progammer.
                  </p>
        
                  <a href="#About" class="transition ease-in-out delay-150 
                  hover:-translate-y-1 hover:scale-110  duration-300
                  text-base font-semibold text-white bg-semi py-3 px-8 
                  rounded-lg hover:shadow-lg hover:bg-sedang
                  ">
                    Hubungi Saya
                  </a>
                </div>
                <div class="w-ull self-end px-4 lg:w-1/2">
                  <div class="relative mt-10 lg:mt-9 lg:right-0">
                      <img src="/resources/image/image-removebg(1).png " alt="Atoilah" 
                      class="max-w-full mx-auto">
                      <span class="absolute -bottom-5 -z-10 left-1/2 -translate-x-1/2">
                          <svg width="500" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                              <path fill="#4C0070" d="M25.4,-37.9C32.9,-24,38.8,-16,45,-4.4C51.1,7.1,57.6,22.1,54.8,36.1C52,50.1,39.9,63.2,23.9,71.7C7.8,80.2,-12.1,84.2,-30.7,79.5C-49.2,74.8,-66.4,61.5,-74.1,44.6C-81.9,27.6,-80.1,6.9,-74.1,-10.5C-68,-27.9,-57.5,-42,-44.4,-54.9C-31.4,-67.8,-15.7,-79.5,-3.3,-75.5C9,-71.5,18,-51.8,25.4,-37.9Z" transform="translate(100 100)" scale(1.1)/>
                            </svg>
                      </span>
                  </div>
              </div>
        
                
              </div>
            </div>
        </section>
        <!-- Hero Section end -->
      
        <!-- About Section Start -->
        <section id="About" class="pt-36 pb-36">
          <div class="container">
              <div class="lg:flex flex-wrap">
                  <div class="w-full px-4 mb-10 lg:w-1/2">
                      <h4 class="font-bold text-sedang text-lg mb-5">TENTANG SAYA</h4>
                      <h2 class="font-bold text-gelap text-3xl mb-5 max-w-md lg:text-4xl">Programmer Pemula</h2>
                      <p class="font-medium text-base text-terang max-w-xl lg:text-lg">Saya Memulai Menjadi Progammer Pada Saat Saya Masuk SMK 2020</p>
                  </div>
                  <div class="w-full px-4 lg:w-1/2">
                      <h3 class="font-semibold text-gelap text-2xl mb-5 lg:text-3xl lg:pt-10 ">Sosial Media</h3>
                      <p class="font-medium text-base text-terang mb-6 lg:text-lg">Silahkan Mampir Ke Beberapa Sosial Media saya.</p>
      
                      <div class="flex items-center">
                        <!-- instagram start -->
                        <a href="https://instagram.com/atoilahputra03" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi hover:border-sedang hover:bg-sedang hover:text-white text-semi">
                          <svg  width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <!-- instagram end -->
      
                        <!-- Whatsapp start -->
                        <a href="https://wa.me/+6289612709470" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi hover:border-sedang hover:bg-sedang hover:text-white text-semi">
                          <svg role="img"  width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>                  
                        </a>
                        <!-- Whatsapp end -->
      
                        <!-- facebook start -->
                        <a href="https://www.facebook.com/atoilahputra.atoilahputra" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi hover:border-sedang hover:bg-sedang hover:text-white text-semi">
                          <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                 
                        </a>
                        <!-- facebook end -->
      
                        <!-- Telegram Start-->
                        <a href="https://t.me/Menggokillll " target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi hover:border-sedang hover:bg-sedang hover:text-white text-semi">
                          <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Telegram</title><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>               
                        </a>
                        <!-- Telegram End-->
      
                      </div>
                  </div>
              </div>
          </div>
        </section>
        <!-- About Section end -->
      
        <!-- Portfolio Section Start -->
        <section id="Portfolio" class="pt-36 pb-32 bg-slate-100">
          <div class="container">
            <div class="w-full px-4">
              <div class="max-w-xl mx-auto text-center mb-16 ">
                <h4 class="font-semibold text-lg text-sedang mb-2 ">Portfolio</h4>
                <h2 class="font-bold text-gelap text-3xl mb-4 lg:text-5xl">Project</h2>
                <p class=" font-medium text-md text-terang md:text-lg">Ini Merupakan Beberapa Dokumentasi Saya Setelah Mengerjakan Tugas Sekolah</p>
              </div>
            </div>
      
      
            <div class="w-full px-4 flex flex-wrap justify-centerlg:10/12 lg:mx-auto">
              <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                  <img src="/resources/image/portfolio/tester.png" alt="" width="w-full">
                  <h1 class="font-semibold text-xl text-gelap mt-5 mb-3 px-4">Cooming Soon</h1>
                  <p class="font-medium text-base text-terang px-3">
                    Website Segera DiUpdate
                  </p>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        <!-- Portfolio Section End -->
      
        <!-- Blog Section Start -->
        <section id="Blog" class="pt-36 pb-32 bg-slate-100">
            <div class="container">
              <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16 ">
                  <h4 class="font-semibold text-lg text-sedang mb-2 ">Blog</h4>
                  <h2 class="font-bold text-gelap text-3xl mb-4 lg:text-5xl">Kunjungi Blog Saya</h2>
                  <p class=" font-medium text-md text-terang md:text-lg">Beberapa Blog Tentang Programming Dari Saya</p>
                </div>
        
                <div class="flex flex-warp lg:mx-auto w-full px-4 flex-wrap justify-center">
                  <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 ">
                      <img src="src/image/portfolio/tester.png" alt="" class="w-full">
        
                      <div class="py-8 px-6">
                        <h3>
                          <a href="#" class="block mb-3 font-semibold text-xl text-gelap hover:text-sedang truncate">Coming Soon</a>
                          <p class="font-medium text-base text-terang mb-6">
                            Web Segera DiUpdate
                          </p>
                          <a href="#" class="font-medium text-sm text-white bg-sedang py-2 px-4 rounded-lg hover:bg-semi">Baca Selengkapnya</a>
                        </h3>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
        
            </div>
          </section>
        <!-- Blog Section End -->
      
        <!-- Footer Start -->
        <footer class="bg-gelap pt-24 pb-12">
          <div class="container">
            <div class="flex flex-warp">
              <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                <h2 class="font-bold text-4xl text-white mb-5">Atoilah</h2>
                <h3 class="font-bold text-2xl mb-3">Hubungi Saya</h3>
                <p>atoilahputra016@gmail.com</p>
                <p>Desa Kemantrenrejo Rejoso Pasuruan</p>
              </div>
            </div>
      
            <div class="w-full pt-10 border-t border-slate-700">
              <div class="flex items-center justify-center mb-5">
                <!-- instagram start -->
                <a href="https://instagram.com/atoilahputra03" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-terang hover:border-sedang hover:bg-sedang hover:text-white text-terang">
                  <svg  width="20" class="fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                </a>
                <!-- instagram end -->
      
                <!-- Whatsapp start -->
                <a href="https://wa.me/+6289612709470" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-terang hover:border-sedang hover:bg-sedang hover:text-white text-terang">
                  <svg role="img"  width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>                  
                </a>
                <!-- Whatsapp end -->
      
                <!-- facebook start -->
                <a href="https://www.facebook.com/atoilahputra.atoilahputra" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-terang hover:border-sedang hover:bg-sedang hover:text-white text-terang">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>                 
                </a>
                <!-- facebook end -->
      
                <!-- Telegram Start-->
                <a href="https://t.me/Menggokillll " target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-terang hover:border-sedang hover:bg-sedang hover:text-white text-terang">
                  <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Telegram</title><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>               
                </a>
                <!-- Telegram End-->
      
              </div>
              <p class="font-medium text-xs text-slate-500 text-center"> Dibuat Oleh
                <a href="https://instagram.com/atoilahputra03" target="_blank" class="font-bold text-semi">
                  Atoilah
                </a>
                Menggunakan
                <a href="https://tailwindcss.com" target="_blank" class="font-bold text-sky-500">
                  Tailwind CSS
                </a>
              </p>
            </div>
          </div>
        </footer>
        <!-- Footer End -->
      
        <script src="/resources/js/script.js">
      
        </script>
      
      
      </body>
</html>
