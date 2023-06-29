@extends('home.master-home.master')
@section('content')
<section class="banner">
  {{-- @include('home.banner.banner') --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>Here you can find beutiful place and delicious food</h4>
                <h2>Kuliner Di Bekasi</h2>
                <p>Selamat datang di Website Kuliner Bekasi yang menyajikan ragam makanan lezat dan kuliner yang menggugah selera! 
                    Dapatkan pengalaman kuliner terbaik di kota Bekasi dan temukan tempat-tempat makan yang menawarkan cita rasa autentik dan inovatif. 
                    Bersama kami, Anda akan menjelajahi kelezatan kuliner lokal hingga hidangan internasional yang memukau. 
                    Siapkan diri Anda untuk memanjakan lidah dengan keindahan rasa dan aroma yang menggoda.
                    Selamat menikmati petualangan kuliner yang tak terlupakan di Bekasi!</p>
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
                    <img src="img/kuliner2.jpeg" alt="Breakfast">
                    <h4>Breakfast</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="img/kuliner3.jpeg" alt="Lunch">
                    <h4>Lunch</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="img/kuliner4.jpeg" alt="Dinner">
                    <h4>Dinner</h4>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <a href="menu.html">
                    <img src="img/kuliner5.jpeg" alt="Desserts">
                    <h4>Desserts</h4>
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
                <h2>Delicius Food</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Breakfast</h2>
                    <img src="img/kuliner2.jpeg" alt="">
                    <div class="price">7 k</div>
                    <div class="text-content">
                        <h4>Nasi Uduk </h4>
                        <p>Terbuat dari bahan baku utama nasi, dan berlauk jengkol,tekur,mie, dan ada juga timun dan kerupuk sebagai pelengkap..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Lunch</h2>
                    <img src="img/kuliner3.jpeg" alt="">
                    <div class="price">50 k</div>
                    <div class="text-content">
                        <h4>Sop Janda Bu Darmi</h4>
                        <p>Sop janda adalah sop daging sapi. Di daerah lain makanan serupa disebut sop jando, merujuk pada tetelan sapi, khususnya bagian punuk dan tulang rawan sapi. Namun konon katanya di Bekasi disebut sop janda, karena merupakan singkatan dari Jawa-Sunda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="food-item">
                    <h2>Dinner</h2>
                    <img src="img/kuliner4.jpeg" alt="">
                    <div class="price">20 k</div>
                    <div class="text-content">
                        <h4>Soto betawi</h4>
                        <p>Soto Betawi merupakan kuliner yang dikenal oleh orang Betawi di daerah Jakarta maupun di luar Jakarta. Seperti halnya soto madura dan soto sulung, dalam pembuatannya soto Betawi juga menggunakan jeroan sapi....</p>
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
                    <h2>Our blog post</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/kuliner2.jpeg" alt="">
                    <div class="date">26 Oct 2017</div>
                    <div class="right-content">
                        <h4>nasi uduk</h4>
                        <span>Branding / Admin</span>
                        <p>Resep Nasi Uduk Sederhana untuk Sajian di Rumah Sehari-hari
                            Penyuka nasi uduk sebagai menu sarapan? Inilah resep nasi uduk sederhana yang mudah untuk diikuti dari Masak Apa Hari Ini!...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/kuliner4.jpeg" alt="">
                    <div class="date">21 Oct 2017</div>
                    <div class="right-content">
                        <h4>Soto Betawi</h4>
                        <span>Branding / Admin</span>
                        <p>Bumbu soto betawi di antaranya yaitu cengkih, kayu manis, pala, dan serai. Kamu juga dapat menambahkan minyak samin jika tersedia di rumah. Minyak samin juga menjadi ciri khas soto betawi.</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/kuliner3.jpeg" alt="">
                    <div class="date">11 Oct 2017</div>
                    <div class="right-content">
                        <h4>sop janda</h4>
                        <span>Dessert / Chef</span>
                        <p>Lokasinya dekat kawasan MM2100, Cibitung. Ketika jam makan siang, bersiaplah untuk kesulitan parkir. Mereka menyajikan sop iga dengan porsi yang luar biasa dengan tambahan rawit buntet. Pilihannya pedas sekali, pedas sedang dan tidak pedas. Rasa sop sangat gurih walau tidak berlemak...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-post">
                    <img src="img/kebap.jpg" alt="">
                    <div class="date">03 Oct 2017</div>
                    <div class="right-content">
                        <h4>kebap bang ade</h4>
                        <span>Plate / Chef</span>
                        <p>Kebab Turki adalah salah satu makanan yang paling populer di Indonesia. Makanan berbahan daging yang dibungkus dengan roti khas arab atau tortilla plus berbagai topping ini diminati oleh berbagai kalangan. Mulai dari orang dewasa dan anak-anak.Selain rasanya yang enak dan memiliki citarasa rempah, kepraktisannya juga menjadi salah satu alasan mengapa kebab banyak di suka...</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- 
<section class="sign-up">
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