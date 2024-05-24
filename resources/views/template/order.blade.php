@extends('template.template')

@section('custom_style')
<style>
        .toast,.tooltip{font-size:.857rem}.modal-title,.popover,.tooltip{line-height:1.45}.popover,.text-hide,.tooltip{text-shadow:none}.close:hover{color:#5E5873;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0}a.close.disabled{pointer-events:none}.toast{-webkit-flex-basis:380px;-ms-flex-preferred-size:380px;flex-basis:380px;max-width:380px;color:#6E6B7B;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:0 solid rgba(0,0,0,.1);box-shadow:0 2px 20px 0 rgba(34,41,47,.08);opacity:0;border-radius:.286rem}.modal-content,.toast-header{background-color:#FFF;background-clip:padding-box}.toast:not(:last-child){margin-bottom:1.14rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.modal-dialog-scrollable,.toast-header{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox}.toast-header{display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;padding:.15rem 1.14rem;color:#6E6B7B;border-bottom:0 solid rgba(0,0,0,.05);border-top-left-radius:.286rem;border-top-right-radius:.286rem}.toast-body{padding:1.14rem}
            .fo-menu {
                background: #fff;
                position: fixed;
                width: 100%;
                padding: 10px 10px 0 10px;
                bottom: 0;
                text-align: center;
                border-top: 1px solid #edebeb;
                display: none;
                left: 0;
            }
            .fo-item {
                padding-top: 3px;
                padding-bottom: 6px;
                border-bottom: 3px solid #fff;
                width: 19%;
                display: inline-block;
                text-align: center;
            }
            .fo-item i {
                display: block;
                margin-bottom: 5px;
                color: #6E6B7B;
            }
            .fo-item span {
                display: block;
                font-size: 11px;
                font-weight: 500;
                color: #6E6B7B;
            }
            .fo-icon-center {
                background: #8f86f3;
                height: 46px;
                width: 46px;
                position: relative;
                margin: -40px auto 10px;
                text-align: center;
                border-radius: 50%;
                font-size: 19px;
            }
            .fo-icon-center i {
                color: #fff;
                padding-top: 12px;
            }
            .fo-item.active {
                border-color: #8f86f3;
            }
            @media  only screen and (max-width: 600px) {
                .fo-menu {
                    display: block;
                }
                html .content.app-content {
                    padding-bottom: 80px !important;
                }
            }
        </style>
<style>
        .accordion-button {
            box-shadow:none!important;
        }
        .accordion-button::after {
    flex-shrink: 0;
    width: var(--bs-accordion-btn-icon-width);
    height: 0px;
    margin-left: auto;
    content: "";
    background-image: var(--bs-accordion-btn-icon);
    background-repeat: no-repeat;
    background-size: var(--bs-accordion-btn-icon-width);
    transition: var(--bs-accordion-btn-icon-transition);
}
        .accordion-tipe{
            font-weight:600;
        }
        .btn.disabled,.btn:disabled,fieldset:disabled{
            background:#8ba4b1;border-color:#8ba4b1;
        }
        .product .box{
            margin-bottom:40px;
        }
        .games-banner{
            height:170px;
            background:url({{ $kategori->banner }});
            /* background:url(/assets/banner_game/mlbb_miliyan.id.jpg); */
            background-size:cover;
            background-repeat:no-repeat;
            background-size:100%;
        }
        .num-page{
            margin-bottom:10px;
        }
        .num-page div{
            width:40px;
            height:40px;
            border-radius:50%;
            text-align:center;
            font-size:1.875rem;
            background:var(--warna_3);
            color:#fff;
            line-height:40px;
            float:left;
        }
        .num-page p{
            margin-left:5px;
            display:inline-block;
            font-size:1.25rem;
            font-weight:500;
            padding-top:6px;
        }
        .num-page i {
            font-size: 16px;
            margin-top:13px;
            margin-left:5px;
        }
        
        button.accordion-button{
            outline:none!important;
            border:none!important;
            box-shadow:none!important;
        }
        .box-back i{
            font-size:22px;
            margin-top:2px;
            color:#fff;
        }
        .product-list{
            border-radius:.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow:hidden;
            border:1px solid var(--warna_3)!important;
        }
        .product-list b{
            font-size:.85rem;font-weight:600;
        }
        .product-list span{
            font-size:11px;color:#fff;
        }
        .product-list.active{
            background: var(--warna_3);
            border:1px solid var(--warna_3)!important;
        }
        .product-list.active:before{
            display:inline-block;
            content:'L';
            position:relative;
            background:var(--warna_2);
            margin-left:-20px;
            height:53px;
            line-height:40px;
            width:20px;
            text-align:center;
            color:#fff;
            top:-23px;
            transform:rotate(45deg) scaleX(-1);
        }
        .product-list.active b{
            margin-top:-53px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(-1 * var(--bs-gutter-y));
            margin-right: 0;
            margin-left: 0;
        }
        .bg-product {
            background: var(--warna_3);
        }
        .panduan {
            color: white;
            font-size: 0.85rem;
            margin-top: 0.5rem;
        }
        .swal2-styled.swal2-confirm {
            background-color: var(--warna_2)!important;
            color: #fff;
        }
        .swal2-styled.swal2-confirm:focus {
            box-shadow: none!important;
        }
        .product-list img {
            display: flex;
            float: right;
            margin-top: -12px;
        }
        .productlogo {
            width: 32px;
            right: 5%;
        }
        .accordion-button:hover {
            z-index: 0;
        }
        
        .bg-payment {
            background: #fff;
        }
        .method-list.active {
            border-color: var(--warna_2)!important;
        }
        .method-list.active:before {
            background: var(--warna_2)!important;
        }
        
        .btn-order {
            display: inline-block;
            border: 0;
            outline: 0;
            line-height: 1.4;
            cursor: pointer;
            /* Important part */
            position: relative;
            transition: padding-right .3s ease-out;
                    
                }
                
        .btn-order.loading {
            padding-right: 40px;
        }
        
        .btn-order.loading:after {
            content: "";
            position: absolute;
            border-radius: 100%;
            right: 10px;
            top: 35%;
            width: 0px;
            height: 0px;
            border: 2px solid rgba(255,255,255,0.5);
            border-left-color: #FFF;
            border-top-color: #FFF;
            animation: spin .6s infinite linear, grow .3s forwards ease-out;
        }
        @keyframes  spin { 
            to {
                transform: rotate(359deg);
            }
        }
        @keyframes  grow { 
            to {
                width: 16px;
                height: 16px;
            }
        }
        
        .shadow-form {
            box-shadow: 0 4px 80px #dee2e600, 0 1.6711px 33.4221px hsl(0deg 0% 77% / 0%), 0 0.893452px 17.869px hsl(0deg 0% 77% / 0%), 0 0.500862px 10.0172px hsl(0deg 0% 77% / 0%), 0 0.266004px 5.32008px hsl(0deg 0% 77% / 0%), 0 0.11069px 2.21381px hsl(0deg 0% 77% / 0%);
        }
        .btn-primary {
    border-color: #ff2658!important;
    background-color: #e51616!important;
    color: #FFF!important;
}
.btn-group-lg>.btn, .btn-lg {
    padding: .8rem 2rem;
    font-size: 1.25rem;
    line-height: 1.25;
    border-radius: .358rem;
}
.btn-block {
     display: block;
}
.w-20 {
    width: 20%!important;
}
@media (max-width: 576px) {
 .w-20 {
    width: 50px!important;
}   
}
</style>



@endsection


@section('content')
<div class="modal fade" id="petunjukModal" tabindex="-1" aria-labelledby="petunjukModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background: transparent; border: none;">
            <div class="modal-body">
                <img src="{{ $kategori->petunjuk  }}" alt="" class="img-fluid">
            </div>
                <button type="button" class="btn mx-auto w-25 text-white bg-transparent" data-bs-dismiss="modal">X</button>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="row">
        <div class="col-lg-4 p-3">
            <div class="card bg-card border-0 mb-4 shadow-form">
                <div class="games-banner rounded-top"></div>
                <div class="col-12 px-3 pb-2">
                    <img src="{{ $kategori->thumbnail  }}" alt="" width="100" class="float-start mr-2" style="border-radius: 16px; margin-top: -50px;">
                    <div class="col-8 mt-2 mt-lg-0 float-end">
                        <h4>{{$kategori->nama}}</h4>
                    </div>
                </div>
                <div class="col px-4 mb-4">
                    <small style="font-size: 14px;">{!! $kategori->deskripsi_game !!}</small>
                </div>
            </div>
        </div>


		<div class="col-lg-8 p-3">
            <form class="my-form" id="form-order" name="my-form">
                <input type="hidden" id="nominal">
                <input type="hidden" id="metode">
                <input type="hidden" id="ktg_tipe" value="{{$kategori->tipe}}">
                
                <div class="card bg-card border-0 mb-4 shadow-form">
                    <div class="px-4 py-4">
                        <div class="num-page border-bottom">
                            <i class="mdi mdi-numeric-1-box-multiple-outline text-white"></i>
                            <b>Data Pesanan</b>
                            <i class="fa-regular fa-circle-question text-white" data-bs-toggle="modal" data-bs-target="#petunjukModal"></i>
                        </div>
                        <div class="row">
                        
                        @if($kategori->server_id && $kategori->kode != "life-after" && $kategori->kode != "genshin-impact" && $kategori->kode != "ragnarok-m" && $kategori->kode != "tof" && $kategori->kode != "be-the-king" && $kategori->kode != "hyper-front" && $kategori->kode != "crisis-action" && $kategori->kode != "ragnarok-origin" && $kategori->kode != "identity-v" && $kategori->kode != "ace-racer")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_2  }}"  name="zone_id" id="zone" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "life-after")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}"  id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="">Pilih Server</option>
                                    <option value="miskatown">Miska Town</option>
                                    <option value="sandcastle">Sand Castle</option>
                                    <option value="mouthswamp">Mouth Swamp</option>
                                    <option value="redwoodtown">Red Wood Town</option>
                                    <option value="obelisk">Oblisk</option>
                                    <option value="fallforest">Fall Forest</option>
                                    <option value="mountsnow">Mount Snow</option>
                                    <option value="nancycity">Nancy City</option>
                                    <option value="charlestown">Charles Town</option>
                                    <option value="snowhighlands">Snow High Lands</option>
                                    <option value="santopany">Santopany</option>
                                    <option value="levincity">Levin City</option>
                                    <option value="newland">New Land</option>
                                    <option value="milestone">Mile Stone</option>
                                    <option value="twinislands">Twin Island</option>
                                    <option value="500007">ChaosOutpost (NA)</option>
                                    <option value="500008">IronStride (NA)</option>
                                    <option value="520007">ChaosCity (SEA)</option>
                                    <option value="520008">TwinIslands (SEA)</option>
                                    <option value="520009">HopeWall (SEA)</option>
                                    <option value="500009">CrystalthornSea (NA)</option>
                                    <option value="520010">LabyrinthSea (SEA)</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "tof")
                            
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}"  id="user_id" name="user_id" autocomplete="off">
                            </div>
                            
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="">Pilih Server</option>
                                    <option value="Southeast Asia-Osillron">Southeast Asia-Osillron</option>
                                    <option value="Southeast Asia-Mistilteinn">Southeast Asia-Mistilteinn</option>
                                    <option value="Southeast Asia-Illyrians">Southeast Asia-Illyrians</option>
                                    <option value="Southeast Asia-Florione">Southeast Asia-Florione</option>
                                    <option value="Southeast Asia-Animus">Southeast Asia-Animus</option>
                                    <option value="Southeast Asia-Gumi Gumi">Southeast Asia-Gumi Gumi</option>
                                    <option value="Southeast Asia-Oryza">Southeast Asia-Oryza</option>
                                    <option value="Southeast Asia-Saeri">Southeast Asia-Saeri</option>
                                    <option value="Southeast Asia-Phantasia">Southeast Asia-Phantasia</option>
                                    <option value="Southeast Asia-Mechafield">Southeast Asia-Mechafield</option>
                                    <option value="Southeast Asia-Ethereal Dream">Southeast Asia-Ethereal Dream</option>
                                    <option value="Southeast Asia-Odyssey">Southeast Asia-Odyssey</option>
                                    <option value="Southeast Asia-Aestral-Noa">Southeast Asia-Aestral-Noa</option>
                                    <option value="Southeast Asia-Chandra">Southeast Asia-Chandra</option>
                                    <option value="Southeast Asia-Aeria">Southeast Asia-Aeria</option>
                                    <option value="Southeast Asia-Scarlet">Southeast Asia-Scarlet</option>
                                    <option value="Southeast Asia-Fantasia">Southeast Asia-Fantasia</option>
                                    <option value="Southeast Asia-Stardust">Southeast Asia-Stardust</option>
                                    <option value="Southeast Asia-Arcania">Southeast Asia-Arcania</option>
                                    <option value="Southeast Asia-Valhalla">Southeast Asia-Valhalla</option>
                                    <option value="North America-Lunalite">North America-Lunalite</option>
                                    <option value="North America-Sol-III">North America-Sol-III</option>
                                    <option value="North America-Lighthouse">North America-Lighthouse</option>
                                    <option value="North America-Silver Bridge">North America-Silver Bridge</option>
                                    <option value="North America-The Glades">North America-The Glades</option>
                                    <option value="North America-Nightfall">North America-Nightfall</option>
                                    <option value="North America-Frontier">North America-Frontier</option>
                                    <option value="North America-Libera">North America-Libera</option>
                                    <option value="North America-Solaris">North America-Solaris</option>
                                    <option value="North America-Freedom-Oasis">North America-Freedom-Oasis</option>
                                    <option value="North America-The Worlds Between">North America-The Worlds Between</option>
                                    <option value="North America-Radiant">North America-Radiant</option>
                                    <option value="North America-Tempest">North America-Tempest</option>
                                    <option value="North America-New Era">North America-New Era</option>
                                    <option value="North America-Observer">North America-Observer</option>
                                    <option value="North America-Starlight">North America-Starlight</option>
                                    <option value="North America-Myriad">North America-Myriad</option>
                                    <option value="North America-Oumuamua">North America-Oumuamua</option>
                                    <option value="North America-Eternium Phantasy">North America-Eternium Phantasy</option>
                                    <option value="North America-Azure Plane">North America-Azure Plane</option>
                                    <option value="North America-Nirvana">North America-Nirvana</option>
                                    <option value="Europe-Magia Przygoda Aida">Europe-Magia Przygoda Aida</option>
                                    <option value="Europe-Transport Hub">Europe-Transport Hub</option>
                                    <option value="Europe-The Lumina">Europe-The Lumina</option>
                                    <option value="Europe-Lycoris">Europe-Lycoris</option>
                                    <option value="Europe-Ether">Europe-Ether</option>
                                    <option value="Europe-Olivine">Europe-Olivine</option>
                                    <option value="Europe-Iter">Europe-Iter</option>
                                    <option value="Europe-Aimanium">Europe-Aimanium</option>
                                    <option value="Europe-Alintheus">Europe-Alintheus</option>
                                    <option value="Europe-Andoes">Europe-Andoes</option>
                                    <option value="Europe-Anomora">Europe-Anomora</option>
                                    <option value="Europe-Astora">Europe-Astora</option>
                                    <option value="Europe-Valstamm">Europe-Valstamm</option>
                                    <option value="Europe-Blumous">Europe-Blumous</option>
                                    <option value="Europe-Celestialrise">Europe-Celestialrise</option>
                                    <option value="Europe-Cosmos">Europe-Cosmos</option>
                                    <option value="Europe-Dyrnwyn">Europe-Dyrnwyn</option>
                                    <option value="Europe-Elypium">Europe-Elypium</option>
                                    <option value="Europe-Excalibur">Europe-Excalibur</option>
                                    <option value="Europe-Espoir IV">Europe-Espoir IV</option>
                                    <option value="Europe-Estrela">Europe-Estrela</option>
                                    <option value="Europe-Ex Nihilor">Europe-Ex Nihilor</option>
                                    <option value="Europe-Futuria">Europe-Futuria</option>
                                    <option value="Europe-Hephaestus">Europe-Hephaestus</option>
                                    <option value="Europe-Midgard">Europe-Midgard</option>
                                    <option value="Europe-Kuura">Europe-Kuura</option>
                                    <option value="Europe-Lyramiel">Europe-Lyramiel</option>
                                    <option value="Europe-Magenta">Europe-Magenta</option>
                                    <option value="Europe-Omnium Prime">Europe-Omnium Prime</option>
                                    <option value="Europe-Turmus">Europe-Turmus</option>
                                    <option value="South America-Corvus">South America-Corvus</option>
                                    <option value="South America-Calodesma Seven">South America-Calodesma Seven</option>
                                    <option value="South America-Columba">South America-Columba</option>
                                    <option value="South America-Tiamat">South America-Tiamat</option>
                                    <option value="South America-Orion">South America-Orion</option>
                                    <option value="South America-Luna Azul">South America-Luna Azul</option>
                                    <option value="South America-Hope">South America-Hope</option>
                                    <option value="South America-Tanzanite">South America-Tanzanite</option>
                                    <option value="South America-Antlia">South America-Antlia</option>
                                    <option value="South America-Pegasus">South America-Pegasus</option>
                                    <option value="South America-Phoenix">South America-Phoenix</option>
                                    <option value="South America-Centaurus">South America-Centaurus</option>
                                    <option value="South America-Cepheu">South America-Cepheu</option>
                                    <option value="South America-Cygnus">South America-Cygnus</option>
                                    <option value="South America-Grus">South America-Grus</option>
                                    <option value="South America-Hydra">South America-Hydra</option>
                                    <option value="South America-Lyra">South America-Lyra</option>
                                    <option value="South America-Ophiuchus">South America-Ophiuchus</option>
                                    <option value="Asia-Pacific-Cocoaiteruyo">Asia-Pacific-Cocoaiteruyo</option>
                                    <option value="Asia-Pacific-Food Fighter">Asia-Pacific-Food Fighter</option>
                                    <option value="Asia-Pacific-Gomap">Asia-Pacific-Gomap</option>
                                    <option value="Asia-Pacific-Yggdrasil">Asia-Pacific-Yggdrasil</option>
                                    <option value="Asia-Pacific-Daybreak">Asia-Pacific-Daybreak</option>
                                    <option value="Asia-Pacific-Adventure">Asia-Pacific-Adventure</option>
                                    <option value="Asia-Pacific-Eden">Asia-Pacific-Eden</option>
                                    <option value="Asia-Pacific-Fate">Asia-Pacific-Fate</option>
                                    <option value="Asia-Pacific-Nova">Asia-Pacific-Nova</option>
                                    <option value="Asia-Pacific-Ruby">Asia-Pacific-Ruby</option>
                                    <option value="Asia-Pacific-Babel">Asia-Pacific-Babel</option>
                                    <option value="Asia-Pacific-Pluto">Asia-Pacific-Pluto</option>
                                    <option value="Asia-Pacific-Sushi">Asia-Pacific-Sushi</option>
                                    <option value="Asia-Pacific-Venus">Asia-Pacific-Venus</option>
                                    <option value="Asia-Pacific-Galaxy">Asia-Pacific-Galaxy</option>
                                    <option value="Asia-Pacific-Memory">Asia-Pacific-Memory</option>
                                    <option value="Asia-Pacific-Oxygen">Asia-Pacific-Oxygen</option>
                                    <option value="Asia-Pacific-Sakura">Asia-Pacific-Sakura</option>
                                    <option value="Asia-Pacific-Seeker">Asia-Pacific-Seeker</option>
                                    <option value="Asia-Pacific-Shinya">Asia-Pacific-Shinya</option>
                                    <option value="Asia-Pacific-Stella">Asia-Pacific-Stella</option>
                                    <option value="Asia-Pacific-Uranus">Asia-Pacific-Uranus</option>
                                    <option value="Asia-Pacific-Utopia">Asia-Pacific-Utopia</option>
                                    <option value="Asia-Pacific-Jupiter">Asia-Pacific-Jupiter</option>
                                    <option value="Asia-Pacific-Sweetie">Asia-Pacific-Sweetie</option>
                                    <option value="Asia-Pacific-Atlantis">Asia-Pacific-Atlantis</option>
                                    <option value="Asia-Pacific-Takoyaki">Asia-Pacific-Takoyaki</option>
                                    <option value="Asia-Pacific-Mars">Asia-Pacific-Mars</option>
                                </select>
                            </div>
                        @elseif($kategori->kode == "genshin-impact")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}"  id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                <option value="">Pilih Server</option>
                                <option value="os_usa">America</option>
                                <option value="os_euro">Europa</option>
                                <option value="os_asia">Asia</option>
                                <option value="os_cht">TW_HK_MO</option>
                                </select>
                            </div>
                            @elseif($kategori->kode == "ragnarok-m")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}"  id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                <option value="">Pilih Server</option>
                                    <option value="90001">Eternal Love</option>
                                    <option value="90002">Midnight Party</option>
                                    <option value="90002003">Memory Of Faith</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "be-the-king")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                <option value="">Pilih Server</option>
                                    <option value="200001">Asia-S1</option>
                                    <option value="200002">Asia-S2</option>
                                    <option value="200003">Asia-S3</option>
                                    <option value="200004">Asia-S4</option>
                                    <option value="200005">Asia-S5</option>
                                    <option value="200006">Asia-S6</option>
                                    <option value="200007">Asia-S7</option>
                                    <option value="200008">Asia-S8</option>
                                    <option value="200009">Asia-S9</option>
                                    <option value="200010">Asia-S10</option>
                                    <option value="200011">Asia-S11</option>
                                    <option value="200012">Asia-S12</option>
                                    <option value="200013">Asia-S13</option>
                                    <option value="200014">Asia-S14</option>
                                    <option value="200015">Asia-S15</option>
                                    <option value="200016">Asia-S16</option>
                                    <option value="200017">Asia-S17</option>
                                    <option value="200018">Asia-S18</option>
                                    <option value="200019">Asia-S19</option>
                                    <option value="200020">Asia-S20</option>
                                    <option value="200021">Asia-S21</option>
                                    <option value="200022">Asia-S22</option>
                                    <option value="200023">Asia-S23</option>
                                    <option value="200024">Asia-S24</option>
                                    <option value="200025">Asia-S25</option>
                                    <option value="200026">Asia-S26</option>
                                    <option value="200027">Asia-S27</option>
                                    <option value="200028">Asia-S28</option>
                                    <option value="200029">Asia-S29</option>
                                    <option value="200030">Asia-S30</option>
                                    <option value="200031">Asia-S31</option>
                                    <option value="200032">Asia-S32</option>
                                    <option value="200033">Asia-S33</option>
                                    <option value="200034">Asia-S34</option>
                                    <option value="200035">Asia-S35</option>
                                    <option value="200036">Asia-S36</option>
                                    <option value="200037">Asia-S37</option>
                                    <option value="200038">Asia-S38</option>
                                    <option value="200039">Asia-S39</option>
                                    <option value="200040">Asia-S40</option>
                                    <option value="200041">Asia-S41</option>
                                    <option value="200042">Asia-S42</option>
                                    <option value="200043">Asia-S43</option>
                                    <option value="200044">Asia-S44</option>
                                    <option value="200045">Asia-S45</option>
                                    <option value="200046">Asia-S46</option>
                                    <option value="200047">Asia-S47</option>
                                    <option value="200048">Asia-S48</option>
                                    <option value="200049">Asia-S49</option>
                                    <option value="200050">Asia-S50</option>
                                    <option value="200051">Asia-S51</option>
                                    <option value="200052">Asia-S52</option>
                                    <option value="200053">Asia-S53</option>
                                    <option value="200054">Asia-S54</option>
                                    <option value="200055">Asia-S55</option>
                                    <option value="200056">Asia-S56</option>
                                    <option value="200057">Asia-S57</option>
                                    <option value="200058">Asia-S58</option>
                                    <option value="200059">Asia-S59</option>
                                    <option value="200060">Asia-S60</option>
                                    <option value="200061">Asia-S61</option>
                                    <option value="200062">Asia-S62</option>
                                    <option value="200063">Asia-S63</option>
                                    <option value="200064">Asia-S64</option>
                                    <option value="200065">Asia-S65</option>
                                    <option value="200066">Asia-S66</option>
                                    <option value="200067">Asia-S67</option>
                                    <option value="200068">Asia-S68</option>
                                    <option value="200069">Asia-S69</option>
                                    <option value="200070">Asia-S70</option>
                                    <option value="200071">Asia-S71</option>
                                    <option value="200072">Asia-S72</option>
                                    <option value="200073">Asia-S73</option>
                                    <option value="200074">Asia-S74</option>
                                    <option value="200075">Asia-S75</option>
                                    <option value="200076">Asia-S76</option>
                                    <option value="200077">Asia-S77</option>
                                    <option value="200078">Asia-S78</option>
                                    <option value="200079">Asia-S79</option>
                                    <option value="200080">Asia-S80</option>
                                    <option value="200081">Asia-S81</option>
                                    <option value="200082">Asia-S82</option>
                                    <option value="200083">Asia-S83</option>
                                    <option value="200084">Asia-S84</option>
                                    <option value="200085">Asia-S85</option>
                                    <option value="200086">Asia-S86</option>
                                    <option value="200087">Asia-S87</option>
                                    <option value="200088">Asia-S88</option>
                                    <option value="200089">Asia-S89</option>
                                    <option value="200090">Asia-S90</option>
                                    <option value="200091">Asia-S91</option>
                                    <option value="200092">Asia-S92</option>
                                    <option value="200093">Asia-S93</option>
                                    <option value="200094">Asia-S94</option>
                                    <option value="200095">Asia-S95</option>
                                    <option value="200096">Asia-S96</option>
                                    <option value="200097">Asia-S97</option>
                                    <option value="200098">Asia-S98</option>
                                    <option value="200099">Asia-S99</option>
                                    <option value="200100">Asia-S100</option>
                                    <option value="200101">Asia-S101</option>
                                    <option value="200102">Asia-S102</option>
                                    <option value="200103">Asia-S103</option>
                                    <option value="200104">Asia-S104</option>
                                    <option value="200105">Asia-S105</option>
                                    <option value="200106">Asia-S106</option>
                                    <option value="200107">Asia-S107</option>
                                    <option value="200108">Asia-S108</option>
                                    <option value="200109">Asia-S109</option>
                                    <option value="200110">Asia-S110</option>
                                    <option value="200111">Asia-S111</option>
                                    <option value="200112">Asia-S112</option>
                                    <option value="200113">Asia-S113</option>
                                    <option value="200114">Asia-S114</option>
                                    <option value="200115">Asia-S115</option>
                                    <option value="200116">Asia-S116</option>
                                    <option value="200117">Asia-S117</option>
                                    <option value="200118">Asia-S118</option>
                                    <option value="200119">Asia-S119</option>
                                    <option value="200120">Asia-S120</option>
                                    <option value="200121">Asia-S121</option>
                                    <option value="200122">Asia-S122</option>
                                    <option value="200123">Asia-S123</option>
                                    <option value="200124">Asia-S124</option>
                                    <option value="200125">Asia-S125</option>
                                    <option value="200126">Asia-S126</option>
                                    <option value="200127">Asia-S127</option>
                                    <option value="200128">Asia-S128</option>
                                    <option value="200129">Asia-S129</option>
                                    <option value="200130">Asia-S130</option>
                                    <option value="200131">Asia-S131</option>
                                    <option value="200132">Asia-S132</option>
                                    <option value="200133">Asia-S133</option>
                                    <option value="200134">Asia-S134</option>
                                    <option value="200135">Asia-S135</option>
                                    <option value="200136">Asia-S136</option>
                                    <option value="200137">Asia-S137</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "hyper-front")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                <option value="">Pilih Server</option>
                                <option value="eternal_love">SEA</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "crisis-action")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="">Pilih Server</option>
                                    <option value="Alliance">Alliance</option>
                                    <option value="Rebels">Rebels</option>
                                    <option value="Avenger">Avenger</option>
                                    <option value="Savior">Savior</option>
                                    <option value="Ranger">Ranger</option>
                                    <option value="Guardian">Guardian</option>
                                    <option value="Creator">Creator</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "ragnarok-origin")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="">Pilih Server</option>
                                    <option value="Prontera-1">Prontera-1</option>
                                    <option value="Prontera-2">Prontera-2</option>
                                    <option value="Prontera-3">Prontera-3</option>
                                    <option value="Prontera-4">Prontera-4</option>
                                    <option value="Prontera-5">Prontera-5</option>
                                    <option value="Prontera-6">Prontera-6</option>
                                    <option value="Prontera-7">Prontera-7</option>
                                    <option value="Prontera-8">Prontera-8</option>
                                    <option value="Prontera-9">Prontera-9</option>
                                    <option value="Prontera-10">Prontera-10</option>
                                    <option value="Izlude-1">Izlude-1</option>
                                    <option value="Izlude-2">Izlude-2</option>
                                    <option value="Izlude-3">Izlude-3</option>
                                    <option value="Izlude-4">Izlude-4</option>
                                    <option value="Izlude-5">Izlude-5</option>
                                    <option value="Izlude-6">Izlude-6</option>
                                    <option value="Izlude-7">Izlude-7</option>
                                    <option value="Izlude-8">Izlude-8</option>
                                    <option value="Izlude-9">Izlude-9</option>
                                    <option value="Izlude-10">Izlude-10</option>
                                    <option value="Morroc-1">Morroc-1</option>
                                    <option value="Morroc-2">Morroc-2</option>
                                    <option value="Morroc-3">Morroc-3</option>
                                    <option value="Morroc-4">Morroc-4</option>
                                    <option value="Morroc-5">Morroc-5</option>
                                    <option value="Morroc-6">Morroc-6</option>
                                    <option value="Morroc-7">Morroc-7</option>
                                    <option value="Morroc-8">Morroc-8</option>
                                    <option value="Morroc-9">Morroc-9</option>
                                    <option value="Morroc-10">Morroc-10</option>
                                    <option value="Geffen-1">Geffen-1</option>
                                    <option value="Geffen-2">Geffen-2</option>
                                    <option value="Geffen-3">Geffen-3</option>
                                    <option value="Geffen-4">Geffen-4</option>
                                    <option value="Geffen-5">Geffen-5</option>
                                    <option value="Geffen-6">Geffen-6</option>
                                    <option value="Geffen-7">Geffen-7</option>
                                    <option value="Geffen-8">Geffen-8</option>
                                    <option value="Geffen-9">Geffen-9</option>
                                    <option value="Geffen-10">Geffen-10</option>
                                    <option value="Payon-1">Payon-1</option>
                                    <option value="Payon-2">Payon-2</option>
                                    <option value="Payon-3">Payon-3</option>
                                    <option value="Payon-4">Payon-4</option>
                                    <option value="Payon-5">Payon-5</option>
                                    <option value="Payon-6">Payon-6</option>
                                    <option value="Payon-7">Payon-7</option>
                                    <option value="Payon-8">Payon-8</option>
                                    <option value="Payon-9">Payon-9</option>
                                    <option value="Payon-10">Payon-10</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" id="additional_data" placeholder="Nickname">
                            </div>
                                
                        @elseif($kategori->kode == "identity-v")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="">Pilih Server</option>
                                    <option value="ASIA">ASIA </option>
                                    <option value="NA and EU">NA and EU</option>
                                </select>
                            </div>
                                
                        @elseif($kategori->kode == "ace-racer")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="zone">
                                    <option value="" selected="">Pilih Server</option>
                                    <option value="japan">Japan</option>
                                    <option value="korea">Korea</option>
                                    <option value="asia">Asia</option>
                                    <option value="north america">North America</option>
                                    <option value="europe">Europe</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "mobile-legends-vilog")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="email_joki" name="email_joki" autocomplete="off">
                            </div>
                            <div class="col-6">
                            <input type="password" class="form-control" placeholder="{{ $kategori->placeholder_2  }}" id="password_joki" name="password_joki" autocomplete="off">
                                </div>
                                </select>
                            </div>
                            <div class="col-6">
                                <select class="form-control" id="loginvia_joki" name="loginvia_joki">
                                    <option value="">Login Via</option>
                                    <option value="moonton">Moonton (Rekomendasi)</option>
                                    <option value="vk">VK</option>
                                    <option value="tiktok">Tiktok</option>
                                    <option value="facebook">Facebook</option>
                                </select>
                            </div>
                            
                        @elseif($kategori->kode == "mobile-legends")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_2  }}" name="zone_id" id="zone" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "apex-legends-mobile")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "call-of-duty-mobile")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "point-blank")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "arena-of-valor")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "marvel-super-war")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "valorant")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "tri")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "telkomsel")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "indosat")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "smartfren")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "xl")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "axis")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "gopay")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "ovo")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "isaku")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "shopeepay")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "dana")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "pln")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Nomor Listrik Anda" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "linkaja")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>

                        @elseif($kategori->kode == "amazon-prime-video")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=" Request Profile" name="zone_id" id="zone" autocomplete="on">
                            </div>
                        @elseif($kategori->kode == "canva-pro")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "disney-hotstar")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Nomor Whatsapp " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "iqiyi-premium")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "netflix-premium")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder=" Request Profile + Pin" name="zone_id" id="zone" autocomplete="on">
                            </div>
                        @elseif($kategori->kode == "spotify-premium")
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Profile Spotify + Password (khusus Perpanjang)" name="zone_id" id="zone" autocomplete="on">
                            </div>
                        @elseif($kategori->kode == "vidio-premier")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "viu-premium")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Nomor " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "wetv-premium")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "youtube-premium")
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Masukkan Email " id="user_id" name="user_id" autocomplete="off">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Password (khusus gmail sendiri)" name="zone_id" id="zone" autocomplete="on">
                            </div> 
                        @elseif($kategori->kode == "roblox")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "google-play")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "garena-shell")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "razer-gold")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "riot-cash")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "unipin")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "playstation")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @elseif($kategori->kode == "xbox")
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                            </div>
                        @else
                        
                            @if(in_array($kategori->tipe,['game','voucher','pulsa','e-money','streamingapp']))
                            
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="{{ $kategori->placeholder_1  }}" id="user_id" name="user_id" autocomplete="off">
                                </div>
                            
                            @else
                        
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <input type="text" class="form-control" placeholder="Masukkan Email" id="email_joki" name="email_joki" autocomplete="off">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="password" class="form-control" placeholder="Masukkan Password" id="password_joki" name="password_joki" autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <select class="form-control" id="loginvia_joki" name="loginvia_joki">
                                            <option value="">Login Via</option>
                                            <option value="moonton">Moonton (Rekomendasi)</option
                                            <option value="vk">VK</option>
                                            <option value="tiktok">Tiktok</option>
                                            <option value="facebook">Facebook</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="text" class="form-control" placeholder="Masukkan Nickname" id="nickname_joki" name="nickname_joki" autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <input type="text" class="form-control" placeholder="Min Request 3 Hero (Diusahakan)" id="request_joki" name="request_joki" autocomplete="off">
                                    </div>
                                    <div class="col-12 mb-2">
                                        <input type="text" class="form-control" placeholder="Catatan untuk Penjoki" id="catatan_joki" name="catatan_joki" autocomplete="off">
                                    </div>
                                </div>
                            
                            @endif
                        
                        @endif
                            
                        <p class="panduan">{!! $kategori->deskripsi_field !!}</p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="card bg-card border-0 mb-4 shadow-form">
                    <div class="px-4 py-4">
                        <div class="num-page border-bottom">
                            <i class="mdi mdi-numeric-2-box-multiple-outline text-white"></i>
                            <b>Pilih Layanan</b>
                        </div>
                        <div class="row mt-4">
                            @if (count($nominal) == 0)
                            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                            <strong>Information!</strong> Produk sedang tidak tersedia.</div>
                            @endif
                            @foreach($nominal as $nom)
                            
                                <div class="col-6 col-md-3 col-lg-4 mb-3">
                                    <div id="product-{{$nom->id}}" class="p-2 px-3 cursor-pointer bg-product product-list" product-id="{{$nom->id}}">
                                        <b class="d-block">{{ $nom->layanan }}</b>
                                        <span class="harga">Rp {{ number_format($nom->harga) }},-</span>
                                    <!-- <td class="text-end">
                                <img src="{{ $nom->product_logo }}" alt="" width="28">
                                </td> -->
                                    </div>
                                </div>
                                                
                            @endforeach							
                        
                        </div>
                    </div>
                </div>

                <div class="card bg-card border-0 mb-4 shadow-form">
                    <div class="px-4 py-4">
                        <div class="num-page border-bottom">
                            <i class="mdi mdi-numeric-3-box-multiple-outline text-white"></i>
                            <b>Pilih Metode Pembayaran</b>
                        </div>
                        <div class="row mt-4">
                    
                             <div class="accordion mb-3" id="accordionExample-1" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);border-radius: 6px;">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="heading-qris">
                                        <button class="accordion-button collapsed bg-white-custom text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-qris" aria-expanded="false" aria-controls="collapse-ewallet">
                                            <div class="accordion-tipe">QRIS</div>
                                        </button>
                                    </h2>
                                    <div id="collapse-qris" class="accordion-collapse collapse" aria-labelledby="heading-qris" data-bs-parent="#accordionExample-1">
                                        <div class="accordion-body bg-payment">
                                            <div class="row">
                                                @foreach($pay_method as $p)
                                                @if($p->tipe == 'qris')
                                                <div class="col-6 col-md-3 col-lg-4">
                                                    <div id="method-23" class="p-2 border rounded mb-3 method-list bg-light shadow-sm"  method-id="{{$p->code}}">
                                                        <table class="w-100 border-bottom mb-2">
                                                            <tr>
                                                                <td>
                                                                    <img src="{{$p->images}}" alt="" class="w-75">
                                                                </td>
                                                                <td>
                                                                    <b style="font-size: 12px;white-space: nowrap;" id="{{$p->code}}"></b>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div style="font-size: 12px;color: #718096;">
                                                            <b class="d-block mb-2">{{$p->name}}</b>
                                                            <b class="d-block"  style="color: var(--warna_2);">{{$p->keterangan}}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-payment p-2 text-end border-0 text-nowrap" style="border-radius: 0 0 6px 6px;overflow-x: auto">
                                    @foreach($pay_method as $p)
                                    @if($p->tipe == 'qris')
                                    <img src="{{$p->images}}" alt="" width="64">
                                    @endif
                                    @endforeach
                                </div>
                            </div>


                            <div class="accordion mb-3" id="accordionExample-1" disabled style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);border-radius: 6px;">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="heading-virtual-account">
                                        <button class="accordion-button collapsed bg-white-custom text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-virtual-account" aria-expanded="false" aria-controls="collapse-virtual-account">
                                            <div class="accordion-tipe">Virtual Account</div>
                                        </button>
                                    </h2>
                                    <div id="collapse-virtual-account" class="accordion-collapse collapse" aria-labelledby="heading-virtual-account" data-bs-parent="#accordionExample-5">
                                        <div class="accordion-body bg-payment">
                                            <div class="row">
                                                @foreach($pay_method as $p)
                                                @if($p->tipe == 'virtual-account')
                                                <div class="col-6 col-md-3 col-lg-4">
                                                    <div id="method-21" class="p-2 border rounded mb-3 method-list bg-light shadow-sm"  method-id="{{$p->code}}">
                                                        <table class="w-100 border-bottom mb-2">
                                                            <tr>
                                                                <td>
                                                                    <img src="{{$p->images}}" alt="" class="w-75">
                                                                </td>
                                                                <td>
                                                                    <b style="font-size: 12px;white-space: nowrap;" id="{{$p->code}}"></b>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div style="font-size: 12px;color: #718096;">
                                                            <b class="d-block mb-2">{{$p->name}}</b>
                                                            <b class="d-block" style="color: var(--warna_2);">{{$p->keterangan}}</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-payment p-2 text-end border-0 text-nowrap" style="border-radius: 0 0 6px 6px;overflow-x: auto">
                                    @foreach($pay_method as $p)
                                    @if($p->tipe == 'virtual-account')
                                    <img src="{{$p->images}}" alt="" width="64">
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            {{-- <div class="accordion mb-3" id="accordionExample-2" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);border-radius: 6px;">
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="heading-bank">
                                        <button class="accordion-button collapsed bg-white-custom text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-bank" aria-expanded="false" aria-controls="collapse-ewallet">
                                            <div class="accordion-tipe">BANK TRANSFER</div>
                                        </button>
                                    </h2>
                                    <div id="collapse-bank" class="accordion-collapse collapse" aria-labelledby="heading-bank" data-bs-parent="#accordionExample-2">
                                        <div class="accordion-body bg-payment">
                                            <div class="row">
                                                <div class="col-6 col-md-3 col-lg-4">
                                                    <div id="method-23" class="p-2 border rounded mb-3 method-list bg-light shadow-sm"  method-id="BANK-TRANSFER">
                                                        <table class="w-100 border-bottom mb-2">
                                                            <tr>
                                                                <td>
                                                                    <img src="{{ asset('assets/payment/bank-transfer.jpg')}}" alt="" width="64">

                                                                    <b style="font-size: 12px;white-space: nowrap;" id="bank-transfer"></b>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div style="font-size: 12px;color: #718096;">
                                                            <b class="d-block mb-2">Transfer</b>
                                                            <b class="d-block"  style="color: var(--warna_2);">Bank Transfer</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-payment p-2 text-end border-0 text-nowrap" style="border-radius: 0 0 6px 6px;overflow-x: auto">
                                    <img src="{{ asset('assets/payment/bank-transfer.jpg')}}" alt="" width="64">
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                                
                <div class="card bg-card border-0 shadow-form">			
                    <div class="px-3 pt-3" style="margin-bottom: 15px;">
                        <div class="num-page border-bottom">
                            <i class="mdi mdi-numeric-4-box-multiple-outline text-white"></i>
                            <b>Konfirmasi Pesanan</b>
                        </div>
                        <div class="row">
                            <p class="" style="font-size: 13px;color: white;">Invoice transaksi akan dikirimkan kepada nomer whatsapp anda.</p>
                            
                            <div class="form-group col-12 col-md-8">
                                <input type="number" class="form-control" placeholder="6281 xxxx xxxx" id="nomor" autocomplete="off" name="whatsapp">
                            </div>
                            
                            <div class="form-group col-12 col-md-4 mt-2">
                                <button class="btn btn-danger btn-order btn-block waves-effect" style="margin-top:-1px;padding: 8px 10px" type="button" id="btn-order">
                                    <i class="mdi mdi-shopping mr-1"></i> Order Now</button>
                            </div>
                    
                        </div>
                    
                    </div>
                </div>

            </form>
        </div>

    </div>   
</div>
<!--tambahan--->
<!-----end----->



<style>
.mt-c {
    margin-top: 0.5rem!important;
}
.btn-danger {
    border-color: #E42728 !important;
    background-color: #EA5455 !important;
    color: #FFF;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}
.btn-block, input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
    width: 100%;
}
</style>

        






@push('custom_script')

<script>
function removeClass(){  
    btnorder.className = btnorder.className.replace(new RegExp('(?:^|\\s)loading(?!\\S)'), '');
}

var btnorder = document.getElementById('btn-order');


btnorder.addEventListener("click", function() {
    btnorder.className = btnorder.className + ' loading';
    setTimeout(removeClass, 5000);
}, false);
</script>

<script>
    
     function changeHarga(harga,hargareal)
    {
        $("#SALDO").html(harga);
        $("#OVO").html(harga);
        $("#GOPAY").html(harga);
        $("#SHOPEEPAY").html(harga);
        $("#QRIS").html(harga);
        $("#QRIS2").html(harga);
        $("#QRISC").html(harga);
        $("#BCAVA").html(harga);
        $("#MYBVA").html(harga);
        $("#PERMATAVA").html(harga);
        $("#BNIVA").html(harga);
        $("#BRIVA").html(harga);
        $("#MANDIRIVA").html(harga);
        $("#SMSVA").html(harga);
        $("#MUAMALATVA").html(harga);
        $("#CIMBVA").html(harga);
        $("#SAMPOERNAVA").html(harga);
        $("#BSIVA").html(harga);
        $("#OCBCVA").html(harga);
        $("#DANAMONVA").html(harga);
        $("#BNCVA").html(harga);
        $("#ALFAMART").html(harga);
        $("#ALFAMIDI").html(harga);
        $("#INDOMARET").html(harga);
    }
    
    
     $('.accordion-button').css('pointer-events','none');
     $('.accordion-header').addClass('hide-payment');
     
    
    $('.product-list').click(function(){
        
        $('.accordion-button').css('pointer-events','auto');
        $('.accordion-header').removeClass('hide-payment');
        
       const prd = $(this).attr('product-id');
       $('.product-list').removeClass('active');
       $(this).addClass('active');
       
       $('#nominal').val(prd);
       
       $.ajax({
                    url: "<?php echo route('ajax.price') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": prd
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    }
                })
       
       
    });
    
    
    $('.accordion-header').click(function(){
       
        if($(this).hasClass('hide-payment')){
            
            toastr.options.positionClass = "toast-top-right";
            toastr.options.closeButton = true;
            
            toastr.warning('Mohon untuk pilih item terlebih dahulu');
            
        }
        
    });
    
    
    
    $('.method-list').click(function(){
        
       const mtd = $(this).attr('method-id');
       $('.method-list').removeClass('active');
       $(this).addClass('active');
       
       $('#metode').val(mtd);
       
      
       
    });
    
    $("#btn-order").on("click", function() {
        

            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var email_joki = $("#email_joki").val();
            var password_joki = $("#password_joki").val();
            var loginvia_joki = $("#loginvia_joki").val();
            var nickname_joki = $("#nickname_joki").val();
            var request_joki = $("#request_joki").val();
            var catatan_joki = $("#catatan_joki").val();
            var service = $("#nominal").val();
            var pembayaran = $("#metode").val();
            var nomor = $("#nomor").val();
            // var email = $("input[name='email']").val();
            var voucher = $("#voucher").val();
            var ktg_tipe = $("#ktg_tipe").val();
           
            $.ajax({
                url: "<?php echo route('ajax.confirm-data') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'email_joki' : email_joki,
                    'password_joki' : password_joki,
                    'loginvia_joki' : loginvia_joki,
                    'nickname_joki' : nickname_joki,
                    'request_joki' : request_joki,
                    'catatan_joki' : catatan_joki,
                    'ktg_tipe' : ktg_tipe,
                    // 'email': email,
                    'voucher': voucher
                },
                complete:function(){
                    grecaptcha.reset();
                },
                success: function(res) {
                    if (res.status == true) {
                        Swal.fire({
                            icon: 'question',
                            titleText: 'Detail Pesanan',
                            html: `${res.data}`,
                            showCancelButton: true,
                            cancelButtonText: 'Cancel',
                            confirmButtonText: 'Beli Sekarang',
                            backdrop: 'hsla(220,9%,46%,.75)',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("#nomor").val();
                                // var email = $("input[name='email']").val();
                                $.ajax({
                                    url: "<?php echo route('order') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        // 'email': email,
                                        'voucher': voucher,
                                        'email_joki' : email_joki,
                                        'password_joki' : password_joki,
                                        'loginvia_joki' : loginvia_joki,
                                        'nickname_joki' : nickname_joki,
                                        'request_joki' : request_joki,
                                        'catatan_joki' : catatan_joki,
                                        'ktg_tipe' : ktg_tipe,

                                    },
                                    beforeSend: function() {
                                        let timerInterval
                                        Swal.fire({
                                          title: 'Tunggu Sebentar',
                                          timerProgressBar: false,
                                          didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                              b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                          },
                                          willClose: () => {
                                            clearInterval(timerInterval)
                                          }
                                        }).then((result) => {
                                          /* Read more about handling dismissals below */
                                          if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                          }
                                        })
                                    },
                                    success: function(resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                showConfirmButton: false,
                                                allowOutsideClick: false,
                                                // background: '#222831',
                                                // color: '#fff'
                                            });
                                            window.location = `/pembelian/invoice/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                // background: '#222831',
                                                // color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            text: res.data,
                            icon: 'error',
                            // background: '#222831',
                            // color: '#fff'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            // background: '#222831',
                            // color: '#fff'
                        });
                    }
                },
                error: function(e) {
                    if (e.status == 422) {
                        toastr.options = {
                            "positionClass": "toast-top-right",
                            "closeButton": false,
                            "progressBar": true,
                        }
                        toastr["error"]("Masih ada data yang kosong", "Warning");
                    }
                }
            })
        })
        
        
        
        
        $("#btn-check").on("click", function(){
            var voucher = $("#voucher").val();
            var service = $("#nominal").val();
            $.ajax({
                url: "<?php echo route('check.voucher') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    "_token": "<?php echo csrf_token(); ?>",
                    "voucher": voucher,
                    "service": service
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        title: "Mohon Tunggu",
                        // background: '#222831',
                        // color: '#fff',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function (res){
                    Swal.fire({
                        icon: "info",
                        title: res.message,
                        // background: '#222831',
                        // color: '#fff',
                        showConfirmButton: true,
                        allowOutsideClick: true,
                    });                   
                    
                    if(res.harga){
                        changeHarga(res.harga);
                    }
                },
                error: function(e){
                    Swal.fire({
                        title: 'Oops...',
                        text: e.responseJSON.message,
                        icon: 'error',
                        // background: '#222831',
                        // color: '#fff'
                    });                    
                }
            }) 
        });
        

    
    
    
</script>





@endpush




@endsection