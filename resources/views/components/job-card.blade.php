@props(['job'])

<x-panel>
    <span class="self-start text-sm">{{ $job->employer->name }}</span>
    <div class="py-8 text-center">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300"><a href="{{$job->url}}" target="_blank">{{ $job->title }}</a></h3>
        <p class="mt-4 text-sm">{{ $job->type }} - From {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <ul class="flex gap-2">
            @foreach ($job->tags as $tag )
            <li>
                <x-tag size="small" :$tag />
            </li>
            @endforeach
        </ul>
        <div>
            <x-employer-logo :width="42" :employer="$job->employer" />
        </div>
    </div>
</x-panel>
