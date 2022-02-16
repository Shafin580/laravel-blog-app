@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do you want to become a Developer?
            </h1>
            <a href="/blog"
            class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                Read More
            </a>
        </div>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 mx-auto py-15 border-b border-gray-200 w-4/5">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327_960_720.jpg"
        alt="laptop"
        width="700">
    </div>
    <div class="m-auto sm:m-auto text-left block">
        <h2 class="text-4xl font-extrabold text-gray-600">
            Struggling to be a better web developer?
        </h2>

        <p class="py-8 text-gray-500 text-xl">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Odio quis officiis dolore officia nulla sapiente repellendus numquam aperiam,
            nisi aliquam sit dolores velit at obcaecati mollitia dolorum saepe soluta accusantium?
        </p>

        <p class="font-extrabold text-gray-600 text-l pb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Perspiciatis repudiandae fugit numquam, quaerat consequuntur.
        </p>

        <a href="/blog"
        class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            Find Out More
        </a>

    </div>
</div>

<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">
        I'm an Expert...
    </h2>
    <span class="font-extrabold block text-4xl py-1">
        Front-End Development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Back-End Development
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Database Design
    </span>
    <span class="font-extrabold block text-4xl py-1">
        Digital Marketing Strategy
    </span>
</div>

<div class="text-center py-15">
    <span class="uppercase text-3xl text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">
        Recent Posts
    </h2>
    <p class="m-auto w-4/5 text-gray-500">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Nobis nam minima saepe aliquam voluptatum expedita ullam,
        eum repellat tempore. Placeat tempore temporibus ducimus amet nemo expedita.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-4xl">
                PHP
            </span>

            <h3 class="text-xl font-bold py-10">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Alias pariatur eveniet amet illum minus
                consectetur exercitationem ipsam, dolores eaque impedit!
            </h3>

            <a href=""
            class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/06/24/15/45/hands-820272_960_720.jpg"
        alt="laptop"
        width="700">
    </div>
</div>

@endsection
