@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>  
            <a href="{{$job->url}}" target="_blank">
                <h3 class="group-hover:text-blue-600 text-xl mt-3 font-bold transition-colors duration-500">{{$job->title}}</h3>
            </a> 
            <p class="text-gray-400 text-sm mt-auto">{{$job->salary}}</p>
    </div>        
    <div> 
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small">Backend</x-tag>
            @endforeach
        </div>
    </div>
</x-panel>