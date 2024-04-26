<x-app-layout>
<x-slot name="slot">
    <x-slot name="title">
        create resume
     </x-slot>
<section>
   
      <div><h4 class="text-center font-bold">{{ ($item->Resume)?'update':'Add' }} Resume</h4></div>
    <div class="AddResume">
        <form action="{{ ($item->Resume)?route('update_resume',['resume'=>$item->Resume]): route('Add_resume') }}" method="POST" >
            @csrf
            @if ($item->Resume)
                @method('put')
            @endif
            <div class="form-group">
                <input  class="block text-sm font-medium text-gray-700"  type="hidden" name="cource_id" value="{{ $item->id }}" >
            </div>
            <div class="form-group">
                <input  class="block text-sm font-medium text-gray-700" type="text" name="part1" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="form-group">
                <textarea class="block text-sm font-medium text-gray-700" name="desc1" id="desc1" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>
            <div class="form-group">
                <input class="block text-sm font-medium text-gray-700" type="text" name="part2" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="form-group">
                <textarea class="block text-sm font-medium text-gray-700" name="desc2" id="desc2" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>
            <div class="form-group">
                <input class="block text-sm font-medium text-gray-700" type="text" name="part3" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="form-group">
                <textarea class="block text-sm font-medium text-gray-700" name="desc3" id="desc3" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>
<button class="">{{ ($item->Resume)?'update':'Add' }} resume</button>
        </form>
    </div>
</section>
</x-slot>
</x-app-layout>