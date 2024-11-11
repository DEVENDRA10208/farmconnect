<x-app-layout>
<div class="bodycentre">
<style>
    .bodycentre {
   margin        : 0;
   padding       : 0;
   display       : grid;
   place-content : center;
   min-height    : 100vh;
}
</style>

    <form method="POST" action="/requestdelivery">
        @csrf

        <div class="mt-4">
            <x-input-label for="email" :value="__('Enter your Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('payment_transaction')" required  />
            
        </div>


        <!-- Name -->
        <div>
            <x-input-label for="produce_name" :value="__('Add item for transportation')" />
            <x-text-input id="produce_name" class="block mt-1 w-full" type="text" name="produce_name" :value="old('payment_transaction')" required  />

            <!-- <select id="produce_name" name="produce_name" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="tomatoes">Tomatoes</option>
                <option value="potatoes">Potatoes</option>
                <option value="milk">Milk</option>
              
            </select>
-->
        </div>
        
        
        <!-- Description -->
        <div>
            <x-input-label for="pickup_location" :value="__('Enter Pickup Location')" />
            <select id="pickup_location" name="pickup_location" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="Embu">Embu</option>
                <option value="Murang'a">Murang'a</option>
                <option value="Limuru">Limuru</option>
              
            </select>
        </div>
  
       
       <!-- Price -->
       
       <div class="mt-4">
            <x-input-label for="delivery_quantity" :value="__('Input Quantity in Kgs/Litres/Pounds')" />
            <x-text-input id="delivery_quantity" class="block mt-1 w-full" type="number" name="delivery_quantity" :value="old('delivery_quantity')" required  />
            
        </div>

        <!-- Certification -->
         <div class="mt-4">
            <!-- <x-input-label for="delivery_truck" :value="__('Choose Available Delivery Truck')" />-->
         <div class="relative">


            <!-- <select id="delivery_truck" name="delivery_truck" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="Canter KDG">Canter KDG 171H</option>
                <option value="Canter KAM">Canter KAM 444Z</option>
                <option value="Isuzu Elf">Isuzu Elf KBM 213D</option>
                
            </select> -->
    </div>
</div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="payment_transaction" :value="__('Input Transaction Message')" />
            <x-text-input id="payment_transaction" class="block mt-1 w-full" type="text" name="payment_transaction" :value="old('payment_transaction')" required  />
            
        </div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ml-4">
                {{ __('Request Delivery') }}
            </x-primary-button>
        </div>
    </form></div>
</x-app-layout>