<x-app-layout>
    <x-slot name="slot">
        
@foreach($followers as $follower)
    {{  $follower}}
@endforeach
    </x-slot>
</x-app-layout>