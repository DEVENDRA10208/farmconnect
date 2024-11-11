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
<p>Enter the distance in kilometres and use the rate provided to calculate the cost of transport.</p>
    <p>The distances are provided below:</p>
    <ul>
        <li>Murang'a to Nairobi - 85km</li>
        <li>Embu to Nairobi - 130 km</li>
        <li>Limuru to Nairobi - 45 km</li>
    </ul>
    <p><b>Current rate is 6</b><p>
        
<form method="POST" action="/calculator">
        @csrf

     
       <div class="mt-4">
            <x-input-label for="distance" :value="__('Input Distance')" />
            <x-text-input id="distance" class="block mt-1 w-full" type="number" name="distance" :value="old('distance')" required  />
            
        </div>

       

        <div class="mt-4">
            <x-input-label for="rate" :value="__('Input Rate')" />
            <x-text-input id="rate" class="block mt-1 w-full" type="number" name="rate" :value="old('rate')" required  />
            
        </div>

        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Calculate') }}
            </x-primary-button>
        </div>
        @if(isset($cost))
        <div class="result">
            <p>The cost for {{ $distance }} km is KES {{ $cost }}</p>
        </div>
    @endif
    <x-primary-button class="ml-4"><a href="payment">
                {{ __('Proceed to Payment') }}
</a>  </x-primary-button>
    </form>
   
</x-app-layout>