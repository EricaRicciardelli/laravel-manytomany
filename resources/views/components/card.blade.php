<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($game->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$game->name}}</h5>
      <p class="card-text">{{$game->description}}</p>
      <a href="{{route('games.show', compact('game'))}}" class="btn btn-primary">Show</a>
      <a href="{{route('games.edit', compact('game'))}}" class="btn btn-primary">Modifica</a>
      @foreach ($game->consoles as $console)
          <a href="{{route('console.games', compact('console'))}}">{{$console->name}}</a>
      @endforeach
    </div>
  </div>