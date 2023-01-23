@php
$other = App\Models\Azam\Other::first();
@endphp
<header id="js-header"
        class="u-header u-header--static--lg u-header--show-hide--lg u-header--change-appearance--lg"
        data-header-fix-moment="500" data-header-fix-effect="slide">
      <div style="background-color: #00a6bc !important; box-shadow: 1px 1px 25px #000000;"
           class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10" data-header-fix-moment-exclude="g-bg-white g-py-10" data-header-fix-moment-classes="g-bg-white-opacity-0_7 u-shadow-v18 g-py-0">

          <nav class="js-mega-menu navbar navbar-expand-lg">

            <div class="container">

                <!-- Logo -->
                <a href="{{url('/')}}" class="navbar-brand">
                  <img style="height: 50px" class="mt-2" src="{{url('/')}}/assets/images/2/AzamPesa-logo.png" alt="Azam Pesa Logo">
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg"
                     id="navBar" >
                  <ul style="font-family: Montserrat" class="navbar-nav ml-auto text-uppercase g-font-weight-600 u-main-nav-v1 u-sub-menu-v1">

                      <li  class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg {{ Request::is('/') ? 'active' : null }}">
                          <a  href="{{url('/')}}" class="nav-link" style="color:{{ Request::is('/') ? '#00a6bc' : 'white' }} ">
                              Shop
                          </a>
                      </li>

                      @if(!isset(Auth::user()->id))
                          <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                              <a href="{{url('/login')}}" class="nav-link" style="color:{{ Request::is('contact') ? '#00a6bc' : 'white' }} ">
                                  Login <i class="icon-user"></i>
                              </a>
                          </li>

                          <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                              <a href="{{url('/register')}}" class="nav-link" style="color:{{ Request::is('contact') ? '#00a6bc' : 'white' }} ">
                                  Register <i class="icon-user-female"></i>
                              </a>
                          </li>
                      @else
                          <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg">
                              <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-responsive-nav-link>
                                </form>
                          </li>
                      @endif


                  </ul>

                </div>
            </div>
            <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                  <span class="hamburger hamburger--slider">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                  </span>
                </button>
              <!-- End Responsive Toggle Button -->
        </nav>
      </div>
</header>
