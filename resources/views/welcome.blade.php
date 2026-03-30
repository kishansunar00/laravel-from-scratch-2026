<x-layout title="Home">
    <!-- This is used to display (dump/print) variable values  -->
    <h1>{{ $greeting }} {{ $person }}</h1>
    <p>
        This is the home page.
    </p>
    <div>
        {!! $html !!} <!-- is used to render the HTML as plain text -->
    </div>

    @if (count($ideas) > 0)
        <div>
            <h2>Ideas</h2>
            <ul>
                @foreach ($ideas as $idea)
                    <li>{{ $idea }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>