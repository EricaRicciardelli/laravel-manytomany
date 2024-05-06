<x-layout>
    <div class="container">
        <div class="row">
            <h1>{{$console->name}}</h1>
            @foreach ($console->games as $game)
                <div class="col-3">
                    <x-card :game="$game" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>