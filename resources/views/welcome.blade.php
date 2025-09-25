<x-layout>
<div class="space-y-10">

    {{-- search  --}}
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl capitalize">Let's find your next job</h1>
        
        <form action="" method="get" class="mt-6 ">
            <input type="text" placeholder="Web Developer...." class="rounded-xl bg-white/5 border border-white/10 w-full max-w-xl px-5 py-4 ">
        </form>
  
    </section>

    {{-- job card  --}}
    <section class="pt-10">
    
<x-section-heading>Featured Jobs</x-section-heading>

     
<div class="grid lg:grid-cols-3 gap-8 mt-6">

<x-job-card/>
<x-job-card/>
<x-job-card/>

</div>

    
</section>
{{-- tags --}}
<section>
    <x-section-heading>tags</x-section-heading>

    <div class="mt-6 space-x-1">
        
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>
    <x-tag>Tag</x-tag>

    </div>
</section>

{{-- jobs wide  --}}
<section>
    <x-section-heading>Recent Jobs</x-section-heading>

        <div class="mt-6 space-y-6">
            <x-job-card-wide/> 
            <x-job-card-wide/> 
            <x-job-card-wide/> 

        </div>
</section>
</div>
</x-layout>