<x-app-layout>
    <div class="bodycentre">
<style>
    .bodycentre {

   display       : grid;
   place-content : center;
   min-height    : 100vh;
}

</style>

        

    
    <form method="POST" action="/payment">
        @csrf

        
       <!-- Price -->
       
       <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Input Phone Number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')" required  />
            
        </div>

       

        <div class="mt-4">
            <x-input-label for="amount" :value="__('Input Amount')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required  />
            
        </div>

        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Make Payment') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-app-layout>