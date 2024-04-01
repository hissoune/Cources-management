<x-app-layout>
<x-slot name="slot">

    <div  class=" inset-0  overflow-y-auto overflow-x-hidden z-50 justify-center items-center w-full md:inset-0">
        <div class="relative p-4  w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                         evaluate <strong>{{ $student->name }}</strong>
                    </h3>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="POST" action="{{ route('evaluate_s') }}">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <input type="text" name="student_id" hidden value="{{ $student->id }}" >
                        </div>
                        <div class="col-span-2">
                            <label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">your note</label>
                            <input type="text" name="note" id="note" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                            @error('note')
                              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="mark" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">student marke</label>
                            <input id="mark" type="number" name="mark"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="00">                    
                            @error('mark')
                              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        evaluate
                    </button>
                </form>
            </div>
        </div>
    </div> 

</x-slot>

</x-app-layout>