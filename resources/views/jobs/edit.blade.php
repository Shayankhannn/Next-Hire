<x-layout>
        <x-page-heading>Edit Job : <span class="text-blue-600">{{$job->title}}</span></x-page-heading>
        <x-forms.divider/>
    <x-forms.form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')
            <x-forms.input name="title" type="text" label="Job Title" placeholder="e.g. Senior Laravel Developer" value="{{ $job->title }}"/>
            <x-forms.input name="salary" type="text" label="Job Salary" placeholder="e.g. $50,000" value="{{ $job->salary }}"/>
            <x-forms.input name="location" type="text" label="Job Location" placeholder="e.g.Boston MA, etc." value="{{ $job->location }}"/>
            <x-forms.select name="schedule" label="Job Type" :value="$job->schedule ">
             
                <option>Select Job Type</option>
                <x-forms.option value="Part Time" name="schedule" :selected="$job->schedule">Part Time</x-forms.option>
                <x-forms.option value="Full Time" name="schedule" :selected="$job->schedule">Full Time</x-forms.option>
            {{-- <option value="Full Time" {{ old('schedule',$selectedSchedule) == "Full Time" ? 'selected' : '' }}>Full Time</option> --}}
           </x-forms.select>
           <x-forms.select name="workType" label="Work Type" value="{{ $job->workType }}">
            <option >Select Work Type</option>
            <x-forms.option value="OnSite" name="workType" :selected="$job->workType">OnSite</x-forms.option>
            <x-forms.option value="Hybrid" name="workType" :selected="$job->workType">Hybrid</x-forms.option>
            <x-forms.option value="Remote" name="workType" :selected="$job->workType">Remote</x-forms.option>
        </x-forms.select>
        <x-forms.select name="experienceLevel" label="Experience Level" value="{{ $job->experienceLevel }}">
    <option value="">Select Experience Level</option>
            <x-forms.option value="internship" name="experienceLevel" :selected="$job->experienceLevel">Internship</x-forms.option>
            <x-forms.option value="fresher" name="experienceLevel" :selected="$job->experienceLevel">Fresher</x-forms.option>
            <x-forms.option value="entry-level" name="experienceLevel" :selected="$job->experienceLevel">Entry Level</x-forms.option>
            <x-forms.option value="mid-level" name="experienceLevel" :selected="$job->experienceLevel">Mid Level</x-forms.option>
            <x-forms.option value="senior" name="experienceLevel" :selected="$job->experienceLevel">Senior / Experienced</x-forms.option>
</x-forms.select>
        <x-forms.textarea name="description"   label="Job description " placeholder="Briefly describe the role and what the candidate will do. Keep it clear and engaging." value="{{ $job->description }}"/>
        <x-forms.textarea name="responsibility"  placeholder="List the key duties and responsibilities." label="Job responsibilities " placeholder="Write in detail about responsibilities..." value="{{ $job->responsibility }}"/>
        <x-forms.textarea name="requirement_skills"  placeholder="Mention the required skills, qualifications, or tools." label="Skills And Requirement " placeholder="Write in detail about Skills and Requirement..." value="{{ $job->requirement_skills }}"/>
        <x-forms.textarea name="benefits"   placeholder="List the perks or benefits offered for this role." label="Job Benefits " placeholder="Write in detail about Job Benefits..." value="{{ $job->benefits }}"/>

           
           <x-forms.divider/>
           <x-forms.input name="url" type="text" label="Company Url" placeholder="e.g. https://acme.com/jobs/ceo-wanted" value="{{ $job->url }}"/>  
           <x-forms.checkbox name="featured"  label="Feature (Costs Extra)" />
            <x-forms.input name="tags" type="text" label="Tags ( ,  Comma Separated )" placeholder="e.g. frontend , video , education" value="{{ $job->tags->pluck('name')->implode(', ') }}"/>
            <x-forms.button>Publish</x-forms.button>
            </x-forms.form>   
          
 
        </x-layout>
