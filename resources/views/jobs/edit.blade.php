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
            <option value="Part Time" {{ old('schedule',$value) == "Part Time" ? 'selected' : '' }} >Part Time</option>
            <option value="Full Time" {{ old('schedule',$value) == "Full Time" ? 'selected' : '' }}>Full Time</option>
           </x-forms.select>
           <x-forms.select name="workType" label="Work Type" value="{{ $job->workType }}">
            <option >Select Work Type</option>
            <option > OnSite</option>
            <option >Hybrid</option>
            <option >Remote</option>
        </x-forms.select>
        <x-forms.select name="experienceLevel" label="Experience Level" value="{{ $job->experienceLevel }}">
    <option value="">Select Experience Level</option>
    <option value="internship">Internship</option>
    <option value="fresher">Fresher</option>
    <option value="entry-level">Entry Level</option>
    <option value="mid-level">Mid Level</option>
    <option value="senior">Senior / Experienced</option>
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
