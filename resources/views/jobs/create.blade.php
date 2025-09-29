<x-layout>
        <x-page-heading>Create a Job</x-page-heading>
        <x-forms.divider/>
    <div class=" max-w-2xl mx-auto">
        <form method="POST" action="/jobs" class=" space-y-6" enctype="multipart/form-data">
            @csrf
            <x-forms.input name="title" type="text" label="Job Title" placeholder="e.g. Senior Laravel Developer" required/>
            <x-forms.input name="company" type="text" label="Company Name" placeholder="e.g. Acme Corp" required/>
            <x-forms.input name="location" type="text" label="Job Location" placeholder="e.g. Remote, Boston MA, etc." required/>
            <x-forms.input name="email" type="email" label="Contact Email" placeholder="e.g.
</x-layout>