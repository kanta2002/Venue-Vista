<div class="menu-container flex-grow-1">
    <ul id="menu" class="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                <span class="label">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#venues" data-href="">
                <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                <span class="label">Venue Halls</span>
            </a>
            <ul id="venues">
                <li>
                    <a href="{{route('venue.index')}}">
                        <span class="label">Venue List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('venue.create')}}">
                        <span class="label">Add New Venue</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#locations" data-href="">
                <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>

                <span class="label">Locations</span>
            </a>
            <ul id="locations">
                <li>
                    <a href="{{route('location.index')}}">
                        <span class="label">Locations</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('location.create')}}">
                        <span class="label">Add Location</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#testimonials" data-href="">
                <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                <span class="label">Clients Testimonial</span>
            </a>
            <ul id="testimonials">
                <li>
                    <a href="{{route('testimonial.index')}}">
                        <span class="label">Clients Testimonials</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('testimonial.create')}}">
                        <span class="label">Add Testimonial</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#blog" data-href="">
                <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                <span class="label">Hero Slider</span>
            </a>
            <ul id="blog">
                <li>
                    <a href="#">
                        <span class="label">Slider List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="label">Add New Slide</span>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#orders" data-href="#">
                <i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
                <span class="label">Bookings</span>
            </a>
            <ul id="orders">
                <li>
                    <a href="{{route('admin.bookinglist')}}">
                        <span class="label">Booking List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#customers" data-href="#">
                <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                <span class="label">Customers</span>
            </a>
            <ul id="customers">
                <li>
                    <a href="{{route('admin.customerlist')}}">
                        <span class="label">Customer List</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                <span class="label">Settings</span>
            </a>
        </li>
    </ul>
</div>
