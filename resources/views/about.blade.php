@extends('layouts.azam')

@section('content')

    <section style="background-image: url('{{$about->image}}');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat">
        <div class="container" style="padding-top: 100px; padding-bottom: 50px">
            <div class="my-5">
                <div class="d-flex justify-content-start">
                    <h2 class="mr-4 g-font-size-55" style="letter-spacing: -4px">
                        <span class="text-white">
                            @php $my_about = explode(',',$about->title) @endphp
                                {{$my_about[0]}} </span> <span class="yellow">
                            @if(isset($my_about[1]))
                                <span >  {{$my_about[1]}}
                                </span>
                            @endif
                        </span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h4 style="font-size: 28pt; font-weight: 500; color: #FFCC00">
                        {{$about->head}}
                    </h4>
                    <br>
                    <p class="text text-white" style="font-size: 13pt; padding-bottom: 50px">
                        {!!$about->text_1!!}
                        <br><br>
                        {!!$about->text_2!!}
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
{{--                    <img src="./new/img/africanwoman.png" class="about-woman">--}}
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('./new/img/Background Top.jpg'); background-size: cover">
        <div class="container" style="padding-top: 100px; padding-bottom: 100px">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h2 class="mr-4 g-font-size-55" style="letter-spacing: -4px">
                         <span class="yellow">
                            @php $service = explode(',',$about->title_low) @endphp
                                {{$service[0]}} </span>
                            @if(isset($service[1]))
                                <span class="text-white">  {{$service[1]}}
                                </span>
                            @endif
                    </h2>
                    <br>
                    <p class="text" style="color: white !important; font-size: 13pt">
                        {!!$about->text_low_1!!}
                        <br><br>
                        {!!$about->text_low_2!!}
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <img src="./new/img/white.png" class="azam-icons" style="max-width: 400px">
                </div>
            </div>
        </div>
    </section>
@endsection
