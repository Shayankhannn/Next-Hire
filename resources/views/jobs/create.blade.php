<x-layout>
        <x-page-heading>Create a Job</x-page-heading>
        <x-forms.divider/>
    <x-forms.form method="POST" action="/jobs">
            
            <x-forms.input name="title" type="text" label="Job Title" placeholder="e.g. Senior Laravel Developer" required/>
            <x-forms.input name="Salary" type="text" label="Job Salary" placeholder="e.g. $50,000" required/>
            <x-forms.input name="location" type="text" label="Job Location" placeholder="e.g.Boston MA, etc." required/>
            <x-forms.input name="url" type="text" label="Company Url" placeholder="e.g. https://acme.com/jobs/ceo-wanted" required/>
            
            <x-forms.input name="tags" type="text" label="Tags <small>Comma Separated***</small>" placeholder="e.g. frontend , video , education" required/>
     
            <x-forms.button>Publish</x-forms.button>
            </x-forms.form>    
        </x-layout>
