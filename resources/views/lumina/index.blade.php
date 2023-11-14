<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-white">
    <x-app-layout></x-app-layout>
    @include('layouts.navigation')

    <header class="flex flex-col justify-center items-center pt-[5.9vw]">
        <div class="hero min-h-screen" style="background-image: url(assets/img/doctor.png);">
            <div class="hero-overlay"></div>
            <div class="hero-content text-center text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-6xl font-[900] text-white underline underline-offset-8">Lumina</h1>
                    <p class="mb-5 text-white">Tempat konsultasi kesehatan secara virtual yang di support oleh ahli-ahli yang berpengalaman</p>
                    <button class="bg-[#ffffff] text-[#4E9F3D] py-3 px-5 border border-solid border-[#4E9F3D] rounded-md hover:border-white hover:text-white hover:bg-[#4E9F3D] transition-colors">Get Started</button>
                </div>
            </div>
        </div>
        <div class="statistic flex gap-16 bg-white shadow-2xl -mt-[6rem] py-16 px-24 rounded-xl">

            <div class="stat1 flex flex-col items-center text-center justify-center">
                <h1 class="text-5xl font-bold">256k+</h1>
                <p>Users</p>
            </div>
            
            <div class="stat2">
                <h1 class="text-5xl font-bold">10+</h1>
                <p>Products</p>
            </div>
            
            <div class="stat3">
                <h1 class="text-5xl font-bold">10+</h1>
                <p>Categories</p>
            </div>

            <div class="stat4">
                <h1 class="text-5xl font-bold">10+</h1>
                <p>Categories</p>
            </div>
            
            </div>
    </header>

    <main>
        <div id="about" class="mt-[5vw] text-slate-900 px-24">
            <div class="about-wrapper">
                <div class="title text-4xl font-bold">About Us</div>
                <div class="content mt-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam quidem culpa repellat ipsum soluta nam pariatur harum assumenda vel, illo adipisci quasi non recusandae amet, perspiciatis quibusdam, odio qui consequatur. Labore modi excepturi nihil nesciunt, expedita enim cupiditate ullam dolore, culpa voluptate doloremque, nemo quo error ipsam. Culpa deleniti perspiciatis sint ratione architecto nesciunt magni tenetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At commodi quis eligendi vitae porro. Soluta modi rem labore officiis aliquam, deleniti iste est facere unde voluptas debitis, quasi sit. Vel id velit molestiae magni? Aperiam quam exercitationem id quasi ex blanditiis unde maiores architecto mollitia fugit. Odio animi repudiandae harum earum similique ea officia qui nihil nostrum beatae. Fuga expedita vero quod officia, assumenda odio.</p>
                </div>
            </div>
        </div>

        <div class="contact text-slate-900 bg-[#4E9F3D]" id="contact">
            <div class="contact-wrapper px-24 h-96">
                <div class="title text-4xl font-bold">Layanan kami</div>
            </div>
        </div>

        <div class="contact text-slate-900 px-24" id="contact">
            <div class="contact-wrapper">
                <div class="title text-4xl font-bold">Contact Us</div>
            </div>
        </div>
    </main>

    <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
        <nav class="grid grid-flow-col gap-4">
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav> 
        <nav>
        <div class="grid grid-flow-col gap-4">
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
        </div>
        </nav> 
        <aside>
            <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>
</body>
</html>