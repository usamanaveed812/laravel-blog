<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="pt-15 w-4/5 m-auto">
        <a 
            href="/post"
            style="border: 1px solid black; background-color:blueviolet"
            
            class="btn btn-success">
Create Posts  
        </a>
    </div>  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
