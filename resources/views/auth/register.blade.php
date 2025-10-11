<x-layout>
    <x-page-heading>Register</x-page-heading>
    
<x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input label="Name" name="name"/>
    <x-forms.input label="Email" name="email" type="email"/>
    <x-forms.input label="Password" name="password" type="password"/>
    <x-forms.input label="Confirm Password" name="password_confirmation" type="password"/>
    
    <x-forms.divider/>
    <x-forms.input label="Employer Name" name="employer"/>
    <x-forms.input label="company Name" name="company_name"/>
    <x-forms.textarea label="company description" helperText="" placeholder="Write in detail about your Company..." name="company_description"/>
  <x-forms.select name="companySize" label="Number of Employees">
    <option >Select Company Size</option>
    <option value="1-10 (Startup / Small)">1–10 (Startup / Small)</option>
    <option value="11-50 (Small to Medium)">11–50 (Small to Medium)</option>
    <option value="51-200 (Medium)">51–200 (Medium)</option>
    <option value="201-500 (Large)" >201–500 (Large)</option>
    <option value="500+ (Enterprise)">500+ (Enterprise)</option>
</x-forms.select>
    <x-forms.input label="Company Logo" name="logo" type="file"/>
    
        
    <x-forms.button>Create Account</x-forms.button>
        <a href="/login" class="text-blue-600 hover:text-white group"> Have an account ?? <b class=" text-red-600 group-hover:text-white">Login</b></a>

</x-forms.form>
</x-layout>














