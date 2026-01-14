@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" class="rounded-xl w-full h-full" alt="" width={{ $width }} />
