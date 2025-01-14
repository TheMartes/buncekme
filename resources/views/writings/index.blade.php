<x-layout>
    <h1>Writings</h1>
    <ul>
        @foreach ($writings as $writing)
            <li><a href="/writing/{{ $writing['slug'] }}">{{ $writing['title'] }}</a></li>
        @endforeach
    </ul>
</x-layout>
