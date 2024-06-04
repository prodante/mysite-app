<x-layout>
<x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
                <a href="jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline block px-4 py-6 border border-gray-200">
                    {{$job['title']}}: Pays {{$job['salary']}} per year.
                </a>
        @endforeach
    </div>
</x-layout>