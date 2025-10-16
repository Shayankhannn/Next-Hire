<x-layout>
    <div class="capitalize">
    <x-page-heading>Job Details</x-page-heading>
    <a href="/jobs/{{ $job->id }}/edit">Edit</a>
<x-forms.divider/>
<div class="flex justify-between items-center pb-6" >
    <div class="space-y-2">


        <h2 class="text-3xl font-medium text-blue-600 capitalize"><x-job-icon icon="building-2" class="w-7 h-7"> {{ $job->employer->company_name }} </x-job-icon></h2>
        <h2 class="text-lg font-medium text-gray-400 capitalize"><x-job-icon class="text-gray-400 w-2 h-2" icon="user"> {{ $job->employer->name }} </x-job-icon></h2>
         <x-job-icon icon="map-pin">Location: {{ $job->location }} </x-job-icon>


    </div>
    <div >
<x-employer-logo :employer="$job->employer" class="h-auto w-24 rounded-full"/>   
    </div>
</div>
<x-forms.divider/>


    <div class="gap-2 text-sm flex items-center mt-6 justify-between">
        <x-job-icon icon="wallet">Salary: {{ $job->salary }} </x-job-icon>
        <x-job-icon icon="clock">Job Type: {{ $job->schedule }} </x-job-icon>
        <x-job-icon icon="briefcase">Work Type: {{ $job->workType }} </x-job-icon>
        <x-job-icon icon="award">Experience Level : {{ $job->experienceLevel }} </x-job-icon>
        <x-job-icon icon="clock">Date Posted: {{ $job->created_at->diffForHumans() }} </x-job-icon>

    </div>
<x-forms.divider/>

    <div class="mt-4">
        {{-- job title  --}}
        <h2 class="text-2xl font-medium text-blue-600 ">{{$job->title}}</h2>
         {{-- job description  --}}
         {{-- <h3 class="text-lg font-medium text-blue-600">Job Description</h3> --}}
            <p class="text-gray-300 w-[80%] pt-5" >
                {{$job->description}}
            </p>
         {{-- job responsibility  --}}
                  <h3 class="text-lg font-medium text-blue-600 pt-5">Job Responsibility</h3>

          <p class="text-gray-300 w-[80%] pt-5" >
            <ul class="list-disc list-inside ">
            @foreach (preg_split('/\r\n|\r|\n/',$job->responsibility) as $line)
                @if (!empty(trim($line)))
                 <li>{{trim($line)}}</li>   
                @endif
            @endforeach
            </ul>
            </p>
         {{-- job skills and requirement  --}}
                           <h3 class="text-lg font-medium text-blue-600 pt-5">Skills And Requirement</h3>
                   <p class="text-gray-300 w-[80%] pt-5" >
            <ul class="list-disc list-inside ">
            @foreach (preg_split('/\r\n|\r|\n/',$job->requirement_skills) as $line)
                @if (!empty(trim($line)))
                 <li>{{trim($line)}}</li>   
                @endif
            @endforeach
            </ul>
            </p>
                        

         {{-- job benefits  --}}
 <h3 class="text-lg font-medium text-blue-600 pt-5">Job Benefits</h3>
                          <p class="text-gray-300 w-[80%] pt-5" >
            <ul class="list-disc list-inside ">
            @foreach (preg_split('/\r\n|\r|\n/',$job->benefits) as $line)
                @if (!empty(trim($line)))
                 <li>{{trim($line)}}</li>   
                @endif
            @endforeach
            </ul>
            </p>
         
    </div>
    <x-forms.divider/>

    {{-- about company  --}}
    <div class="space-y-4">
    <h2 class="text-2xl font-medium text-blue-600 pt-6">About Company</h2>
    {{--  company description --}}
    <x-job-icon icon="building">{{ $job->employer['companySize'] }} </x-job-icon>
    <p class="text-gray-300 w-[80%]" >
        {{ $job->employer->company_description ?? 'No description available.' }}
    </p>

        <a href="{{ $job->url }}" class="text-md text-blue-600 flex gap-1 items-center hover:text-white group">Apply Now <x-job-icon icon="arrow-right" class="w-2 h-2 group-hover:text-white"/></a>

</div>

<x-forms.divider/>

<div class="space-x-2 pb-6">
    <h3 class="text-xl font-medium text-blue-600 py-5">Tags</h3>
    @foreach ($job->tags as $tag )
    <x-tag :$tag/>
@endforeach
</div>


</div>
</x-layout>