<x-app-layout>
    <x-slot name="title">
        Filliers
    </x-slot>

    <x-slot name="slot">

        <div class="relative overflow-x-auto my-6">

            <button data-modal-target="#crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                add fillier
            </button>
  
            <div id="crud-modal" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50 justify-center items-center w-full md:inset-0">
                <div class="relative p-4  w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Create New Product
                            </h3>
                            <button data-modal-close="#crud-modal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5" method="POST" action="{{ route('fillier.store') }}">
                            @csrf
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                                </div>
                                <div class="col-span-2">
                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">fillier Description</label>
                                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write product description here"></textarea>                    
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                Add new fillier
                            </button>
                        </form>
                    </div>
                </div>
            </div> 
            <table class="w-full text-sm shadow border-2 text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">


                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Filliere name
                        </th>

                        <th scope="col" class="px-6 py-3 text-center">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Filliers as $item)


                    <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                           {{ $item->name }}
                        </th>


                        <td class="px-6 py-4 flex justify-around">

                            <form action="{{ route('fillier.edit',$item) }}"  >
                               
                                 <button class="btn bg-green-500 text-white rounded p-1">Edit</button>
                             </form>
                            <form action="{{ route('fillier.destroy',$item) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn bg-red-500 text-white rounded p-1">delete</button>
                            </form>
                            
                        </td>

                    @empty
                    <td colspan="12"><h1 class="text-center">no fillier founds</h1></td>
                </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Function to open modal
                $('[data-modal-target]').click(function() {
                    var target = $(this).attr('data-modal-target');
                    $(target).removeClass('hidden');
                });
    
                // Function to close modal
                $('[data-modal-close]').click(function() {
                    var target = $(this).attr('data-modal-close');
                    $(target).addClass('hidden');
                });
            });
        </script>
    </x-slot>
</x-app-layout>
