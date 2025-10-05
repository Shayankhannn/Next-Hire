<x-layout>
    <x-page-heading>Register</x-page-heading>
    
<x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input label="Name" name="name"/>
    <x-forms.input label="Email" name="email" type="email"/>
    <x-forms.input label="Password" name="password" type="password"/>
    <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>
    
    <x-forms.divider/>
    <x-forms.input label="Employer Name" name="employer"/>
    <x-forms.input label="Employer Logo" name="logo" type="file"/>
    
        
    <x-forms.button>Create Account</x-forms.button>
        <a href="/login" class="text-blue-600 hover:text-white group"> Have an account ?? <b class=" text-red-600 group-hover:text-white">Login</b></a>

</x-forms.form>
</x-layout>














