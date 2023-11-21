<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
    <x-app-layout></x-app-layout>
    @include('layouts.navigation')

    <header class="h-[28vw] flex items-center justify-center text-slate-800 font-semibold">
        <div class="features pt-[78vw] md:pt-[4.5vw]">
            <div class="features-wrapper flex justify-center items-center">
                <div class="features-list grid grid-cols-3 md:flex items-center gap-y-[6vw]  gap-x-[6vw] md:gap-[5.7vw] text-[3vw] md:text-[1vw]">
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="1000">
                        <img src="assets/img/health.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="#">Lumina Health <br> Monitoring</a>
                    </div>
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="1500">
                        <img src="assets/img/coach.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="#">Lumina Health <br> Coaching</a>
                    </div>
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="2000">
                        <img src="assets/img/food.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="#">Lumina Diet <br> Catering </a>
                    </div>
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="2500">
                        <img src="assets/img/shop.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="#">Lumina Healthy <br> Shop</a>
                    </div>
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="3000">
                        <img src="assets/img/chat.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="/chats">Lumina  <br> Chat  AI </a>
                    </div>
                    <div class="features text-center items-center flex flex-col gap-[0.6vw]" data-aos="fade-up" duration="3500">
                        <img src="assets/img/more.svg " class="md:w-[5.5vw] w-[12vw] cursor-pointer" alt="">
                        <a href="#">More Lumina <br> Features </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-[60vw] md:mt-0">
        <div class="achievements mt-[18vw] md:-mt-[2.3vw]" data-aos="flip-up">
            <div class="achievements-wrapper flex justify-center items-center">
                <div class="achievements-list hidden md:flex items-center gap-[5.7vw] bg-white shadow-2xl px-[4vw] py-[2vw] rounded-xl" style="box-shadow: 0px 0px 17.9px 0px rgba(0, 0, 0, 0.25);">
                    <div class="achievements text-center items-center flex flex-col gap-[0vw] text-slate-800">
                        <h1 class="md:text-[3vw] font-bold" id="countUpNumber1">2567</h1>
                        <p class="md:text-[1vw]">Total user</p>
                    </div>
                    <div class="achievements text-center items-center flex flex-col gap-[0w] text-slate-800">
                        <h1 class="md:text-[3vw] font-bold" id="countUpNumber2">253</h1>
                        <p class="md:text-[1vw]">total professional doctor</p>
                    </div>
                    <div class="achievements text-center items-center flex flex-col gap-[0vw] text-slate-800">
                        <h1 class="md:text-[3vw] font-bold" id="countUpNumber3">124</h1>
                        <p class="md:text-[1vw]">total food supplier</p>
                    </div>
                    <div class="achievements text-center items-center flex flex-col gap-[0vw] text-slate-800">
                        <h1 class="md:text-[3vw] font-bold" id="countUpNumber4">87</h1>
                        <p class="md:text-[1vw]">total awards</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="promo md:h-[23vw] h-[38vw] bg-[#91FF7A] -mt-[3vw] md:-mt-[5.1vw] flex  items-center justify-center md:pt-[5vw] px-[6vw] md:px-[10vw] ">
            <div id="myCarousel" class="promo carousel slide" data-ride="carousel" >
                <div class="carousel-inner flex gap-[2vw]">
                    <div class="carousel-item active">
                        <figure><img src="assets/img/promo.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure> 
                    </div>
                    <div class="carousel-item">
                        <figure><img src="assets/img/promo2.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure> 
                    </div>
                    <div class="carousel-item">
                        <figure><img src="assets/img/promo3.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure>
                    </div>
                    <div class="carousel-item">
                        <figure><img src="assets/img/promo.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure>
                    </div>
                    <div class="carousel-item">
                        <figure><img src="assets/img/promo2.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure>
                    </div>
                    <div class="carousel-item">
                        <figure><img src="assets/img/promo3.png" class="rounded-xl md:w-[32vw] w-[74vw]" alt=""></figure>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="shop md:h-[45vw] h-[62vw]">
            <div class="title md:text-center items-center md:mt-0 mt-[6vw] md:ps-0 ps-[6vw]">
                <h1 class="md:text-[2.8vw] text-[5.5vw] font-bold text-black md:py-[2vw]">Lumina Healthy Shop</h1>
            </div>
            <div class="shop-wrapper flex justify-center items-center md:mt-0 mt-[8vw] px-[4vw]">
                <div class="shop-list flex items-center gap-[5vw] md:gap-[2.7vw] carousel slide" data-ride="carousel" id="myCarousel">
                    <div class="card card-compact md:w-[23vw] w-[58vw] shadow-xl text-slate-800 carousel-item active">
                        <figure ><img src="assets/img/medicine.jpg"   alt="Shoes" /></figure>
                        <div class="card-body bg-[#F4FFF2]">
                            <h1 class="card-title md:text-[2.4vw]">Obat Anti Mual Lite</h1>
                            <p class="md:text-[1.3vw]">Rp. 12,000.00</p>
                            <div class="card-actions justify-end">
                            <button class="py-[0.6vw] rounded-[0.4vw] px-[1vw] border-none text-white bg-[#57c740] w-full">Buy Now</button>
                        </div>
                        </div>
                    </div>
                    <div class="card card-compact md:w-[23vw] w-[58vw] shadow-xl text-slate-800 carousel-item">
                        <figure><img src="assets/img/medicine.jpg" alt="Shoes" /></figure>
                        <div class="card-body bg-white">
                            <h1 class="card-title md:text-[2.4vw] line-clamp-4">Tolak Angin Premium</h1>
                            <p class="md:text-[1.3vw]">Rp. 180,000.00</p>
                            <div class="card-actions justify-end">
                            <button class="py-[0.6vw] rounded-[0.4vw] px-[1vw] border-none text-white bg-[#57c740] w-full">Buy Now</button>
                        </div>
                        </div>
                    </div>
                    <div class="card card-compact md:w-[23vw] w-[58vw] shadow-xl text-slate-800 carousel-item">
                        <figure><img src="assets/img/medicine.jpg" alt="Shoes" /></figure>
                        <div class="card-body bg-white">
                            <h1 class="card-title md:text-[2.4vw]">Obat Penurun Panas</h1>
                            <p class="md:text-[1.3vw]">Rp. 18,000.00</p>
                            <div class="card-actions justify-end">
                            <button class="py-[0.6vw] rounded-[0.4vw] px-[1vw] border-none text-white bg-[#57c740] w-full">Buy Now</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script>
        function saveScrollPosition() {
            sessionStorage.setItem('scrollPosition', window.pageYOffset);
        }

        function restoreScrollPosition() {
            if(sessionStorage.getItem('scrollPosition') !== null) {
            window.scrollTo(0, sessionStorage.getItem('scrollPosition'));
            sessionStorage.removeItem('scrollPosition');
        }

        window.addEventListener('beforeunload', saveScrollPosition);
        window.addEventListener('load', restoreScrollPosition);
        }
    </script>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>