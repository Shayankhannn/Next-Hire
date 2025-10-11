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
        <x-forms.textarea name="description" helperText="Briefly describe the role and what the candidate will do. Keep it clear and engaging."  label="Job description " placeholder="Write a detailed job description..." />
        <x-forms.textarea name="responsibility" helperText="List the key duties and responsibilities. Add each point on a new line or separated with comma ' , '"  label="Job responsibilities " placeholder="Write in detail about responsibilities..." />
        <x-forms.textarea name="requirement_skills" helperText="Mention the required skills, qualifications, or tools. Add each item on a new line or separated with comma ' , '"  label="Skills And Requirement " placeholder="Write in detail about Skills and Requirement..." />
        <x-forms.textarea name="benefits"  helperText="List the perks or benefits offered for this role. Add each benefit on a new line or separated with comma ' , '"  label="Job Benefits " placeholder="Write in detail about Job Benefits..." />
                {{-- <x-forms.textarea name="extra" helperText="Briefly describe the role and what the candidate will do. Keep it clear and engaging."  label="Job description " placeholder="Write a detailed job description..." /> --}}

           
           <x-forms.divider/>
           <x-forms.input name="url" type="text" label="Company Url" placeholder="e.g. https://acme.com/jobs/ceo-wanted" />  
           <x-forms.checkbox name="featured"  label="Feature (Costs Extra)" />
            <x-forms.input name="tags" type="text" label="Tags ( ,  Comma Separated)" placeholder="e.g. frontend , video , education" />
            <x-forms.button>Publish</x-forms.button>
            </x-forms.form>   
          
 
        </x-layout>
