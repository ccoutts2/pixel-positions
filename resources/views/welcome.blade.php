<x-layout>
    <div class="space-y-10">
        <section class="pt-6 text-center">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="rounded-xl px-2 bg-white/5 border border-white/10 py-4 w-full max-w-xl" />
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <ul class="grid lg:grid-cols-3 gap-8">
                <li>
                    <x-job-card />
                </li>
                <li>
                    <x-job-card />
                </li>
                <li>
                    <x-job-card />
                </li>
            </ul>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <ul class="mt-6 space-x-1 flex">
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
                <li>
                    <x-tag>Tag</x-tag>
                </li>
            </ul>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <ul class="mt-6 space-y-6 block">
                <li>
                    <x-job-card-wide />
                </li>
                <li>
                    <x-job-card-wide />
                </li>
                <li>
                    <x-job-card-wide />
                </li>

            </ul>
        </section>

    </div>
</x-layout>
