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
                                <form action="{{url('/')}}/crm/update_my_about" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Title</label>
                                                    <input value="{{$about->title}}" type="text" name="title" id="title"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Head</label>
                                                    <input value="{{$about->head}}" type="text" name="head" id="small_title"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Text 1</label>
                                                    <textarea type="text" name="text_1" id="text_1" rows="6"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$about->text_1}}</textarea>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Text 2</label>
                                                    <textarea  type="text" name="text_2" rows="6" id="text_2"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$about->text_2}}</textarea>
                                                </div>
                                                
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Title Low</label>
                                                    <input value="{{$about->title_low}}" type="text" name="title_low" id="title_low"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">

                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Text 1</label>
                                                    <textarea type="text" name="text_low_1" id="text_low_1"
                                                           autocomplete="family-name" rows="6" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$about->text_low_1}}</textarea>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Text 2</label>
                                                    <textarea  type="text" name="text_low_2" id="text_low_2"
                                                           autocomplete="family-name" rows="6" class="mt-1 
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$about->text_low_2}}</textarea>
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                    <div class="max-w-md mx-auto bg-white rounded-xl
                                                        shadow-md overflow-hidden md:max-w-2xl">
                                                        <label class="block text-sm font-medium
                                                                text-gray-700">Tariffs Image</label>
                                                        <div class="md:flex">
                                                            <div class="md:flex-shrink-0">
                                                                <img class="h-full w-full object-cover
                                                                    md:w-48" src="{{url('/')}}/{{$about->image}}">
                                                            </div>
                                                            <div class="p-3">
                                                                <div class="uppercase tracking-wide text-sm
                                                                    text-indigo-500 font-semibold">Change Image</div>
                                                                <input  type="file" rows="6" name="new_image"
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
