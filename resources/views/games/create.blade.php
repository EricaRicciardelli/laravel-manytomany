<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('games.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="nome" value="{{old('nome')}}">
                      @error('nome')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Descrizione</label>
                      <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="descrizione" value="{{old('descrizione')}}">
                      @error('descrizione')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="img" class="form-label">Immagine</label>
                      <input type="file" class="form-control" id="img" name="immagine">
                      @error('immagine')
                          <p>{{$message}}</p>
                      @enderror
                    </div>
                        <div class="row">
                            @foreach ($consoles as $console)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$console->id}}" name="consoles[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  {{$console->name}}
                                </label>
                              </div>
                            @endforeach
                        </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>