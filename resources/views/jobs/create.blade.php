<x-layout>
        <x-page-heading>Create a Job</x-page-heading>
        <x-forms.divider/>
    <x-forms.form method="POST" action="/jobs">
            
            <x-forms.input name="title" type="text" label="Job Title" placeholder="e.g. Senior Laravel Developer" />
            <x-forms.input name="salary" type="text" label="Job Salary" placeholder="e.g. $50,000" />
            <x-forms.input name="location" type="text" label="Job Location" placeholder="e.g.Boston MA, etc." />
            <x-forms.select name="schedule" label="Job Type" >
                <option >Select Job Type</option>
            <option >Part Time</option>
            <option >Full Time</option>
           </x-forms.select>
           <x-forms.select name="workType" label="Work Type" >
            <option >Select Work Type</option>
            <option > OnSite</option>
            <option >Hybrid</option>
            <option >Remote</option>
        </x-forms.select>
        <x-forms.select name="experienceLevel" label="Experience Level">
    <option value="">Select Experience Level</option>
    <option value="internship">Internship</option>
    <option value="fresher">Fresher</option>
    <option value="entry-level">Entry Level</option>
    <option value="mid-level">Mid Level</option>
    <option value="senior">Senior / Experienced</option>
</x-forms.select>
        <x-forms.textarea name="description"   label="Job description " placeholder="Briefly describe the role and what the candidate will do. Keep it clear and engaging." />
        <x-forms.textarea name="responsibility"  placeholder="List the key duties and responsibilities." label="Job responsibilities " placeholder="Write in detail about responsibilities..." />
        <x-forms.textarea name="requirement_skills"  placeholder="Mention the required skills, qualifications, or tools." label="Skills And Requirement " placeholder="Write in detail about Skills and Requirement..." />
        <x-forms.textarea name="benefits"   placeholder="List the perks or benefits offered for this role." label="Job Benefits " placeholder="Write in detail about Job Benefits..." />

           
           <x-forms.divider/>
           <x-forms.input name="url" type="text" label="Company Url" placeholder="e.g. https://acme.com/jobs/ceo-wanted" />  
           <x-forms.checkbox name="featured"  label="Feature (Costs Extra)" />
            <x-forms.input name="tags" type="text" label="Tags ( ,  Comma Separated)" placeholder="e.g. frontend , video , education" />
            <x-forms.button>Publish</x-forms.button>
            </x-forms.form>   
          
 
        </x-layout>
