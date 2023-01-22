<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sliders
            <a href="{{url('/')}}/tariffs/create" class="ml-4 text-right inline-flex text-white bg-green-700 border-0 py-2 px-6 focus:outline-none hover:bg-green-500 rounded text-lg">Add Tariff</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->


                <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{url('/')}}/tariffs/store" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <img src="{{$tariff_image->image}}">


                                            </div>
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Image</label>
                                                    <input type="file" name="new_image" id="new_image"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
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

</x-app-layout>
