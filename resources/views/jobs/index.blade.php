<x-layout>
<div class="space-y-10">

    {{-- search  --}}
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl capitalize">Let's find your next job</h1>
        
        <x-forms.form action="/search"  class="mt-6 ">
            <x-forms.input name="q" placeholder="Web Developer... " :label="false" />
        </x-forms.form>
    </section>

    {{-- job card  --}}
    <section class="pt-10">
    
<x-section-heading>Featured Jobs</x-section-heading>

     
<div class="grid lg:grid-cols-3 gap-8 mt-6">
@foreach ($featuredjobs as $job )
            <x-job-card :$job/> 
                
            @endforeach

</div>

    
</section>
{{-- tags --}}
<section>
    <x-section-heading>tags</x-section-heading>

    <div class="mt-6 space-x-1">
        
   @foreach ($tags as $tag )
       <x-tag :$tag/>
   @endforeach

    </div>
</section>

{{-- jobs wide  --}}
<section>
    <x-section-heading>Recent Jobs</x-section-heading>

        <div class="mt-6 space-y-6">
            @foreach ($jobs as $job )
            <x-job-card-wide :$job/> 
                
            @endforeach
             

        </div>
</section>
</div>
</x-layout>