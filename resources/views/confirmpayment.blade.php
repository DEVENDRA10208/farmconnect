<x-guest-layout>

  <form method="GET" action="/requestdelivery">
      @csrf
      <p>Kindly wait for the M-Pesa prompt. When prompted, kindly input your M-Pesa pin and take note of your transaction. You will need it to make the delivery request</p>
        <div class="flex items-center justify-end ">
            

            <x-primary-button class="ml-4">
                {{ __('Click To Proceed to Delivery Request') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>