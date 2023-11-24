<div class="shop md:h-[45vw] h-[62vw] md:mt-[3vw]">
    <div class="title md:text-center items-center md:mt-0 my-[3vw] md:ps-0 ps-[6vw]">
        <h1 class="md:text-[2.8vw] text-[5.5vw] font-bold text-black md:py-[2vw]">Lumina Healthy Shop</h1>
    </div>
    <div class="shop-wrapper flex justify-center items-center md:mt-0 mt-[8vw] px-[4vw] pb-[2vw]">
        <div class="shop-list flex items-center gap-[5vw] md:gap-[2.7vw] carousel slide  md:my-0 my-[5vw] pb-0 md:pb-[6vw]" data-ride="carousel" id="myCarousel">
            @foreach ($products as $product)
            <div class="card card-compact md:w-[23vw] w-[58vw] shadow-xl text-slate-800 carousel-item" data-aos="fade-up">
                <figure><img class="product-img" src="{{ asset('storage/' . $product->photo) }}" alt="Shoes" /></figure>
                <div class="card-body bg-white">
                    <h1 class="title card-title md:text-[2.4vw]">{{ $product->name }}</h1>
                    <p class="price md:text-[1.3vw]">Rp. {{  $product->price  }}</p>
                    <div class="card-actions justify-end">
                    <button class="py-[0.6vw] rounded-[0.4vw] px-[1vw] border-none text-white bg-[#57c740] w-full">Buy Now</button>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>