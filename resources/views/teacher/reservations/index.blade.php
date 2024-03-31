<x-app-layout>
    <x-slot name="title">
        Reservations
    </x-slot>

    <x-slot name="slot">
<div class="relative overflow-x-auto my-6">

   
    <table class="w-full text-sm shadow border-2 text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">


            <tr>
                <th scope="col" class="px-6 py-3">
                    Course name
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Course date
                </th>
                <th scope="col" class="px-6 py-3">
                    Course start time
                </th>
                <th scope="col" class="px-6 py-3">
                    Course end time
                </th>
                <th scope="col" class="px-6 py-3">
                    student name
                </th>
                <th scope="col" class="px-6 py-3">
                    student email
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    actions
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Reservations as $item)


            <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                  {{ $item->Coureces->name }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $item->Coureces->date }}
                 </th>
                 <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $item->Coureces->start_time }}
                 </th>
                 <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $item->Coureces->end_time }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $item->user->name }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-nowrap dark:text-white">
                    {{ $item->user->email }}
                </th>
               <td class="px-6 py-4 flex justify-around">

                    <form action="{{ route('accept_reservation',$item) }}" method="POST" >
                        @csrf
                        @method('put')
                         <button class="btn bg-green-500 text-white rounded p-1">accept</button>
                     </form>
                    <form action="{{ route('refiouse_reservation',$item) }}" method="POST">
                        @csrf
                        @method('put')
                        <button class="btn bg-red-500 text-white rounded p-1">refiouse</button>
                    </form>
                    
                </td>

            @empty
            <td colspan="12"><h1 class="text-center">no fillier founds</h1></td>
        </tr>
            @endforelse
        </tbody>
    </table>
</div>

</x-slot>
</x-app-layout>
