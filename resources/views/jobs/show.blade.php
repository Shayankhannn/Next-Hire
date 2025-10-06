<x-layout>
    <x-page-heading>Job Details</x-page-heading>
<x-forms.divider/>

<div class="flex justify-between items-center pb-6" >
    <div>

        <h2 class="text-2xl font-medium text-blue-600">Company Name</h2>
        <h2 class="text-md font-medium text-gray-600">Employer Name</h2>
        <a href="" class="text-sm text-blue-600">Apply Now -></a>
    </div>
    <div >
        <img src="https://placehold.co/92x92"  alt="" class="h-auto w-24 rounded-full">
    </div>
</div>
<div class="">
    {{--  company description --}}
    <p class="text-gray-400 w-[80%]" >
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, ipsum voluptas! Dolore animi inventore veritatis, nesciunt placeat iste fugiat sequi.
    </p>
</div>
<div class="flex justify-between items-center mt-6">
    <div class="space-x-4 text-lg">
        <span class=" ">Location : {{ $job->location }}</span>
        <span class=" ">Salary : {{ $job->salary }}</span>
        <span class=" ">Schedule : {{ $job->schedule }}</span>
    </div>
    
</div>
<div class="space-x-2 pt-8">
    @foreach ($job->tags as $tag )
    <x-tag :$tag/>
@endforeach
</div>



</x-layout>