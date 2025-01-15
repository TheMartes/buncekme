<x-layout>
    <h1>Writing</h1>
    <div class="flex flex-col w-full">
        @foreach ($writings as $writing)
            <a
                href="/writing/{{ $writing['slug'] }}"
                class="text-lg no-underline w-full flex justify-between [&:not(:last-child)]:border-b p-2"
            >
                <span class="hover:text-blue-300 transition-all">{{ $writing['title'] }}</span>
                <span class="text-sm text-gray-500 ml-2">{{ $writing['date'] }}</span>
            </a>
        @endforeach
    </div>
</x-layout>
