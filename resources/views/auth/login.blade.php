<x-layout>
    <x-page-heading class="font-bold text-center text-4xl mb-8"> Login</x-page-heading>
    <x-forms.form method="POST" action="/login" >
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.button> Log in </x-forms.button>
    </x-forms.form>
</x-layout>        
