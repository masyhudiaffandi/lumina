<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="bg-white">
    <x-app-layout></x-app-layout>
    @include('layouts.navigation')

    @include('layouts.header')

    <main class="mt-[60vw] md:mt-0">
        @include('layouts.achievements')
        @include('layouts.promo')
        @include('layouts.shop')
        @include('layouts.article')
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