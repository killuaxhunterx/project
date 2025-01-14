<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>
    <x-forms.form method="POST" action="/jobs/create" enctype="multipart/form-data">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$50.000"/>
        <x-forms.input label="Location" name="location" placeholder="Florida"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>
                Part Time
            </option>
            <option>
                Full Time
            </option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://example.com/my-company"/>
        <x-forms.checkbox label="Feature (costs extra)" name="featured">Featured</x-forms.checkbox> 
        <x-forms.divider/>
        <x-forms.input label="Tag(comma separeted)" name="tags" placeholder="Front-end Developer, Backend-developer, ect..."/>
        <x-forms.button>Publish </x-forms.button>
    </x-forms.form>
</x-layout>