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
</x-layout>