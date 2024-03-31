<x-app-layout>
    <x-slot name="title">
        Add Cours
    </x-slot>

    <x-slot name="slot">


<div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Add Course</h2>
    <form method="POST" action="{{ route('Courses.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <input type="text" id="name" name="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">price:</label>
            <input type="text" id="price" name="price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
            <textarea id="description" name="description" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
            <input type="file" id="image" name="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('image')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">date:</label>
            <input type="date" id="date" name="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('date')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="start_time" class="block text-sm font-medium text-gray-700">Starting Time:</label>
            <input type="time" id="start_time" name="start_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('start_time')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
        <div class="mb-4">
            <label for="end_time" class="block text-sm font-medium text-gray-700">ending Time:</label>
            <input type="time" id="end_time" name="end_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            @error('end_time')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>
                

        <div class="mb-4">
            <label for="fillier_id" class="block text-sm font-medium text-gray-700">Fillier:</label>
            <select id="fillier_id" name="fillier_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <!-- Populate this select with options dynamically -->
                @foreach($filliers as $fillier)
                    <option value="{{ $fillier->id }}">{{ $fillier->name }}</option>
                @endforeach
            </select>
            @error('fillier_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mb-4">
            <label for="classes_id" class="block text-sm font-medium text-gray-700">classe:</label>
            <select id="classes_id" name="classes_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <!-- Populate this select with options dynamically -->
                @foreach($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                @endforeach
            </select>
            @error('classes_id')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="mt-6">
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Course
            </button>
        </div>
    </form>
</div>
</x-slot>
</x-app-layout>

