<x-layout>
    <h1 class="font-gen text-center display-1">Dashboard Revisore</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                @foreach($articles as $article)                
                @if($article->is_accepted === null)
                <div class="accordion" id="accordionExample">   
                    <div class="accordion-item bg-form">
                        <h2 class="accordion-header rounded">
                            <button class="font-taglia accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$article->id}}" aria-expanded="false" aria-controls="collapse{{$article->id}}">
                                {{$article->title}}
                            </button>
                        </h2>
                        <div id="collapse{{$article->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body rounded">
                                <p class="font-taglia">{{$article->description}}</p>
                                <p class="font-taglia"><small>Inserito il: {{$article->created_at->format('d/m/Y')}}</small></p>
                                <p class="font-taglia"><small>Inserito da: {{$article->user->name}}</small></p>
                                <a href="{{route('revisor.show', $article)}}" class="btn card-button">Dettaglio</a>
                                {{-- <a href="{{route('revisor.show', $article_to_check)}}" class="btn card-button">Dettaglio</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif               
                @endforeach
                
                {{-- @if($article)
                <div>
                    <h4 class="text-center font-gen">Non ci sono articoli da revisionare</h4>
                </div>   --}}
                
            </div>
        </div>
    </div>
</x-layout>    