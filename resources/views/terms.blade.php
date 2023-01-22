@extends('layouts.azam')

@section('content')
    <div style="background-image: url('./new/img/Background Top.jpg'); background-size: cover;margin-top: 0px;overflow: hidden;">


        <div class="container" >

            <div class="mt-5">
                <div class="d-flex justify-content-start">
                    <h2 style="font-size: 55px; letter-spacing: -4px" class="mr-4">
                        <span class="yellow">
                            AZAM PESA
                        </span><br> <span class="text-white">Terms and Conditions</span>
                    </h2>
                </div>
            </div>

            <h2 class="text-white mb-4" style="letter-spacing: -3px">
            </h2>

            <div class="card tariff-body mb-4">
                <div class="card-body">
                    <div class="">
                        <h5 class="blue">
                        </h5>
                        <div class="">
                            <div>
                                {!! $terms->terms !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>

@endsection
