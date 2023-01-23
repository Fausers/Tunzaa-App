<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 ">
              <div class="aspect-w-3 aspect-h-4 overflow-hidden rounded-lg lg:block">
                <img src="/{{$product->image}}" alt="Two each of gray, white, and black shirts laying flat."
                     class="h-full w-full object-cover object-center">
              </div>
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$product->name}}</h1>
                </div>
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{number_format($product->price)}}<small>TZS</small></h1>
                </div>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('store_order',$product->id)}}">
            @csrf
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Payment Method')" />

                <select onchange="go()" id="payment_method" name="payment_method" class="block mt-1 w-full" required>
                    <option value="">Select Payment Method</option>
                    <option value="cash">Cash</option>
                    <option value="card">Card</option>
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4" id="address" style="display: none">
                <x-label for="address" :value="__('Billing Address')" />
                <x-input  class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
            </div>

            <!-- Email Address -->
            <div class="mt-4" id="card_number" style="display: none">
                <x-label for="shop_name" :value="__('Card Number')" />
                <x-input  class="block mt-1 w-full" type="text" name="card_number" :value="old('card_number')" />
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Place Order') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

    <script>
        function go() {
            w = document.getElementById('address');
            x = document.getElementById('card_number');
            y = document.getElementById('payment_method');
            if(y.value === 'cash'){
                w.style.display = "none";
                x.style.display = "none";
            } else {
                w.style.display = "block";
                x.style.display = "block";
            }

        }
    </script>
</x-guest-layout>
