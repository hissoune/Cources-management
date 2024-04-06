<x-app-layout>
    <x-slot name="title">
       Abonnments
    </x-slot>

    <x-slot name="slot">

        <div class="relative overflow-x-auto my-6">
                <div class="p-1 m-3">    
                    <a href="{{ route('create_abonment') }}" class="btn bg-green-500 text-white rounded p-1 ">Add Abonnment</a>
                </div>
            <table class="w-full text-sm shadow border-2 text-left rtl:text-right text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">


                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Abonnment type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            number cources
                        </th>
                        
                        <th scope="col" class="px-6 py-3">
                            Abonnment price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Abonnment duration
                        </th>
                        
                        <th scope="col" class="px-6 py-3 text-center">
                            actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Abonnments as $item)


                    <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                           {{ $item->type }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                            {{ $item->number_cources }}  cource
                         </th>
                        
                         <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                           
                            {{ $item->price }}  $
                          
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                           
                            {{ $item->number_days }}  day
                          
                        </th>
                        


                        <td class="px-6 py-4 flex justify-around">

                            <form action="{{ route('Edit_abonment',$item) }}"  >
                                @csrf
                        
                                 <button class="btn bg-green-500 text-white rounded p-1">Edit</button>
                             </form>
                             <form action="{{ route('delete_abonnment',$item) }}" method="POST" >
                                @csrf
                           @method('delete')
                                 <button class="btn bg-red-500 text-white rounded p-1">delete</button>
                             </form>
                            
                        </td>

                    @empty
                    <td colspan="12"><h1 class="text-center">no Abonnments founds</h1></td>
                </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
       
    </x-slot>
</x-app-layout>
