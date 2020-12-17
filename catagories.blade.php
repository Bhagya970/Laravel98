<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catagories') }}
            
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="post" action="{{ route('catagories.products') }}">
            @csrf
            

            <div>
                <x-jet-label for="catagory" value="{{ __('Catagory') }}" class="category"/>
               <!-- <x-jet-input id="catagory" class="block mt-1 w-full" type="text" name="catagory" :value="old('catagory')" required autofocus autocomplete="catagory" />  -->
                <select style="width: 1200px; height:40px; border: 2px solid blue; border-radius: 4px">
                <option value="0" disabled="true" selected="true">All Categories</option>
                <option>Dresses</option>
                <option>Electronic Gadgets</option>
                <option>Furniture</option>
                <option>Groceries</option>
                <option>Toys and Games</option>
                </select>
            </div>
            <br>
        
            <x-jet-button class="ml-4">
                    {{ __('Next') }}
                </x-jet-button>
           
</form>

        </div>
    </div>

  
</x-app-layout>
