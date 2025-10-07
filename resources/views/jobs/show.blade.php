<x-layout>
    <x-page-heading>Job Details</x-page-heading>
<x-forms.divider/>

<div class="flex justify-between items-center pb-6" >
    <div class="space-y-2">


        {{-- <h2 class="text-2xl font-medium text-blue-600">Company Name</h2> --}}
        <h2 class="text-3xl font-medium text-blue-600 capitalize"><x-job-icon icon="building-2" class="w-7 h-7"> {{ $job->employer->name }} </x-job-icon></h2>
        <h2 class="text-lg font-medium text-gray-400 capitalize"><x-job-icon class="text-gray-400 w-2 h-2" icon="user"> {{ $job->employer->name }} </x-job-icon></h2>
                

        <a href="{{ $job->url }}" class="text-sm text-blue-600 flex gap-1 items-center hover:text-white group">Apply Now <x-job-icon icon="arrow-right" class="w-2 h-2 group-hover:text-white"/></a>
    </div>
    <div >
        <img src="https://placehold.co/92x92"  alt="" class="h-auto w-24 rounded-full">
    </div>
</div>

    <div class="gap-2 text-md flex items-center mt-6 justify-between">
        <x-job-icon icon="map-pin">Location: {{ $job->location }} </x-job-icon>
        <x-job-icon icon="wallet">Salary: {{ $job->salary }} </x-job-icon>
        <x-job-icon icon="clock">Job Type: {{ $job->schedule }} </x-job-icon>
        <x-job-icon icon="clock">Date Posted: {{ $job->created_at }} </x-job-icon>

    </div>

    <div class="mt-6">
        {{-- job title  --}}
         {{-- job description  --}}
         {{-- job responsibility  --}}
         {{-- job skills and requirement  --}}
         {{-- job benefits  --}}
        <p>

        </p>
    </div>
    <div class="">
    {{--  company description --}}
    <p class="text-gray-300 w-[80%]" >
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, ipsum voluptas! Dolore animi inventore veritatis, nesciunt placeat iste fugiat sequi.
    </p>
</div>


<div class="space-x-2 pt-8">
    @foreach ($job->tags as $tag )
    <x-tag :$tag/>
@endforeach
</div>



</x-layout>