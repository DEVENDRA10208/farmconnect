<x-guest-layout>

  <form method="GET" action="/dashboard">
      @csrf
      <p>Your delivery request has been sent. Please wait for confirmation</p>
        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Redirect to Dashboard') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>