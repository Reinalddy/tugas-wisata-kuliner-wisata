@extends('home.master-home.master')
@section('content')
<section>
    <!-- Intro -->
<!-- Jumbotron -->
    <div
    class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white vh-100"
    style="background-image: url('/img/banner-bg.jpg'); background-repeat: no-repeat;"
    >
    <h1 class="mb-3 h2" style="margin-top: 15%;">Bekasi Kotaku</h1>

    <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus praesentium
        labore accusamus sequi, voluptate debitis tenetur in deleniti possimus modi voluptatum
        neque maiores dolorem unde? Aut dolorum quod excepturi fugit.
    </p>
    </div>
<!-- Jumbotron -->
    <!-- Intro -->
</section>

<section class="wrapper">
   <div class="container">
      <div class="row">
         <div class="col text-center mb-5">
            <h1 class="display-4">Who Make This Website</h1>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/alfian.jpg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Front End Developer</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#"> ALFIYAN NURUZZAMAN</a></h4>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/reinalddy.jpg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://www.instagram.com/reinalddy/">
                        <h4 class="card-title mt-0 ">REINALDDY</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/wili2.jpg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://www.instagram.com/reinalddy/">
                        <h4 class="card-title mt-0 "> ELIA WILLIAM ARITONANG</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/iqbal.png');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://www.instagram.com/dl_muhiqbal23/">
                        <h4 class="card-title mt-0 "> MUHAMMAD IQBAL</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/wahyu.jpg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://instagram.com/tresna_aja">
                        <h4 class="card-title mt-0 "> MUHAMAD WAHYU TRISNA AJI</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/helmi.jpg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://www.instagram.com/reinalddy/">
                        <h4 class="card-title mt-0 "> HELMI ANUAR</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('/img/profile/isep.jpeg');">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Full Stack Developer</small>
                     <a class="text-white" href="https://www.instagram.com/reinalddy/">
                        <h4 class="card-title mt-0 "> ISEP SOPIANDANI</h4>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

{{-- <section class="wrapper">
   <div class="container">
      <div class="row">
         <div class="col text-center mb-5">
            <h1 class="display-4">Rekomendasi Wisata Keren Di Bekasi</h1>
         </div>
      </div>
      <div class="row">
        <input type="text" class="form-control mb-5" placeholder="Cari Wisata" id="searchWisata">
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
               <img class="card-img d-none" src="https://source.unsplash.com/600x900/?computer,design" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
               <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                     <small class="card-meta mb-2">Thought Leadership</small>
                     <h4 class="card-title mt-0 "><a class="text-white" herf="#">Goverment Lorem Ipsum Sit Amet Consectetur dipisi?</a></h4>
                     <small><i class="far fa-clock"></i> October 15, 2020</small>
                  </div>
                  <div class="card-footer">
                     <div class="media">
                        <img class="mr-3 rounded-circle" src="https://assets.codepen.io/460692/internal/avatars/users/default.png" alt="Generic placeholder image" style="max-width:50px">
                        <div class="media-body">
                           <h6 class="my-0 text-white d-block">Oz Coruhlu</h6>
                           <small>Director of UI/UX</small>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}



{{-- <section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Rekomendasi Wisata</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tours as $item)
            <div class="col-md-4">
                <div class="" style="background-color:white;">
                    <img src="{{ url("/storage/$item->image_path") }}" alt="" style="width: 80%; height:100%;">
                    <div class="right-content">
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->desc }}</p>
                        <div class="text-button">
                            <a href="#">Continue Reading</a>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</section> --}}
    
@endsection