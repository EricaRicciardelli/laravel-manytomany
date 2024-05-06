<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($games as $game)
                <div class="col-4">
                    <x-card :game="$game" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
