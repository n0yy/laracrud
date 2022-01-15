@extends('layouts.app')

@section('content')
{{-- jumbotron --}}
<div class="p-10 text-center">
    <h1 class="font-semibold text-3xl lg:text-4xl text-gray-300 first-letter:text-5xl lg:first-letter:text-8xl first-letter:text-sky-400">Lorem ipsum dolor sit amet.</h1>
    <p class="text-lg lg:text-2xl text-gray-400 px-10 lg:px-48 mt-3 lg:mt-5 mb-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis cumque <span class="underline decoration-sky-400">ipsa rerum</span> minus <span class="underline decoration-green-400">ullam error</span> sequi commodi vero <span class="underline decoration-sky-400">recusandae dolor</span>.</p>
    <a href="#" class="px-4 lg:px-8 py-2 lg:py-3 bg-gradient-to-br from-sky-400 to-green-400 rounded shadow-md hover:shadow-green-400/30 text-sm lg:text-md transtion-all duration-200 text-white font-bold uppercase">Get Started</a>
</div>
<section id="posts" class="bg-gray-700 mt-64">
    <div class="px-10 py-5 text-gray-200">
        <h2 class="text-center text-2xl underline decoration-sky-400">Category</h2>
        <div class="flex justify-center gap-3 lg:gap-5 mt-5">
            @foreach ($categories as $category)
                <a class="px-3 py-1 bg-green-300 text-green-700 rounded hover:bg-green-700 hover:text-green-400 transition duration-300" href="/posts/{{ Str::slug($category->name) }}">{{ $category->name }}</a>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5" id="posts">
        @foreach ($posts as $post)
        <div class="mt-10">
            <div class="flex items-center">
                <a href="">
                    <svg width="2rem" height="2rem" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4239 0.140426C15.8595 0.025532 16.6361 0 22.8404 0C29.0447 0 29.8212 0.0276597 32.2548 0.140426C34.6883 0.253193 36.3494 0.651067 37.8029 1.22766C39.3249 1.81703 40.7057 2.73831 41.8478 3.9298C43.0105 5.09789 43.9075 6.51067 44.4806 8.07238C45.0454 9.56174 45.4316 11.2639 45.5437 13.7533C45.6559 16.2533 45.6808 17.049 45.6808 23.4044C45.6808 29.7618 45.6538 30.5576 45.5437 33.0533C45.4337 35.5427 45.0454 37.2448 44.4806 38.7342C43.9075 40.2961 43.009 41.7112 41.8478 42.881C40.7057 44.0725 39.3249 44.9917 37.8029 45.5789C36.3494 46.1576 34.6883 46.5534 32.2589 46.6683C29.8212 46.7832 29.0447 46.8087 22.8404 46.8087C16.6361 46.8087 15.8595 46.7811 13.4239 46.6683C10.9945 46.5555 9.33342 46.1576 7.87994 45.5789C6.35569 44.9916 4.97468 44.0709 3.83303 42.881C2.67104 41.7122 1.77182 40.2978 1.19808 38.7363C0.635378 37.247 0.249168 35.5448 0.137042 33.0555C0.0249168 30.5555 0 29.7597 0 23.4044C0 17.0469 0.0269932 16.2511 0.137042 13.7575C0.247091 11.2639 0.635378 9.56174 1.19808 8.07238C1.77267 6.51084 2.67257 5.09643 3.83511 3.92768C4.97514 2.73725 6.35476 1.81585 7.87786 1.22766C9.33134 0.651067 10.9925 0.25532 13.4218 0.140426H13.4239ZM32.07 4.35321C29.6614 4.24044 28.9388 4.21704 22.8404 4.21704C16.742 4.21704 16.0194 4.24044 13.6108 4.35321C11.3828 4.45747 10.1744 4.83832 9.36871 5.1596C8.30352 5.58513 7.54148 6.08939 6.74207 6.90854C5.98428 7.66397 5.40109 8.58362 5.03527 9.60004C4.72173 10.4256 4.35006 11.6639 4.24831 13.9469C4.13826 16.415 4.11542 17.1554 4.11542 23.4044C4.11542 29.6533 4.13826 30.3937 4.24831 32.8618C4.35006 35.1448 4.72173 36.3831 5.03527 37.2087C5.40071 38.2236 5.98418 39.1449 6.74207 39.9002C7.47919 40.6768 8.37827 41.2747 9.36871 41.6491C10.1744 41.9704 11.3828 42.3512 13.6108 42.4555C16.0194 42.5683 16.7399 42.5917 22.8404 42.5917C28.9409 42.5917 29.6614 42.5683 32.07 42.4555C34.298 42.3512 35.5064 41.9704 36.3121 41.6491C37.3773 41.2236 38.1393 40.7193 38.9387 39.9002C39.6966 39.1449 40.2801 38.2236 40.6455 37.2087C40.9591 36.3831 41.3307 35.1448 41.4325 32.8618C41.5425 30.3937 41.5654 29.6533 41.5654 23.4044C41.5654 17.1554 41.5425 16.415 41.4325 13.9469C41.3307 11.6639 40.9591 10.4256 40.6455 9.60004C40.2302 8.50855 39.7381 7.72769 38.9387 6.90854C38.2014 6.13209 37.304 5.53451 36.3121 5.1596C35.5064 4.83832 34.298 4.45747 32.07 4.35321ZM19.9231 30.6193C21.5523 31.3142 23.3665 31.408 25.0558 30.8846C26.745 30.3613 28.2045 29.2531 29.1851 27.7496C30.1656 26.246 30.6062 24.4403 30.4318 22.6407C30.2574 20.8412 29.4787 19.1596 28.2286 17.8831C27.4318 17.067 26.4683 16.4422 25.4075 16.0536C24.3467 15.6649 23.215 15.5221 22.0939 15.6354C20.9728 15.7487 19.8901 16.1153 18.9239 16.7089C17.9576 17.3024 17.1318 18.108 16.5059 19.0679C15.88 20.0277 15.4696 21.1177 15.3041 22.2596C15.1387 23.4014 15.2224 24.5667 15.5492 25.6714C15.876 26.7762 16.4378 27.7929 17.1941 28.6485C17.9504 29.504 18.8824 30.1771 19.9231 30.6193ZM14.5389 14.8979C15.6291 13.7809 16.9233 12.8947 18.3477 12.2902C19.772 11.6856 21.2987 11.3745 22.8404 11.3745C24.3821 11.3745 25.9087 11.6856 27.3331 12.2902C28.7575 12.8947 30.0517 13.7809 31.1418 14.8979C32.232 16.015 33.0968 17.3412 33.6868 18.8007C34.2767 20.2603 34.5804 21.8246 34.5804 23.4044C34.5804 24.9841 34.2767 26.5485 33.6868 28.008C33.0968 29.4675 32.232 30.7937 31.1418 31.9108C28.9402 34.1668 25.954 35.4343 22.8404 35.4343C19.7267 35.4343 16.7406 34.1668 14.5389 31.9108C12.3373 29.6547 11.1004 26.5949 11.1004 23.4044C11.1004 20.2138 12.3373 17.154 14.5389 14.8979ZM37.1842 13.166C37.4543 12.9049 37.6706 12.5909 37.8202 12.2426C37.9698 11.8942 38.0496 11.5187 38.055 11.1382C38.0605 10.7577 37.9913 10.3799 37.8517 10.0273C37.7121 9.67466 37.5048 9.35432 37.2422 9.08523C36.9796 8.81614 36.667 8.60378 36.3228 8.46071C35.9787 8.31765 35.6101 8.24679 35.2387 8.25234C34.8674 8.25789 34.5009 8.33973 34.161 8.49301C33.8211 8.64629 33.5146 8.8679 33.2598 9.14472C32.7641 9.68308 32.4928 10.3982 32.5033 11.1382C32.5139 11.8782 32.8054 12.5849 33.3162 13.1082C33.8269 13.6316 34.5165 13.9303 35.2387 13.9411C35.9609 13.9519 36.6588 13.6739 37.1842 13.166Z" fill="#F8F8F8"/>
                        </svg>
                        
                </a>
                <div class="ml-2">
                    <p class="text-xs text-gray-400">Follow @01danng</p>
                    <a href="author/{{ $post->author->username }}" class="text-sm underline decoration-sky-400">{{ $post->author->name }}</a>
                </div>
            </div>
            <div class="mt-2">
                <h3 class="text-xl mb-1">{{ $post->title }}.</h3>
                <p class="text-gray-300 text-sm">{{  Str::limit(strip_tags($post->body), 200)  }}</p>
            </div>
            <div class="mt-3 flex items-center justify-between">
                <a href="/post/{{ $post->slug }}" class="underline decoration-green-400 font-semibold text-green-400 hover:text-green-700 hover:decoration-green-700 transition duration-300">Read more...</a>
                <p class="text-sm font-light">{{ $post->created_at->diffForHumans() }}</p>
            </div>
        </div>
        @endforeach    
        </div>
        
        <div class="mb-10 mt-20">
            {{ $posts->links() }}
        </div>
    </div>
    

</section>

<x-footer/>
@endsection