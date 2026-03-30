<x-layout title="Idea">
    <h1>Idea Page</h1>
    <p>
        This is the idea page.
    </p>

    <form action="/ideas" method="post">
        @csrf
        <!-- Cross Site Request Forgey -->
        <div class="mb-4">
            <label for="idea">Idea</label>
            <textarea name="idea" id="idea" rows="3"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Submit</button>
    </form>

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