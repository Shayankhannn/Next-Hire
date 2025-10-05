<x-layout>
     <x-page-heading>Results</x-page-heading>
     
    <x-forms.divider/>
    <div class=" space-y-6">
        @if ($jobs->count())
        
        @foreach ($jobs as $job )
    <x-job-card-wide :$job/> 
        
        @endforeach
    @else
    <p class="text-center text-gray-400 mt-10 bg-gray-800 p-4 rounded-lg">
    No results found for "{{ request('q') }}"
</p>
@endif


<x-forms.divider/>
<div class="flex justify-center">

    <a href="/" class="bg-white text-black px-4 py-2 rounded-md hover:bg-gray-200 transition font-bold "> Back to Jobs</a>
</div>
             

        </div>



    </x-layout>