<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit {{$product->name}}
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
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Product Details</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Update the product Details
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{route('update_product',$product->id)}}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm
                                                    font-medium text-gray-700">Product Name</label>
                                                    <input value="{{$product->name}}" type="text" name="name" id="name"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="small_title" class="block text-sm
                                                    font-medium text-gray-700">Shop Name</label>
                                                    <input type="text" disabled value="{{$shop->name}}" autocomplete="family-name"
                                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>


                                                <div class="col-span-6">
                                                    <label for="desc"
                                                           class="block text-sm font-medium
                                                            text-gray-700">Description</label>
                                                    <textarea type="text" name="desc" id="desc" autocomplete="description" class="mt-1 focus:ring-indigo-500  focus:border-indigo-500 block w-full shadow-sm  sm:text-sm border-gray-300 rounded-md">{{$product->desc}}</textarea>
                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                    <label for="price" class="block text-sm font-medium
                                                    text-gray-700">Price</label>
                                                    <input type="number" name="price" id="price" value="{{$product->price}}"
                                                           class="mt-1  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                    <label for="stock" class="block text-sm font-medium
                                                    text-gray-700">Stock</label>
                                                    <input type="number" name="stock" id="stock" value="{{$product->stock}}" class="mt-1  focus:ring-indigo-500 focus:border-indigo-500 block
                                                    w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>



                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700">
                                                    Product Image
                                                </label>
                                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                    <img alt="feature" class="object-cover object-center h-full w-full"
                                                         src="/{{$product->image}}">
                                                </dd>
                                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2
                                                border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400"
                                                             stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                                             aria-hidden="true">
                                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0
                                                            01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0
                                                            00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28
                                                            28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2"
                                                                  stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="flex text-sm text-gray-600">
                                                            <label for="file-upload" class="relative
                                                            cursor-pointer bg-white rounded-md font-medium
                                                            text-indigo-600 hover:text-indigo-500
                                                            focus-within:outline-none focus-within:ring-2
                                                            focus-within:ring-offset-2
                                                            focus-within:ring-indigo-500">
                                                                <span>Upload a file</span>
                                                                <input id="file-upload" name="image" accept="image/*"
                                                                       type="file" class="sr-only">
                                                            </label>
                                                            <p class="pl-1">or drag and drop</p>
                                                        </div>
                                                        <p class="text-xs text-gray-500">
                                                            PNG, JPG, GIF up to 10MB
                                                        </p>
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
