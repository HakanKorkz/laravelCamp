@extends("index")
@section("tittle")
    Anasayfa
@endsection

@section("headArea")
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <style>
        :root {
            --light-gray-blue: #4a5568;
        }
        .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(0, 0, 0, 0.2);
        }

        .swiper-pagination-bullet-active {
            color: #4a5568;
            background: #e2e8f0;
        }

        .autoplay-progress {
            position: absolute;
            right: 16px;
            bottom: 16px;
            z-index: 10;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #e2e8f0;
        }

        .autoplay-progress svg {
            --progress: 0;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 10;
            width: 100%;
            height: 100%;
            stroke-width: 4px;
            stroke: var(--light-gray-blue);
            fill: none;
            stroke-dashoffset: calc(125.6 * (1 - var(--progress)));
            stroke-dasharray: 125.6;
            transform: rotate(-90deg);
        }
    </style>
@endsection

@section("content")
    <section class="flex flex-row gap-4 px-2 py-6 h-96 overflow-hidden">
        <div class="w-2/4">
            <!-- Slider main container -->
            <div class="swiper h-full md:relative">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide bg-red-600 h-full">Slide 1</div>
                    <div class="swiper-slide bg-yellow-400 h-full">Slide 2</div>
                    <div class="swiper-slide bg-red-600 h-full">Slide 3</div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination  max-md:absolute max-md:w-5 max-md:flex max-md:flex-col "></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="w-1/4 bg-gray-200"></div>
        <div class="flex flex-col gap-4 flex-auto">
            <div class="h-1/2 bg-gray-200"></div>
            <div class="h-1/2 bg-gray-200"></div>
        </div>
    </section>


@endsection
@section("footer")
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>

        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        const swiperParams = {
            direction: getDirection(),
            loop: false,
            speed: 600,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
                clickable: true,
                renderBullet: (index, className) => {
                    return `<span class="${className}">${index + 1}</span>`;
                },
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
                autoplayTimeLeft: (swiper, time, progress) => {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                },
            },
        };

        const swiper = new Swiper(".swiper", swiperParams);

        function getDirection() {
            let windowWidth = window.innerWidth;
            return windowWidth <= 768 ? 'vertical' : 'horizontal';
        }
    </script>
@endsection
