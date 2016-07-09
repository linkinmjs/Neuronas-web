@extends('layout.main-navbar')

@section('contenido')
    <div class="container">
        <header>
            <div class="support-note"><!-- let's check browser support with modernizr -->
                <span class="no-cssanimations">CSS animations are not supported in your browser</span>
                <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
                <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
                <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
                <span class="note-ie">Sorry, only modern browsers.</span>
            </div>
        </header>

        <div id="vc-container" class="vc-container">
            <div class="vc-tape-wrapper">
                <div class="vc-tape">
                    <div class="vc-tape-back">
                        <div class="vc-tape-wheel vc-tape-wheel-left">
                            <div></div>
                        </div>
                        <div class="vc-tape-wheel vc-tape-wheel-right">
                            <div></div>
                        </div>
                    </div>
                    <div class="vc-tape-front vc-tape-side-a">
                        <span>A</span>
                    </div>
                    <div class="vc-tape-front vc-tape-side-b">
                        <span>B</span>
                    </div>
                </div>
            </div>
            <div class="vc-loader"></div>
        </div><!-- //vc-container -->
    </div><!-- //container -->
@endsection
