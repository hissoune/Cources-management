<x-app-layout>
    <x-slot name="title" >
        Teachers
    </x-slot>

    <x-slot name="slot">
        
        <div class="relative overflow-x-auto my-6">
            <table class="w-full text-sm shadow border-2 text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                   
                   
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Teacher name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Teacher email
                        </th>
                        <th scope="col" class="px-6 py-3">
                           email verifide
                        </th>
                        <th scope="col" class="px-6 py-3">
                         Formation
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            actions
                          </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Teachers as $item)
                        
                   
                    <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                           {{ $item->name }}
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $item->email }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            {{ ($item->email_verified_at)?'yes':'no' }}
                        </td>
                        <td class="px-6 py-4 text-white">
                            {{ ($item->formation)?'yes':'no' }}
                        </td>
                       
                     <td class="px-6 py-4 flex justify-around">
                          <form action="" method="POST">
                            @csrf
                            @method('put')
                            <button class="btn bg-red-500 text-white rounded p-1">block</button>
                          </form>
                          <form action="" method="post" >
                               @csrf
                               @method('put')
                         
                            <button class="btn bg-green-500 text-white rounded p-1">Send Email</button>
                          </form>
                        </td> 
                    
                    @empty
                    <td colspan="12"><h1 class="text-center">no users ascks</h1></td> 
                </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
            </x-slot>
</x-app-layout>