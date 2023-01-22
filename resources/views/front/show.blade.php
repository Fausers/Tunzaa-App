<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Front Page
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Front Page Information
                            <a href="{{url('/')}}/front/edit" class="inline-flex justify-center py-2 px-4
                                            border border-transparent shadow-sm text-sm font-medium
                                            rounded-md
                                            text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Edit Details
                            </a>
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">

                        </p>
                    </div>
                    <div class="border-t border-gray-200">
                        <dl>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    App Title
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->app_title}}
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    App Description
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->app_desc}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    App Image
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <div class="md:flex-shrink-0">
                                        <img class="h-48 h-full w-full object-cover md:w-48" src="{{url('/')}}/{{$front->app_image}}" alt="Man looking at item at a store">
                                    </div>
                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    App Button
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->app_button}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    App Button Url
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->app_button_url}}
                                </dd>
                            </div>
                            <hr>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="py-12 bg-white">
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                                    <div class="lg:text-center">
                                        <h2 class="text-base text-indigo-600 font-semibold tracking-wide
                                        uppercase">Services</h2>
                                    </div>

                                    <div class="mt-10">
                                        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8
                                        md:gap-y-10">
                                            <div class="relative">
                                                <dt>
                                                    <div class="absolute flex items-center justify-center h-12 w-12
                                                     rounded-md bg-indigo-500 text-white">
                                                        <!-- Heroicon name: outline/globe-alt -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                             fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                             aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0
                                                                   00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03
                                                                    3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-16 text-lg leading-6 font-medium
                                                     text-gray-900">{{$front->service1_title}}</p>
                                                </dt>
                                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                                    {{$front->service1_desc}}
                                                </dd>
                                            </div>

                                            <div class="relative">
                                                <dt>
                                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                        <!-- Heroicon name: outline/scale -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{$front->service2_title}}</p>
                                                </dt>
                                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                                    {{$front->service2_desc}}
                                                </dd>
                                            </div>

                                            <div class="relative">
                                                <dt>
                                                    <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                        <!-- Heroicon name: outline/lightning-bolt -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{$front->service3_title}}</p>
                                                </dt>
                                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                                    {{$front->service3_desc}}
                                                </dd>
                                            </div>

                                            <div class="relative">
                                                <dt>
                                                    <div class="absolute flex items-center justify-center
                                                    h-12 w-12 rounded-md bg-indigo-500 text-white">
                                                        <!-- Heroicon name: outline/annotation -->
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                        </svg>
                                                    </div>
                                                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">{{$front->service4_title}}</p>
                                                </dt>
                                                <dd class="mt-2 ml-16 text-base text-gray-500">
                                                    {{$front->service4_desc}}
                                                </dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Bills Text
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->bills_text}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Bills Image
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <div class="md:flex-shrink-0">
                                        <img class="h-48 h-full w-full object-cover md:w-48"
                                             src="{{url('/')}}/{{$front->bills_image}}" alt="Man
                                             looking at item at a store">
                                    </div>

                                </dd>
                            </div>
                            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tariff Text
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$front->tariffs_text}}
                                </dd>
                            </div>
                            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tariffs Image
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    <div class="md:flex-shrink-0">
                                        <img class="h-48 h-full w-full object-cover md:w-48"
                                             src="{{url('/')}}/{{$front->tariffs_image}}" alt="Man
                                             looking at item at a store">
                                    </div>
                                </dd>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <a href="{{url('/')}}/front/edit" class="inline-flex justify-center py-2 px-4
                                            border border-transparent shadow-sm text-sm font-medium
                                            rounded-md
                                            text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Edit Details
                                </a>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
