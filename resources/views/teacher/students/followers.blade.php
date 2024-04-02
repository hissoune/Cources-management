<x-app-layout>
    <x-slot name="slot">
         
        <div class="relative overflow-x-auto my-6">
            <table class="w-full text-sm shadow border-2 text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                   
                   
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            follower name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            follower  email
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($followers as $item)
                        
                   
                    <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                          {{ $item->student->name }}
                        </th>
                        <td class="px-6 py-4 text-white">
                            {{ $item->student->email }}
                        </td>
                    
                    @empty
                    <td colspan="12"><h1 class="text-center">no students ascks</h1></td> 
                </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
  
    </x-slot>
</x-app-layout>