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
           
            <x-forms.input name="url" type="text" label="Company Url" placeholder="e.g. https://acme.com/jobs/ceo-wanted" />  
            <x-forms.checkbox name="featured"  label="Feature (Costs Extra)" />
            
            <x-forms.divider/>
            <x-forms.input name="tags" type="text" label="Tags ( ,  Comma Separated)" placeholder="e.g. frontend , video , education" />
            <x-forms.button>Publish</x-forms.button>
            </x-forms.form>   
          
 
        </x-layout>
