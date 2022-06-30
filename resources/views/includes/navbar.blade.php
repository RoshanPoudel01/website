
<section class="introduction">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                        <img width="40%" height="40%" src="{{asset('assets/image/logo.png')}}" class="img-responsive" alt="logo">
                            </div>
                            <div class="col-md-8 intro">
                                <p class="government">Government of Nepal</p>
                                <p class="name">Ministry of Health and Population </p>

                            </div>
                            <div class="col-md-1">
                                <img src="{{asset('assets/image/nepal_flag.gif')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script> --}}

</section>
                <!-- <section class="top-bar"> -->
                    <!-- <div class="top-content"> -->
                        <div class="navigationmain">
                            <div class="navsection">
                                <div class="navstarts">
                                    <div id="header-area" class="header_area">
                        <div class="header_bottom">
                            <div class="">
                                <div class="">
                                    <nav role="navigation" class="navbar navbar-default mainmenu">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <!-- Collection of nav links and other content for toggling -->
                                        <div id="navbarCollapse" class="collapse navbar-collapse ">
                                            <ul id="fresponsive" class="nav navbar-nav dropdown">
                                                <li><a href="{{route('welcome')}}">Home</a></li>
                                                <li><a href="{{route('governanc')}}">Governance</a></li>

                                                <li ><a href="{{route('infrastructures')}}">Infrastructure</a></li>
                                            @foreach ($menu['rows'] as $menus )
                                                <li  class="dropdown">
                                                    <a  data-toggle="dropdown" class="dropdown">{{("$menus->menu_category")}}<span class="caret"></span></a>
                                                    @if (! $menus->subcategory->isEmpty())

                                                    <ul class="dropdown-menu">
                                                        @foreach ($menus->subcategory as $subs )
                                                        <li><a href="{{route('subcategory.show',['menu_sub_category'=>$subs->menu_sub_category])}}">{{("$subs->menu_sub_category")}}</a></li>
                                                        {{-- <li><a href="#">{{("$subs->menu_sub_category")}}</a></li> --}}

                                                        @endforeach
                                                    </ul>
                                                    @endif

                                                </li>
                                                @endforeach



                                              {{--   <li class="dropdown"><a data-toggle="dropdown" href="{{route('appandservices')}}" class="dropdown-toggle">Applications and Services <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('appandservices')}}">Digital Health Platform</a></li>
                                                        <li><a href="{{route('appandservices')}}"> Next Generation Health Facility</a></li>
                                                        <li><a href="{{route('appandservices')}}">Electronic Health Record 2.0</a></li>
                                                        <li><a href="{{route('appandservices')}}">not given</a></li>
                                                        <li><a href="{{route('appandservices')}}">e- Maternal Care</a></li>
                                                        <li><a href="{{route('appandservices')}}">not given</a></li>
                                                        <li><a href="{{route('appandservices')}}">Centralized Telemedicine</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="{{route('standard')}}" data-toggle="dropdown" class="dropdown-toggle">Standard, Interoperability and Regulation <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('standard')}}"> Government Enterprise Architecture</a></li>
                                                        <li><a href="{{route('standard')}}">OpenHIE</a></li>
                                                        <li><a href="{{route('standard')}}">HL7 FHIR</a></li>
                                                        <li><a href="{{route('standard')}}">Dicom</a></li>
                                                        <li><a href="{{route('standard')}}">ICD 11</a></li>
                                                        <li><a href="{{route('standard')}}">SNOMED CT</a></li>
                                                        <li><a href="{{route('standard')}}">LOINC</a></li>
                                                        <li><a href="{{route('standard')}}">Telemedicine and Online Healthcare Guidelines</a></li>
                                                        <li><a href="{{route('standard')}}">Standard Interoperoperability Lab(SIL-Nepal)</a></li>
                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Lorem ipsum</a></li>
                                                                <li><a href="#">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Change Adoption <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('changeadoption')}}">Awareness Program</a></li>
                                                        <li><a href="{{route('changeadoption')}}">Stakeholder Communication Program</a></li>
                                                        <li><a href="{{route('changeadoption')}}">Digital Health Literacy Program</a></li>
                                                        <li><a href="{{route('changeadoption')}}">Digital Health Capacity Building Program</a></li>

                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">AI in Health Insurance and Healthcare <span class="caret"></span> </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('aiinhealth')}}">Digital Health Governance</a></li>


                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle">Implementation Guidelines <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="{{route('implementations')}}">Governance</a></li>
                                                        <li><a href="{{route('implementations')}}">Infrastructure</a></li>
                                                        <li><a href="{{route('implementations')}}"> Digital Health Service, Solutions and Applications</a></li>
                                                        <li><a href="{{route('implementations')}}">Standard and Interoperability</a></li>
                                                        <li><a href="{{route('implementations')}}">Change and Adoption</a></li>



                                                        <!-- <li>
                                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Submenu 2<span class="caret"></span></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>
                                                                <li><a href="singlepage.html">Lorem ipsum</a></li>

                                                            </ul>
                                                        </li> -->
                                                    </ul>
                                                </li>--}}
                                                <li><a href="{{route('digitalhealthmilestone')}}">Digital Health Milestone</a></li>


                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- /.header_bottom -->

                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </section> -->
