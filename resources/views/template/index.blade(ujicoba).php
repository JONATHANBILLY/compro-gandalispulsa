 @extends('template.template')

@section('custom_style')


<style>
    .card  {
     border:  -100vh solid #000 !important;
     background-color:  transparent!important;
 }
 .bottom-6  {
     bottom:  3rem!important;
 }
 .absolute  {
     position:  absolute!important;
 }
 .category ul li img,  .search button  {
     margin-right:  4px;
 }
 .category ul li img .row-games img  {
     margin-top:  -5px;
     filter:  grayscale(100%);
 }
 .category ul,  .list-style-none  {
     list-style:  none;
 }
 .category ul  {
     padding:  0;
     margin:  0;
 }
 .category ul li  {
     float:  left;
     padding-right:  24px;
     margin-bottom:  12px;
 }
 .category ul li div  {
     color:  #fff;
     cursor:  pointer;
 }
 .category ul li div:hover,  .category ul li div:hover img,  .category ul li.active div,  .category ul li.active div img  {
     color:  #FEC832;
     filter:  grayscale(0);
 }
 .text-kbrstore {
     color:  var(--warna_2);
 }
 .clip-overlay  {
     clip-path:  polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     -webkit-clip-path:  polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     background-color:  #7367F0;
     width:  100%;
     height:  25px;
     margin-top:  -21px !important;
 }
 .clip-path  {
     display:  flex;
     padding:  0;
     margin-top:  -32px;
     width:  100%;
     height:  35px;
     background-color:  #ebe9f1;
     clip-path:  clip-path: polygon(0 48%,  9% 48%,  18% 65%,  27% 49%,  36% 72%,  45% 58%,  55% 70%,  64% 58%,  73% 86%,  82% 48%,  91% 63%,  100% 70%,  100% calc(100% + 1px),  0 calc(100% + 1px));
     ;
 }
 .clip-game  {
     margin-top:  -50px !important;
     background-color:  var(--warna_1) !important;
     display:  flex;
     padding:  0;
     margin-top:  -39px;
     width:  100%;
     height:  40px;
     clip-path:  polygon(0 48%, 9% 48%, 18% 65%, 27% 49%, 36% 72%, 45% 58%, 55% 70%, 64% 58%, 73% 86%, 82% 48%, 91% 63%, 100% 70%, 100% calc(100% + 1px), 0 calc(100% + 1px));
 }
 .foo-img  {
     width:  65px;
     height:  65px;
     background:  #fff;
     text-align:  center;
     border-radius:  50%;
     line-height:  65px;
     float:  left;
     margin-right:  15px;
 }
 .fo-end a  {
     margin:  0 3px;
 }
 @media  only screen and (max-width: 600px)  {
     .fo-end  {
     text-align:  center;
 }
 .fo-end span  {
     margin-bottom:  8px;
     display:  block;
 }
 .fo-end div  {
     margin-top:  5px;
     display:  block !important;
     float:  none !important;
 }
 .fo-end div img  {
     max-width:  150px !important;
 }
 .fo-xs2  {
     padding-bottom:  20px;
     border-bottom:  1px dotted #7367F0;
 }
 }
 .mobile  {
     backdrop-filter:  blur( 1px);
     border-radius:  10px 10px 0px 0px;
     height:  60px;
     font-weigth:  bold;
     padding:  20px;
     background-color:  rgb(0, 0, 0);
     background-color:  rgba(0, 0, 0,  0.2);
 }
 .bg-primary  {
     background-color:  var(--warna_2)!important;
 }
 .nav-pills  {
     background:  #f3f4f7;
     border-radius:  .25rem;
     padding:  6px 2px;
 }
 .nav-pills .nav-link.active,  .nav-pills .show>.nav-link  {
     background-color:  var(--warna_2);
     color:  #fff;
 }
 @media (max-width: 576px)  {
     .nav-pills .nav-link.active,  .nav-pills .show>.nav-link background-color:  var(--warna_2);
     color:  #fff;
 }
 .nav  {
     --bs-nav-link-padding-x:  1rem;
     --bs-nav-link-padding-y:  0.5rem;
     --bs-nav-link-font-weight:  ;
     --bs-nav-link-color:  #283046;
     --bs-nav-link-hover-color:  var(--bs-link-hover-color);
     --bs-nav-link-disabled-color:  var(--bs-secondary-color);
     display:  flex;
     flex-wrap:  wrap;
     padding-left:  0;
     margin-bottom:  0;
     list-style:  none;
 }
</style>


@endsection


