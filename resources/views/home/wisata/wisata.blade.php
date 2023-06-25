@extends('home.master-home.master')
@section('content')
<section class="banner_wisata">
  {{-- @include('home.banner.banner') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="header-black">Here you can find beutiful place and delicious food</h4>
                <h2 class="header-black">Bekasi Staycation</h2>
                <p class="header-black">Selamat datang di pintu gerbang petualangan yang menakjubkan !</p>
                <p class="header-black">Kami akan memberikan referensi perjalanan yang tak terlupakan dan biarkan diri anda terpesona oleh keajaiban alam yang menakjubkan di kota bekasi</p>
                <p class="header-black">Jangan hanya mendengar kisah perjalanan orang lain, tapi rasakan sendiri wisata menawan di kota bekasi</p>
            </div>
        </div>
    </div>
</section>



{{-- <section class="cook-delecious">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div class="first-image">
                    <img src="img/cook_01.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="cook-content">
                    <h4>We cook delecious</h4>
                    <div class="contact-content">
                        <span>You can call us on:</span>
                        <h6>+ 1234 567 8910</h6>
                    </div>
                    <span>or</span>
                    <div class="primary-white-button">
                        <a href="#" class="scroll-link" data-id="book-table">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="second-image">
                    <img src="img/cook_02.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section> --}}



<section class="services" style="margin-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="{{ asset('/img/wisata/sabana.jpg') }}" alt="Sabana">
                    <h4>Sabana</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="{{ asset('/img/wisata/gedungjuang.jpg') }}" alt="Gedung Juang">
                    <h4>History</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="{{ asset('/img/wisata/PantaiMuaraBeting.jpg') }}" alt="Pantai">
                    <h4>Nature</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="{{ asset('/img/wisata/GoWetWaterpark.png') }}" alt="Curug">
                    <h4>Family Vacation</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <section id="book-table">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Book Your Table Now</h2>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-12">
                <div class="left-image">
                    <img src="img/book_left_image.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="right-info">
                    <h4>Reservation</h4>
                    <form id="form-submit" action="" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <select required name='day' onchange='this.form.()'>
                                        <option value="">Select day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <select required name='hour' onchange='this.form.()'>
                                        <option value="">Select hour</option>
                                        <option value="10-00">10:00</option>
                                        <option value="12-00">12:00</option>
                                        <option value="14-00">14:00</option>
                                        <option value="16-00">16:00</option>
                                        <option value="18-00">18:00</option>
                                        <option value="20-00">20:00</option>
                                        <option value="22-00">22:00</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <select required class="person" name='persons' onchange='this.form.()'>
                                        <option value="">How many persons?</option>
                                        <option value="1-Person">1 Person</option>
                                        <option value="2-Persons">2 Persons</option>
                                        <option value="3-Persons">3 Persons</option>
                                        <option value="4-Persons">4 Persons</option>
                                        <option value="5-Persons">5 Persons</option>
                                        <option value="6-Persons">6 Persons</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Book Table</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}



{{-- <section class="get-app">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h2>Get application for your phone</h2>
            </div>
            <div class="primary-white-button">
                <a href="#">Download now</a>
            </div>
        </div>
    </div>
</section> --}}



<section class="featured-food">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h2>Populer Food This week</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Breakfast</h2>
                    <img src="img/breakfast_item.jpg" alt="">
                    <div class="price">$4.50</div>
                    <div class="text-content">
                        <h4>Kale Chips Art Party</h4>
                        <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Lunch</h2>
                    <img src="img/lunch_item.jpg" alt="">
                    <div class="price">$7.50</div>
                    <div class="text-content">
                        <h4>Taiyaki Gastro Tousled</h4>
                        <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Dinner</h2>
                    <img src="img/dinner_item.jpg" alt="">
                    <div class="price">$12.50</div>
                    <div class="text-content">
                        <h4>Batch Squid Jean Shorts</h4>
                        <p>Dreamcatcher squid ennui cliche chicharros nes echo  small batch jean shorts hexagon street art knausgaard wolf...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Popular Spot In Bekasi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/blog_post_01.jpg" alt="">
                    <div class="date">26 Oct 2017</div>
                    <div class="right-content">
                        <h4>Stumptown Tofu Schlitz</h4>
                        <span>Branding / Admin</span>
                        <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/blog_post_02.jpg" alt="">
                    <div class="date">21 Oct 2017</div>
                    <div class="right-content">
                        <h4>Succulents Hashtag Folk</h4>
                        <span>Branding / Admin</span>
                        <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/blog_post_03.jpg" alt="">
                    <div class="date">11 Oct 2017</div>
                    <div class="right-content">
                        <h4>Knaus Sriracha Pinterest</h4>
                        <span>Dessert / Chef</span>
                        <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/blog_post_04.jpg" alt="">
                    <div class="date">03 Oct 2017</div>
                    <div class="right-content">
                        <h4>Crucifix Selvage Coat</h4>
                        <span>Plate / Chef</span>
                        <p>Skateboard iceland twee tofu shaman crucifix vice before they sold out corn hole occupy drinking vinegar chambra meggings kale chips hexagon...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



{{-- <section class="sign-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Signup for our newsletters</h2>
                </div>
            </div>
        </div>
        <form id="contact" action="" method="get">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Enter your email here..." required>
                    </fieldset>
                </div>
                <div class="col-md-2">
                    <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
</section> --}}

@endsection
