<x-layout>
    <div class="capitalize">
    <x-page-heading>Job Details</x-page-heading>
<x-forms.divider/>
<div class="flex justify-between items-center pb-6" >
    <div class="space-y-2">


        {{-- <h2 class="text-2xl font-medium text-blue-600">Company Name</h2> --}}
        <h2 class="text-3xl font-medium text-blue-600 capitalize"><x-job-icon icon="building-2" class="w-7 h-7"> {{ $job->employer->name }} </x-job-icon></h2>
        <h2 class="text-lg font-medium text-gray-400 capitalize"><x-job-icon class="text-gray-400 w-2 h-2" icon="user"> {{ $job->employer->name }} </x-job-icon></h2>
         <x-job-icon icon="map-pin">Location: {{ $job->location }} </x-job-icon>


    </div>
    <div >
        <img src="https://placehold.co/92x92"  alt="" class="h-auto w-24 rounded-full">
    </div>
</div>
<x-forms.divider/>


    <div class="gap-2 text-md flex items-center mt-6 justify-between">
        <x-job-icon icon="wallet">Salary: {{ $job->salary }} </x-job-icon>
        <x-job-icon icon="clock">Job Type: {{ $job->schedule }} </x-job-icon>
        <x-job-icon icon="briefcase">Work Type: Remote </x-job-icon>
        <x-job-icon icon="clock">Date Posted: {{ $job->created_at->diffForHumans() }} </x-job-icon>

    </div>
<x-forms.divider/>

    <div class="mt-4">
        {{-- job title  --}}
        <h2 class="text-2xl font-medium text-blue-600 ">{{$job->title}}</h2>
         {{-- job description  --}}
         {{-- <h3 class="text-lg font-medium text-blue-600">Job Description</h3> --}}
            <p class="text-gray-300 w-[80%] pt-5" >
                {{-- {{$job->description}} --}}
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati exercitationem eum nisi ipsa? Illum repellendus vitae dignissimos possimus omnis, voluptate nesciunt aut veritatis, amet accusantium asperiores quaerat cum, sit hic!
            </p>
         {{-- job responsibility  --}}
                  <h3 class="text-lg font-medium text-blue-600 pt-5">Job Responsibility</h3>

          <p class="text-gray-300 w-[80%] pt-5" >
                {{-- {{$job->responsibility}} --}}
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis voluptatem fuga adipisci corporis sunt blanditiis. Delectus eligendi tempore voluptatibus necessitatibus voluptatum natus laborum dicta odit ea, temporibus ullam deleniti voluptates!
            </p>
         {{-- job skills and requirement  --}}
                           <h3 class="text-lg font-medium text-blue-600 pt-5">Skills And Requirement</h3>

         {{-- job benefits  --}}
                           {{-- <h3 class="text-lg font-medium text-blue-600 pt-5"></h3> --}}

         
    </div>
    <x-forms.divider/>

    {{-- about company  --}}
    <div class="space-y-4">
    <h2 class="text-2xl font-medium text-blue-600 pt-6">About Company</h2>
    {{--  company description --}}
    <p class="text-gray-300 w-[80%]" >
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, ipsum voluptas! Dolore animi inventore veritatis, nesciunt placeat iste fugiat sequi.
    </p>
            <x-job-icon icon="building-2">Employees: {{ $job->created_at->diffForHumans() }} </x-job-icon>

        <a href="{{ $job->url }}" class="text-md text-blue-600 flex gap-1 items-center hover:text-white group">Apply Now <x-job-icon icon="arrow-right" class="w-2 h-2 group-hover:text-white"/></a>

</div>


<div class="space-x-2 pt-8">
    @foreach ($job->tags as $tag )
    <x-tag :$tag/>
@endforeach
</div>


</div>
</x-layout>