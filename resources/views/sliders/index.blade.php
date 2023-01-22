<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sliders
            <a href="{{url('/')}}/sliders/create" class="ml-4 text-right inline-flex text-white bg-green-700 border-0 py-2 px-6 focus:outline-none hover:bg-green-500 rounded text-lg">Add Slider</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Button
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                         src="{{$slider->image_url}}" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{$slider->title}}
                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{$slider->small_title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{$slider->desc}}</div>

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if(!isset($slider->deleted_at))
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                            rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                            @else
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold
                                                rounded-full bg-red-100 text-red-800">
                                                Deactivated
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{$slider->button}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            @if(!isset($slider->deleted_at))
                                                <a href="{{url('/')}}/sliders/show/{{$slider->id}}" class="ml-4
                                                text-right inline-flex text-white bg-yellow-700 py-2
                                                px-2 hover:bg-yellow-500 rounded
                                                text-xs">View</a>
                                                <a href="{{url('/')}}/sliders/edit/{{$slider->id}}" class="ml-4
                                                text-right inline-flex text-white bg-purple-700 py-2
                                                px-2 hover:bg-purple-500 rounded
                                                text-xs">Edit</a>
                                                <a href="{{url('/')}}/sliders/delete/{{$slider->id}}" class="ml-4
                                                text-right inline-flex text-white bg-red-700 border-0 py-2 px-2
                                                focus:outline-none hover:bg-red-500 rounded
                                                text-xs">Deactivate</a>
                                            @else
                                                <a href="{{url('/')}}/sliders/activate/{{$slider->id}}" class="ml-4
                                                text-right inline-flex text-white bg-green-700 border-0 py-2 px-2
                                                 focus:outline-none hover:bg-green-500 rounded
                                                 text-xs">Activate</a>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach

                                    <!-- More items... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
