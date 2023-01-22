<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Others
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
                                <form action="{{url('/')}}/crm/update_others" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Nav 1</label>
                                                    <input value="{{$others->head_1}}" type="text" name="head_1" id="head_1"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Nav 2</label>
                                                    <input value="{{$others->head_2}}" type="text" name="head_2" id="head_2"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Nav 3</label>
                                                    <input value="{{$others->head_3}}" type="text" name="head_3" id="head_3"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Nav 4</label>
                                                    <input value="{{$others->head_4}}" type="text" name="head_4" id="head_4"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>



                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Title Low</label>
                                                    <input value="{{$others->head_5}}" type="text" name="head_5" id="head_5"
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
                                                    <textarea type="text" name="contact_head" id="contact_head"
                                                           autocomplete="family-name" rows="6" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$others->contact_head}}</textarea>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Text 2</label>
                                                    <textarea  type="text" name="contact_text" id="contact_text"
                                                           autocomplete="family-name" rows="6" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">{{$others->contact_text}}</textarea>
                                                </div>



                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Nav 1</label>
                                                    <input value="{{$others->phone}}" type="text" name="phone" id="phone"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Nav 2</label>
                                                    <input value="{{$others->address}}" type="text" name="address" id="address"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6">

                                                <h1>Contact Form</h1>
                                                    <hr>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Name</label>
                                                    <input value="{{$others->contacts_name}}" type="text" name="contacts_name" id="phone"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Email</label>
                                                    <input value="{{$others->contacts_mail}}" type="text" name="contacts_mail" id="address"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Phone</label>
                                                    <input value="{{$others->contacts_phone}}" type="text" name="contacts_phone" id="phone"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>


                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Message</label>
                                                    <input value="{{$others->contacts_message}}" type="text" name="contacts_message" id="address"
                                                           autocomplete="family-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                    <div class="max-w-md mx-auto bg-white rounded-xl
                                                        shadow-md overflow-hidden md:max-w-2xl">
                                                        <label class="block text-sm font-medium
                                                                text-gray-700">Contacts Image</label>
                                                        <div class="md:flex">
                                                            <div class="md:flex-shrink-0">
                                                                <img class="h-full w-full object-cover
                                                                    md:w-48" src="{{url('/')}}/{{$others->contacts_image}}">
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
