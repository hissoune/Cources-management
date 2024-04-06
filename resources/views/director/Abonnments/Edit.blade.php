<x-app-layout>
    <x-slot name="title">
        Add Abonnmet
    </x-slot>

    <x-slot name="slot">


<div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Add Course</h2>
    <form method="POST" action="{{ route('Abonnment_update',$item) }}">
        @csrf
        @method('put')
        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">type:</label>
            <select  id="type" name="type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option value="Free" {{ ($item->type == 'Free')?'selected':'' }}>Free</option>
                <option value="premiume" {{ ($item->type == 'premiume')?'selected':'' }}>premiume</option>
                <option value="vip" {{ ($item->type == 'vip')?'selected':'' }}>vip</option>
            </select>
            @error('type')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">price:</label>
            <input type="text" value="{{ $item->price }}" id="price" name="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="number_cources" class="block text-sm font-medium text-gray-700">number cources:</label>
            <input type="number" value="{{ $item->number_cources }}" id="number_cources" name="number_cources" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('number_cources')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="number_days" class="block text-sm font-medium text-gray-700">number days:</label>
            <input type="number" value="{{ $item->number_days }}" id="number_days" name="number_days" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('number_days')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Abonnment
            </button>
        </div>
    </form>
</div>
</x-slot>
</x-app-layout>

