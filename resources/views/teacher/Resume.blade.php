<x-app-layout>
<x-slot name="slot">
<section>
   
      <div><h4 class="text-center font-bold">{{ ($item->Resume)?'update':'Add' }} Resume</h4></div>
    <div class="">
        <form action="" >
            <div class="">
                <input  class="block text-sm font-medium text-gray-700" type="text" name="part1" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="">
                <textarea class="block text-sm font-medium text-gray-700" name="desc1" id="desc1" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>
            <div class="">
                <input class="block text-sm font-medium text-gray-700" type="text" name="part1" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="">
                <textarea class="block text-sm font-medium text-gray-700" name="desc1" id="desc1" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>
            <div class="">
                <input class="block text-sm font-medium text-gray-700" type="text" name="part1" value="{{ ($item->Resume)?$item->Resume->part1:'' }}" placeholder="Add part 1 title">
            </div>
            <div class="">
                <textarea class="block text-sm font-medium text-gray-700" name="desc1" id="desc1" cols="30" rows="4" placeholder="Add desccription for this part">{{ ($item->Resume)?$item->Resume->desc1:'' }}</textarea>
            </div>

        </form>
    </div>
</section>
</x-slot>
</x-app-layout>