@extends("layout.layout")

@section("body")

    <img id="head-tittle" src="{{asset('images/neurona_font.png')}}">

    <div class="row">
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-8">
                    @include("components.event")
                </div>

                <div class="col-xs-4">
                    <div class="related-events">
                        @for ($i = 0; $i < 2; $i++)
                        <div class="related-event">
                            <h4 class="related-event__title">Otro evento</h4>
                            <img class="related-event__image" src="{{ asset('images/afiche.jpg') }}" alt="..."/>
                        </div>
                        @endfor

                        <a class="related-events__link" href="#">
                            Ver más
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-3">
            <!-- Sidebar -->
        </div>
    </div>
@endsection