@section('content')
<div class="content-body">
            <div class="swiper-container mt-2 mb-2">
              <div class="swiper-wrapper" id="swiper">
              	@foreach($banner as $data)
                   <div class="swiper-slide">
                    <img src="{{ $data->path }}">
                </div>
                @endforeach
                              </div>
            </div>
           <!-- <ul class="nav nav-pills d-flex justify-content-center mt-2" style="background-color: #ebeef2;">
        <li class="nav-item" id="li-all">
            <div onclick="load_games('all');">
                <button href="#topup" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                    <span class="d-block d-sm-none"></span>
                    <span class="fw-bold">Semua Produk</span>
                </button>
            </div>
        </li>
        <li class="nav-item" id="li-joki-mlbb">
            <div onclick="load_games('joki-mlbb');">
                <a href="#app" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                    <span class="d-block d-sm-none"></span>
                    <span class="">Joki MLBB</span>
                </a>
            </div>
        </li>
        <li class="nav-item" id="li-topup-pulsa">
            <div onclick="load_games('topup-pulsa');">
                <a href="#jasa" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                    <span class="d-block d-sm-none"></span>
                    <span class="">Pulsa</span>
                </a>
            </div>
        </li>
        <li class="nav-item" id="li-topup-emoney">
            <div onclick="load_games('topup-emoney');">
                <a href="#jasa" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                    <span class="d-block d-sm-none"></span>
                    <span class="">E-Wallet</span>
                </a>
            </div>
        </li>
    </ul> -->
         <div class="row-games mt-5" id="category-topup-games">
            <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore" style="font-size: 1.2rem;">GAME POPULER</h4>
                <span class="bg-primary d-block mb-1" style="width: 60px;height: 5px;border-radius: 10px;"></span>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "game")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                             <p style="margin-top : -60px;" class="mobile text-white">{{ $category->nama  }}</p>  <div class=""></div> 
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>        
            </div>
            <div class="row-games mt-5" id="category-joki-mlbb">
             <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore" style="font-size: 1.2rem;">JOKI MLBB</h4>
                <span class="bg-primary d-block mb-1" style="width: 60px;height: 5px;border-radius: 10px;"></span>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "joki")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                            <p style="margin-top : -60px;" class="mobile text-white">{{ $category->nama  }}</p>  <div class=""></div> 
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>        
            </div>
            <div class="row-games mt-5" id="category-topup-pulsa">
             <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore" style="font-size: 1.2rem;">TOPUP PULSA</h4>
                <span class="bg-primary d-block mb-1" style="width: 60px;height: 5px;border-radius: 10px;"></span>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "pulsa")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                            <p style="margin-top : -60px;" class="mobile text-white">{{ $category->nama  }}</p>  <div class=""></div> 
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>        
            </div>
            <div class="row-games mt-5" id="category-topup-emoney">
             <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore" style="font-size: 1.2rem;">TOPUP E-MONEY</h4>
                <span class="bg-primary d-block mb-1" style="width: 60px;height: 5px;border-radius: 10px;"></span>
                <div class="product row mt-4">
                    
                    @foreach($kategori as $category)
                    
                    @if($category->tipe == "e-money")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                            <p style="margin-top : -60px;" class="mobile text-white">{{ $category->nama  }}</p>  <div class=""></div> 
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>
        
            </div>
                
            <!--tambahan-->
             <div class="row-games mt-5" id="">
            <section class="px-2" style="">
                <h4 class="mb-2 text-kbrstore" style="font-size: 1.2rem;">LAINNYA</h4>
                <span class="bg-primary d-block mb-1" style="width: 60px;height: 5px;border-radius: 10px;"></span>
                <div class="product row mt-4">
                    
                   @foreach($kategori as $category)
                    
                    @if($category->tipe == "streamingapp")
                    
                    <div class="col-4 col-md-3 col-lg-2">
                    <div class="card-product">
                        <a href="{{url('/order')}}/{{$category->kode}}" class="box">
                            <img class="shadow-sm lazy" src="{{ $category->thumbnail  }}" loading="lazy" alt="{{ $category->nama }}">
                            <p style="margin-top : -60px;" class="mobile text-white">{{ $category->nama  }}</p>  <div class=""></div> 
                        </a>
                    </div>
                    </div>
                               
                    @endif
                             
                    @endforeach             
                    
                </div>
            </section>
            <!--end-->
        </div>    
        

@push('custom_script')
    
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<script>
function load_games(category) {
    $(".li-category").removeClass("active");
    $("#li-" + category).addClass("active");
    if (category == "all") {
        $(".row-games").removeClass("d-none");
    } else {
        $(".row-games").addClass("d-none");
        $("#category-" + category).removeClass("d-none");
    }
}
$("#games-populer").owlCarousel({ loop: true, margin: 10, autoplay: true, autoplayTimeout: 3000, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1000: { items: 1 } } });
</script>
<script>
var swiper = new Swiper('.swiper-container', {
  effect: 'coverflow',
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  spaceBetween: 1,
  slidesPerView: 'auto',
  coverflow: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows : true
  },
  pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

</script>

<script>
            $('.metode-top').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
            $('.metode-bottom').owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:1000,
                rtl: true,
                responsive:{
                    0:{
                        items:3
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });

            $(window).on('load',function(){
                setTimeout(() => {
                    $('.skeleton-loader').addClass('d-none');
                    $('.item-skeleton-content').removeClass('d-none');
                }, 1500);
            });
            
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                        clearTimeout(timer);
                        timer = setTimeout(callback, ms);
                    };
                })();
            
           
            
            $('#searchProds').keyup(function () {
                                    const data = $(this).val();
                                    if (data.length < 1) {
                                        $('.resultsearch').removeClass('show');
                                        $('.resultsearch li').remove();
                                    } else {

                                        delay(function () {

                                            $.ajax({
                                                url: "{{url('/cari/index')}}",
                                                method: "POST",
                                                data: {
                                                    data: data
                                                },
                                                beforeSend: function () {
                                                    $('.resultsearch li').remove();
                                                },
                                                success: function (res) {
                                                    $('.resultsearch').append(res);
                                                    $('.resultsearch').addClass('show');
                                                }
                                            })

                                        }, 100);

                                    }
                                })
            
        </script>


@endpush




@endsection