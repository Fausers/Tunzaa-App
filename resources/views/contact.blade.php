@extends('layouts.azam')
@php
$other = App\Models\Azam\Other::first();
@endphp
@section('content')
<div style="background-image: url('./new/img/Background Top.jpg'); background-size: cover;margin-top: 0px;overflow: hidden;">
    <div class="container" >
            <div class="my-5">
                <div class="d-flex">
                    <h2 class="mr-4 g-font-size-55" style="letter-spacing: -4px">
                        <span class="yellow">
                            @php $head = explode(',',$other->contact_head) @endphp
                              {{$head[0]}}</span><br>
                              @if(isset($head[1]))
                                  <span class="text-white">  {{$head[1]}}
                                  </span>
                              @endif
                    </h2>
                </div>
                <br>
                <p class="" style="font-size: 15pt; color: white">
                    {!! $other->contact_text !!}
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="tariff-body" style="background: white; padding: 30px; margin-bottom: 70px">
                        <form>
                            <div class="form-group">
                                <label class="blue">{{$other->contacts_name}}</label>
                                <input name="contact_name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="blue">{{$other->contacts_mail}}</label>
                                <input name="contact_mail" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="blue">{{$other->contacts_phone}}</label>
                                <input name="contact_phone" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="blue">{{$other->contacts_message}}</label>
                                <textarea name="contact_message" id="" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="contact-button">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <a href="tel:{!! $other->phone !!}">
                                <img class="g-height-50" src="{{url('/')}}/assets/images/1/Call us.svg">
                            </a>
                        </div>
                        <div class="col-6">
                            <table>
                                <thead>
                                <tr>
                                    <td class="g-font-size-36">
                                        <i class="icon icon-location-pin yellow "></i>
                                    </td>
                                    <td>
                                        <p class="color-white">
                                            {!! $other->address !!}
                                        </p>
                                    </td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 g-hidden-sm-down">
                    <img src="{{url('/')}}/{{$other->contacts_image}}" class="woman-calling">
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
