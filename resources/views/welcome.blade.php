<x-layout title="Home">
    <!-- This is used to display (dump/print) variable values  -->
    <h1>{{ $greeting }} {{ $person }}</h1>
    <p>
        This is the home page.
    </p>
    <div>
        {!! $html !!} <!-- is used to render the HTML as plain text -->
    </div>

    @if ($ideas->count())
        <div class="mt-4 mb-5">
            <h2>Ideas</h2>
            <ul class="list-disc list-inside">
                @foreach ($ideas as $idea)
                    <li>{{ $idea->description }}</li>
                @endforeach
            </ul>
        </div>
        <a href="/delete-ideas" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete Ideas</a>
    @endif
</x-layout>