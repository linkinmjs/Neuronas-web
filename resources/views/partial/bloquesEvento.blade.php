
{{--<div>--}}
    {{--<h1>evento section</h1>--}}
    {{--@if (count($eventos) != 0)--}}
        {{--@foreach ( $eventos as $evento )--}}
            {{--<h1> {{ $evento->nombre }} </h1>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<h1> Ningun evento traido de DB </h1>--}}
    {{--@endif--}}
{{--</div>--}}

<div>
    @foreach( $eventos as $evento )

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="thumbnail">
                        <img src="{{URL::asset('images/nr.jpg')}}">
                    </a>
                </div>
                <div class="col-md-6">
                    <h1>{{ $evento->nombre }}</h1>
                    <p> {{ $evento->descripcion }}</p>
                </div>
            </div>
        </div>

    @endforeach
</div>

