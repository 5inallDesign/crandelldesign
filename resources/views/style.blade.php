<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        @include('layouts.head')
        {!! Analytics::render() !!}
    </head>
    <body>
        <div class="container-fluid page">

            <header class="style-header">
                <div class="logo-container">
                    <img src="{{url('/img/crandell-design-wordmark.svg')}}" alt="Crandell Design" class="img-responsive">
                </div>
            </header>

            <div class="content">

                <div class="row">
                    <div class="col-sm-6">
                        <h1>Color Palette</h1>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="color-swatch swatch1">
                                    Apple<br>
                                    #4cb848
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch2">
                                    De York<br>
                                    #82cd7f
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch3">
                                    Goblin<br>
                                    #358132
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch4">
                                    San Marino<br>
                                    #4759a7
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch5">
                                    Ship Cove<br>
                                    #7685c5
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="color-swatch swatch6">
                                    Rhino<br>
                                    #303c71
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h1>Buttons</h1>

                        <button class="btn btn-lg btn-apple">This is a large button</button>&nbsp;

                        <div class="visible-xs-block margin-bottom-10"></div>

                        <button class="btn btn-sanmarino">This is another smaller button</button>

                        <hr class="visible-xs-block">

                    </div>
                    <div class="col-sm-6">
                        <h1>Typography</h1>

                        <h1>Heading 1</h1>
                        <p class="details">Font: Aileron / San Marino #4759a7</p>

                        <hr>

                        <h2>Heading 2</h2>
                        <p class="details">Font: Aileron / Goblin #358132</p>

                        <hr>

                        <h3>Heading 3</h3>
                        <p class="details">Font: Aileron / Black #252525</p>

                        <hr>

                        <p>Body Text</p>
                        <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                        <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                        <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

                        <p class="details">Font: Aileron / Black #252525</p>
                    </div>
                </div>

            </div>
            <div class="corner-art top-left"></div>
            <div class="corner-art top-right"></div>
            <div class="corner-art bottom-left"></div>
            <div class="corner-art bottom-right"></div>
        </div>

        <script type="text/javascript" src="{{ elixir('js/default.js') }}"></script>
        @include('layouts.footer')
        @yield('scripts')
    </body>
    
</html>