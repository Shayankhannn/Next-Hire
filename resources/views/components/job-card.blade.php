@props(['job'])
<x-panel class="flex flex-col capitalize"  >
        <div class="self-start text-sm font-medium ">
            {{ $job->employer->name }} 
        </div>
        <div class="py-4 ">
            <h3 class="group-hover:text-blue-800 text-xl font-bold">
            <a href="/jobs/{{ $job->id }}"  >

                {{ $job->title }}
            </a>
                
            </h3>
            <p class="text-sm mt-4">{{ $job->salary }}</p>
            <p class="text-sm mt-4">{{ $job->schedule }}</p>
            <p class="text-sm mt-4">{{ $job->location }}</p>
        </div>
        <div class="flex justify-between items-center mt-auto">
        <div>
              @foreach ($job->tags->take(4) as $tag )
                <x-tag size="small" :$tag/>
            @endforeach
            
        
        
        </div>
<x-employer-logo :employer="$job->employer" :width="42"  />
    </div>
        
        </x-panel>