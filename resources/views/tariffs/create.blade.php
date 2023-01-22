<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Tariff
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
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Tariff
                                        Details</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Fill the Tariff Details
                                    </p>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">

                                <form @if(isset($tariff->id))
                                      action="{{url('/')}}/tariffs/update/{{$tariff->id}}"
                                      @else
                                      action="{{url('/')}}/tariffs/store"
                                      @endif
                                     method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="from" class="block text-sm
                                                    font-medium text-gray-700">From</label>
                                                    <input value="{{$tariff->from}}" type="number" name="from" id="from"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to" class="block text-sm
                                                    font-medium text-gray-700">To</label>
                                                    <input value="{{$tariff->to}}" type="number" name="to" id="to"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="withdraw" class="block text-sm
                                                    font-medium text-gray-700">Withdraw</label>
                                                    <input value="{{$tariff->withdraw}}" type="number" name="withdraw" id="withdraw"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to_azam_pesa" class="block text-sm
                                                    font-medium text-gray-700">To Azam Pesa</label>
                                                    <input value="{{$tariff->to_azam_pesa}}" type="number" name="to_azam_pesa" id="to_azam_pesa"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to_bank" class="block text-sm
                                                    font-medium text-gray-700">To Banks</label>
                                                    <input value="{{$tariff->to_bank}}" type="number" name="to_bank" id="to_bank"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="order" class="block text-sm
                                                    font-medium text-gray-700">Order</label>
                                                    <input value="{{$tariff->order}}" type="number" name="order" id="order"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                           rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to_mobile_nets" class="block text-sm
                                                    font-medium text-gray-700">TOZO ZA SERIKALI <br> (Kutuma Azam Pesa)</label>
                                                    <input value="{{$tariff->toll_to_azam}}" type="number" name="toll_to_azam" id="toll_to_azam"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to_mobile_nets" class="block text-sm
                                                    font-medium text-gray-700">TOZO ZA SERIKALI <br> (Kutuma Kwenda Benki)</label>
                                                    <input value="{{$tariff->toll_to_bank}}" type="number" name="toll_to_bank" id="toll_to_bank"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="to_mobile_nets" class="block text-sm
                                                    font-medium text-gray-700">TOZO ZA SERIKALI <br> (Kutoa Pesa)</label>
                                                    <input value="{{$tariff->toll_withdraw}}" type="number" name="toll_withdraw" id="toll_withdraw"
                                                           autocomplete="given-name" class="mt-1
                                                           focus:ring-indigo-500 focus:border-indigo-500
                                                           block w-full shadow-sm sm:text-sm border-gray-300
                                                            rounded-md">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center py-2 px-4
                                            border border-transparent shadow-sm text-sm font-medium rounded-md
                                            text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
                                            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                @if(isset($tariff->id))
                                                Update
                                                @else
                                                Save
                                                @endif
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
