@extends('layouts.azam')

@section('content')
    <div style="background-image: url('./new/img/Background Top.jpg'); background-size: cover;margin-top: 0px;overflow: hidden;">


        <div class="container" >

            <div class="mt-5">
                <div class="d-flex justify-content-start">
                    <h2 style="font-size: 55px; letter-spacing: -4px" class="mr-4">
                        <span class="yellow">
                            AZAM PESA
                        </span> <span class="text-white">TARIFFS</span>
                        <img style="width: 220px" src="/assets/images/USSD-code-.png">
                    </h2>
                </div>
            </div>

            <h2 class="text-white mb-4" style="letter-spacing: -3px">
                Ada za Wateja
            </h2>

            <div class="card tariff-body mb-4">
                <img src="{{$tariff_image->image}}">
            </div>

        </div>
    </section>
    </div>

@endsection
