<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input name="q" placeholder="Web Developer..." :label="false" />
            </x-forms.form>

        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <ul class="grid lg:grid-cols-3 gap-8">
                @foreach ($featuredJobs as $job)
                <li>
                    <x-job-card :$job />
                </li>
                @endforeach

            </ul>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <ul class="mt-6 space-x-1 flex">
                @foreach ($tags as $tag )
                <li>
                    <x-tag :$tag />
                </li>
                @endforeach
            </ul>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <ul class="mt-6 space-y-6 block">
                @foreach ($jobs as $job)
                <li>
                    <x-job-card-wide :$job />
                </li>
                @endforeach

            </ul>
        </section>

    </div>
</x-layout>
