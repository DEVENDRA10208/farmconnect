<x-guest-layout>

  <form method="GET" action="/viewproduce">
      @csrf
      <p>If not automatically redirected to the view your latest changes, click the button below</p>
        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('View Produce') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>