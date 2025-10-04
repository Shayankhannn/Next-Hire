@props(['job'])


<x-panel class="flex  gap-x-6">
    <div>
    <x-employer-logo :employer="$job->employer"/>        
     </div>
    
    <div class="flex-1 flex flex-col">  
        <a href="" class="self-start text-sm text-gray-600">
           {{ $job->employer->name }}
        </a>
        <h3 class="font-extrabold  text-lg mt-3 group-hover:text-blue-800   ">
            <a href="{{ $job->url }}" target="_blank">
            {{ $job->title }}
            </a> 
        </h3>
        <p class="text-gray-400 text-sm mt-auto ">Location :{{ $job->location }} - Salary : {{$job->salary}}</p>
    </div>   
         
        <div >
        
            @foreach ($job->tags as $tag )
                <x-tag :$tag/>
            @endforeach
        
        
        
    </div>
        
        </x-panel>