 <x-layout>
    <x-page-heading>Login</x-page-heading>
    
<x-forms.form method="POST" action="/login" >
    <x-forms.input label="Email" name="email" type="email"/>
    <x-forms.input label="Password" name="password" type="password"/>
    
   
        
    <x-forms.button>Login</x-forms.button>
    <a href="/register" class="text-blue-600 hover:text-white group">Don't Have an account ?? <b class=" text-red-600 group-hover:text-white">Register</b></a>
</x-forms.form>
</x-layout>














