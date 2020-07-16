@foreach ($ideias as $ideia)
    <div class="idea">
        <div class="icon-idea">
            <img src="{{$ideia->image}}">
        </div>
        <div class="content">
            <h3>{{$ideia->title}}</h3>
            <p>{{$ideia->category}}</p>
            <div class="description">
                {{$ideia->description}}
            </div>
            <a href="{{$ideia->link}}" target="__blank">Ir para a Ideia</a>
        </div>
    </div>
@endforeach 