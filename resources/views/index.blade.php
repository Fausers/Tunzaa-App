@extends('layouts.azam')

@section('content')

    <!-- Promo Block -->
    <section style="height: 700px" class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
        @foreach($sliders as $slider)
      <div class="divimage dzsparallaxer--target w-100 g-bg-pos-top-right " style="height: 120%;
      background-image: url({{$slider->image_url}});"></div>

      <div class="container g-py-100 ">
        <div class="row">

          <div class="col-md-10">
              <img style="width: 250px" src="/assets/images/USSD-code-.png">
              <h2 style="color: white; font-size: 70px;
              color: #ffcb08; letter-spacing: -7px;">
                  @php $title = explode(',',$slider->title) @endphp
                  {{$title[0]}}
                  @if(isset($title[1]))
                      <span class="blue">  {{$title[1]}}
                      </span>
                  @endif
              </h2>
              <h4 style="font-family: Montserrat;
                            margin-top: -20px;
                            font-size: 35px;" class="text-white">
                      <b>{{$slider->small_title}}</b>
              </h4>
              <br>
              <p style="font-family: Montserrat; font-size: 20px" class="text-white">
                   {!! $slider->desc !!}
              </p>

          </div>
        </div>
      </div>
            @endforeach
    </section>
    <!-- End Promo Block -->



    <!-- Icon Blocks -->
    <section id="offers-section" class="g-bg-secondary">
      <div class="container">
        <!-- Icon Blocks -->
          <div class="container" style="padding-top: 100px; padding-bottom: 100px">
        <div class="text-center mb-4">
            <h2 class="g-font-size-55" style="letter-spacing: -5px">
                <span class="blue mt-3">
                 @php $more = explode(',',$front->get_more) @endphp
                    {{$more[0]}} </span>
                @if(isset($more[1]))
                        <span class="yellow" >  {{$more[1]}}
                        </span>
                @endif
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card services-card mb-4" style="border-radius: 18px">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/images/Easy-payment-iconn.png" alt="icon" style="max-width: 100px" />
                        <br/>
                        <br/>
                        <h4 class="text-dark">{{$front->service1_title}}</h4>
                        <p class="text blue">
                            {{$front->service1_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4" style="border-radius: 18px">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/images/No-SIM-card-iconn.png" alt="icon" style="max-width: 100px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service2_title}}</h4>
                        <p class="text blue">
                            {{$front->service2_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4" style="border-radius: 18px">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/images/24-7-support-icon.png" alt="icon" style="max-width: 100px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service3_title}}</h4>
                        <p class="text blue">
                            {{$front->service3_desc}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card services-card mb-4" style="border-radius: 18px">
                    <div class="card-body">
                        <img src="{{url('/')}}/assets/images/Your-Bills-iconn.png" alt="icon" style="max-width: 100px" />
                        <br />
                        <br />
                        <h4 class="text-dark">{{$front->service4_title}}</h4>
                        <p class="text blue">
                            {{$front->service4_desc}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Icon Blocks -->
      </div>
    </section>
    <!-- End Icon Blocks -->


@endsection
