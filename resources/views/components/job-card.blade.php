@props(['job'])

<x-panel class="flex flex-col "  >
        <div class="self-start text-sm ">
            employer 
        </div>
        <div class="py-8 ">
            <h3 class="group-hover:text-blue-800 text-xl font-bold">title</h3>
            <p class="text-sm mt-4">desc</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
        <div>
              @foreach ($job->tags as $tag )
                <x-tag size="small" :$tag/>
            @endforeach
            
        
        
        </div>
<x-employer-logo :width="42" />
    </div>
        
        </x-panel>