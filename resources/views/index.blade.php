<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <li>{{$job['title']}}: Pays {{$job['salary']}} per year.</li>
    @endforeach
</x-layout>