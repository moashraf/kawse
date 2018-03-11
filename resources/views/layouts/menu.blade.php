
                                 <ul class="navigation clearfix">
                                        <li class=" {{ Request::is('/') ? 'current' : '' }} ">
                                            <a href="{!!  URL::to('/'); !!}">Home</a>
                                       </li>
                                        <li class=" {{ Request::is('/about') ? 'current' : '' }} " >
                                            <a href="{!! route('about.index') !!}">About Us</a>
                                          
                                        </li>
                                        <li class="dropdown  {{ Request::is('/services') ? 'current' : '' }} "><a href="{!! route('services.index') !!}">Services</a>
                                            <ul>
                                                <li class="dropdown"><a href="{!! route('services.index') !!}">All Services</a>  </li>
                                                <li class="dropdown"><a href="{!! route('services.index') !!}">All Services</a>  </li>
                                                <li class="dropdown"><a href="{!! route('services.index') !!}">All Services</a>  </li>
                                           </ul>
                                        </li>
                                        <li  class=" {{ Request::is('/Projects') ? 'current' : '' }} " ">
                                            <a href="{!! route('Projects.index') !!}">Our Projects</a>
                                           
                                        </li   >
                                        
                                        <li class=" {{ Request::is('/client') ? 'current' : '' }} "  >
                                            <a href="{!! route('client.index') !!}">our clients</a>
                                             
                                        </li   >
                                        <li class=" {{ Request::is('/contact') ? 'current' : '' }} " >
                                            <a href="{!! route('contact.index') !!}">Contact Us</a>
                                        </li>
                                    </ul>




