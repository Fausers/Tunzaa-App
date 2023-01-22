<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sliders
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Code Here -->
                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                                        Front Page Details
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Edit front page Details
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{url('/')}}/front/update" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">App Title</label>
                                                    <input value="{{$front->app_title}}" type="text" name="app_title" id="title"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">App Button</label>
                                                    <input value="{{$front->app_button}}" type="text" name="app_button" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">App Button</label>
                                                    <input value="{{$front->app_button_url}}" type="text" name="app_button_url" id="app_button_url"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6">
                                                    <label for="desc"
                                                           class="block text-sm font-medium
                                                            text-gray-700">Description</label>
                                                    <div class="grid grid-rows-3">

                                                    </div>
                                                    <textarea rows="6" name="app_desc"
                                                           id="app_desc"   class="mt-1 focus:ring-indigo-500
                                                           focus:border-indigo-500 block w-full shadow-sm
                                                           sm:text-sm border-gray-300
                                                           rounded-md">{{$front->app_desc}}</textarea>

                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                    <div class="max-w-md mx-auto bg-white rounded-xl
                                                    shadow-md overflow-hidden md:max-w-2xl">
                                                        <label class="block text-sm font-medium
                                                            text-gray-700">App Image</label>
                                                        <div class="md:flex">
                                                            <div class="md:flex-shrink-0">
                                                                <img class="h-full w-full object-cover
                                                                 md:w-48" src="{{url('/')}}/{{$front->app_image}}">
                                                            </div>
                                                            <div class="p-3">
                                                                <div class="uppercase tracking-wide text-sm
                                                                text-indigo-500 font-semibold">Change Image</div>
                                                                <input  type="file" rows="6" name="new_app_image"
                                                                          class=" focus:ring-indigo-500
                                                           focus:border-indigo-500 w-full
                                                           sm:text-sm border-gray-300
                                                           rounded-md">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hidden sm:block" aria-hidden="true">
                                                    <div class="py-5">
                                                        <div class="border-t border-gray-200"></div>
                                                    </div>
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">

                                                    <input value="{{$front->get_more}}" type="text" name="get_more" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">

                                                    <input value="{{$front->sajili}}" type="text" name="sajili" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">

                                                    <input value="{{$front->service1_title}}" type="text" name="service1_title" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">

                                                    <textarea rows="5" name="service1_desc" id="button" class="mt-1
                                                    focus:ring-indigo-500 focus:border-indigo-500 block
                                                    w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$front->service1_desc}}</textarea>
                                                </div>


                                                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                <input value="{{$front->service2_title}}" type="text" name="service2_title" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                    <textarea rows="5" name="service2_desc" id="button_url" class="mt-1
                                                    focus:ring-indigo-500 focus:border-indigo-500 block
                                                    w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$front->service2_desc}}</textarea>
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                <input value="{{$front->service3_title}}" type="text" name="service3_title" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                    <textarea rows="5" name="service3_desc" id="button" class="mt-1
                                                    focus:ring-indigo-500 focus:border-indigo-500 block
                                                    w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$front->service3_desc}}</textarea>
                                                </div>


                                                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                    <input value="{{$front->service4_title}}" type="text" name="service4_title" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                    <textarea rows="5" name="service4_desc" id="button_url" class="mt-1
                                                    focus:ring-indigo-500 focus:border-indigo-500 block
                                                    w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{$front->service4_desc}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-span-6">
                                                <input value="{{$front->your_bils}}" type="text" name="your_bils" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                <div class="grid grid-rows-3">

                                                </div>
                                                <textarea rows="6" name="bills_text"
                                                          id="desc"   class="mt-1 focus:ring-indigo-500
                                                           focus:border-indigo-500 block w-full shadow-sm
                                                           sm:text-sm border-gray-300
                                                           rounded-md">{{$front->bills_text}}</textarea>

                                            </div>

                                            <div class="hidden sm:block" aria-hidden="true">
                                                <div class="py-5">
                                                    <div class="border-t border-gray-200"></div>
                                                </div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                <div class="max-w-md mx-auto bg-white rounded-xl
                                                    shadow-md overflow-hidden md:max-w-2xl">
                                                    <label class="block text-sm font-medium
                                                            text-gray-700">Bills Image</label>
                                                    <div class="md:flex">
                                                        <div class="md:flex-shrink-0">
                                                            <img class="h-full w-full object-cover
                                                                 md:w-48" src="{{url('/')}}/{{$front->bills_image}}">
                                                        </div>
                                                        <div class="p-3">
                                                            <div class="uppercase tracking-wide text-sm
                                                                text-indigo-500 font-semibold">Change Image</div>
                                                            <input  type="file" rows="6" name="new_bills_image"
                                                                    class=" focus:ring-indigo-500
                                                           focus:border-indigo-500 w-full
                                                           sm:text-sm border-gray-300
                                                           rounded-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

{{-- Tariffs --}}
                                            <div class="col-span-6">
                                            <input value="{{$front->our_tarifs}}" type="text" name="our_tarifs" id="small_title"
                                                        autocomplete="family-name" class="mt-1
                                                        focus:ring-indigo-500 focus:border-indigo-500
                                                        block w-full shadow-sm sm:text-sm border-gray-300
                                                        rounded-md">
                                                <div class="grid grid-rows-3">

                                                </div>
                                                <textarea rows="6" name="tariffs_text"
                                                        id="desc"   class="mt-1 focus:ring-indigo-500
                                                        focus:border-indigo-500 block w-full shadow-sm
                                                        sm:text-sm border-gray-300
                                                        rounded-md">{{$front->tariffs_text}}</textarea>

                                                <input value="{{$front->view_tarifs}}" type="text" name="view_tarifs" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">

                                                <input value="{{$front->learn_more}}" type="text" name="learn_more" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">

                                            </div>

                                            <div class="hidden sm:block" aria-hidden="true">
                                                <div class="py-5">
                                                    <div class="border-t border-gray-200"></div>
                                                </div>
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                <div class="max-w-md mx-auto bg-white rounded-xl
                                                    shadow-md overflow-hidden md:max-w-2xl">
                                                    <label class="block text-sm font-medium
                                                            text-gray-700">Tariffs Image</label>
                                                    <div class="md:flex">
                                                        <div class="md:flex-shrink-0">
                                                            <img class="h-full w-full object-cover
                                                                 md:w-48" src="{{url('/')}}/{{$front->tariffs_image}}">
                                                        </div>
                                                        <div class="p-3">
                                                            <div class="uppercase tracking-wide text-sm
                                                                text-indigo-500 font-semibold">Change Image</div>
                                                            <input  type="file" rows="6" name="new_tariffs_image"
                                                                    class=" focus:ring-indigo-500
                                                           focus:border-indigo-500 w-full
                                                           sm:text-sm border-gray-300
                                                           rounded-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4
                                            border border-transparent shadow-sm text-sm font-medium rounded-md
                                            text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Update
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
