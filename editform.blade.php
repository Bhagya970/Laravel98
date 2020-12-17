<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="post" action="{{ route('users.update', $user->id) }}">
            @csrf
            
             <input type="hidden" name="id" id="id" value="{{$user->id}}">
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            </div>
           
            <br>
            <br>

            <x-jet-button class="ml-4">
                    {{ __('Edit') }}
                </x-jet-button>

  



        </form>
    </x-jet-authentication-card>
</x-guest-layout>
