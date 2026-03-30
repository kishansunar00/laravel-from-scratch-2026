<x-layout title="Home">
    <!-- This is used to display (dump/print) variable values  -->
    <h1>{{ $greeting }} {{ $person }}</h1>
    <p>
        This is the home page.
    </p>
    <div>
        {!! $html !!} <!-- is used to render the HTML as plain text -->
    </div>
</x-layout>