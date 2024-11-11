
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
    
    <form method="POST" action="/addproduce">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="produce_name" :value="__('Produce Name')" />
            <x-text-input id="produce_name" class="block mt-1 w-full" type="text" name="produce_name" :value="old('produce_name')" required autofocus autocomplete="name" />
            
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="produce_desc" :value="__('Produce Description')" />
            <x-text-input id="produce_desc" class="block mt-1 w-full" type="text" name="produce_desc" :value="old('produce_desc')" required  />
            
        </div>
  
       
       <!-- Price -->
       <div class="mt-4">
            <x-input-label for="produce_price_per_kg" :value="__('Produce Pricing per Kg')" />
            <x-text-input id="produce_price_per_kg" class="block mt-1 w-full" type="number" name="produce_price_per_kg" :value="old('produce_price_per_kg')" required  />
            
        </div>

        <!-- Certification -->
        <div class="mt-4">
        <x-input-label for="produce_certification" :value="__('Certification')" />
         <div class="relative">
        
        <select id="produce_certification" name="produce_certification" class="block mt-1 w-full rounded">
                <option value=""></option>
                <option value="organic">Organic</option>
                <option value="fair-trade">Fair-Trade</option>
                <option value="non_gmo">non-GMO</option>
                <option value="gmo">GMO</option>
            </select>
    </div>
</div>

        <!-- Image -->
        <div class="mt-4">
            <x-input-label for="produce_image" :value="__('Produce Image')" />
            <x-text-input id="produce_image" class="block mt-1 w-full" accept="image/*" onchange="loadFile(event)" type="file" name="produce_image" :value="old('produce_image')" required/>
            <p><img id="output" width="200"/></p>
      <script>
          var loadFile = function(event) {
              var image = document.getElementById('output');
              image.src=URL.createObjectURL(event.target.files[0]);
          };
      </script>
        </div>

        <div class="flex items-center justify-end mt-4">
            

            <x-primary-button class="ml-4">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
</div>
</x-app-layout>
