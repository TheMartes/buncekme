<x-layout>
    <h1>Miscellaneous</h1>
    <div class="flex flex-col w-full">
        @if (count($miscs))
            @foreach ($miscs as $misc)
                <a
                    href="/misc/{{ $misc['slug'] }}"
                    class="text-lg no-underline w-full flex justify-between [&:not(:last-child)]:border-b p-2"
                >
                    <span class="hover:text-blue-300 transition-all">{{ $misc['title'] }}</span>
                    <span class="text-sm text-gray-500 ml-2">{{ $misc['date'] }}</span>
                </a>
            @endforeach
        @else
            <span>No content here yet.</span>
        @endif
    </div>
</x-layout>
