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
        Kota Bekasi memiliki kekayaan kuliner dan tempat wisata yang menarik untuk dieksplorasi. Bekasi menawarkan beragam kuliner lezat yang dapat memanjakan lidah Anda. Dari makanan tradisional seperti nasi uduk, soto mie, hingga hidangan modern dan internasional, ada banyak pilihan untuk dinikmati Kota Bekasi juga memiliki sejumlah tempat wisata alam yang mempesona. Mulai dari Taman Kota Bekasi, Taman Jomblo, hingga Kebun Raya Bumi Perkemahan Cibubur, Anda dapat menikmati keindahan alam dan menyegarkan diri.
    </p>
    </div>
<!-- Jumbotron -->
    <!-- Intro -->
</section>


<section class="wrapper">
   <div class="container">
      <div class="row">
         <div class="col text-center mb-5">
            <h1 class="display-4">Wisata Keren Di Bekasi</h1>
         </div>
      </div>
      <input type="text" class="form-control mb-5" placeholder="Cari Wisata" id="searchWisata" oninput="searchWisata(this.value)">
      <div class="row" id="wisata-list">
      </div>
   </div>
</section>


<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>    
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

        fetchData();
    });


    function fetchData() {
        $.ajax({
            type: "post",
            url: "{{ url('/wisata-list') }}",
            dataType: "json",
            success: function (response) {
                if(response.code == 200) {
                    let html = '';
                    response.data.forEach(element => {
                        let image_url = "{{ url('/storage') }}/"+element.image_path;
                        let url = "{{ url('/wisata') }}/"+element.id;
                        html += `
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <div class="card text-white card-has-bg click-col" style="background-image:url(${image_url});">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <a href="${url}" style="text-decoration: none; color:white;">
                                            <h4 class="card-title mt-0 ">${element.name}</h4>
                                            
                                        </a>
                                        <small><i class="far fa-clock"></i> Uploaded : ${ new Date (Date.parse(element.created_at))}</small>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                        `;
                        
                    });
                    $("#wisata-list").html(html);
                }
            }
        });
    }

    function searchWisata(text) {
      let data = {
         search : text
      }
      $.ajax({
         type: "post",
         url: "{{ url('/wisata-list/search') }}",
         data: data,
         dataType: "json",
         success: function (response) {
            if(response.code == 200) {
               let html = '';
                    response.data.forEach(element => {
                        let image_url = "{{ url('/storage') }}/"+element.image_path;
                        let url = "{{ url('/wisata') }}/"+element.id;
                        html += `
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <div class="card text-white card-has-bg click-col" style="background-image:url(${image_url});">
                                <div class="card-img-overlay d-flex flex-column">
                                    <div class="card-body">
                                        <a href="${url}" style="text-decoration: none; color:white;>
                                            
                                            <h1 class="card-title mt-0 ">${element.name}</h1>
                                        </a>
                                        <small><i class="far fa-clock"></i> Uploaded : ${ new Date (Date.parse(element.created_at))}</small>
                                    </div>
                                </div>
                            </div>
                        </div>                      
                        `;
                        
                    });
                    if(response.data.length == 0) {
                     html += `
                        <h1>NO DATA AVAILABLE</h1>

                        
                     `
                    }
                    $("#wisata-list").html(html);

            }
         }
      });
    }

</script>
@endsection