<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Are you local weddding vendor provider & looking for wedding vendor website template. Wedding Vendor Responsive Website Template suitable for wedding vendor supplier, wedding agency, wedding company, wedding events etc.. ">
    <meta name="keywords" content="Wedding Vendor, wedding template, wedding website template, events, wedding party, wedding cake, wedding dress, wedding couple, couple, Wedding Venues Website Template">

    <title>Venue Vista | @yield('title')</title>
    <!-- Style -->
    @include('frontend.layouts.inc.style')

</head>

<body>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 top-message">
                    <p>Welcome to Venue Vista.</p>
                </div>
                <div class="col-md-6 top-links">
                    <ul class="listnone">
                        @if(Auth::check('is_customer'))
                        <li><a href="{{route('customer.dashboard')}}">My Account</a></li>
                        <li><a href="{{route('customer.logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{route('login.page')}}">Login</a></li>
                        <li><a href="{{route('register.page')}}">Registerr</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 logo">
                    <div class="navbar-brand">
                        <a href="/"><img src="{{ asset('assets/frontend')}}/images/venuelogo.png" alt="Wedding Vendors" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <div class="navigation" id="navigation">
                        <ul>
                            <li class="active"><a href="/">Home</a>
                            </li>
                            <li><a href="{{route('venue.page')}}">Venue List</a>
                            </li>
                            <li><a href="/about">About Us</a>
                            </li>
                            <li><a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

