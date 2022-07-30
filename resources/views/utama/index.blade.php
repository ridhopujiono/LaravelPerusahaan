<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JP. INDONESIAN</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="
    overflow-x: hidden;
" 1>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 0px;
        }

        .slider {
            width: 100%;
            text-align: center;
            overflow: hidden;
            margin: 30px 0;
        }

        .slides {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .slides::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        .slides::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 5px;
        }

        .slides::-webkit-scrollbar-track {
            background: transparent;
        }

        .slides>div {
            scroll-snap-align: start;
            flex-shrink: 0;
            width: 300px;
            margin: 0 10px 0 10px;
            border-radius: 7px;
            background: #fff;
            transform: scale(1);
            transition: transform 0.5s;
            font-size: 100%;
        }
    </style>
    <nav id="#nav">
        <div class=" wrapper">
            <div class="logo"><a href=''>WILDANSHOP</a></div>
            <div class="menu" style="
                    margin-right: 40px;
                ">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{ url('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home"
            style="
                background: #fff5c3;
                padding-top: 70px;
                padding-bottom: 70px;
            ">
            <div class="kolom">
                <p class="deskripsi">WILDAN SHOP TERMURAH></p>
                <h2>PT.JP INDONESIAN</h2>
                JANGAN LUPA SEDEKAH BIAR GACOR TERUS!!!
                <p style="margin-top: 50px;"><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
            <img style="margin-left: 50px;" src="https://crm.vcgamers.com/uploads/product/20220220200111produk00.png" />


        </section>

        <!-- untuk layanan -->
        <div id="layanan" style="
                padding-top: 80px;
                ">
            <h2 style="text-align: center; margin-bottom: 50px">Layanan</h2>
            <div>
                <div>
                    <div class="slider">
                        <div class="slides"
                            style="
                            padding-bottom: 15px; justify-content: center
                        ">
                            @forelse($layanan as $l)
                                <div style="box-shadow: 1px 1px 4px #eee; margin-right: 50px !important">
                                    <div class="card-image">
                                        <img src="{{ asset($l->foto) }}" width="300px" height="230px" alt="">
                                    </div>
                                    <div class="card-body" style="padding: 20px; text-align:start">
                                        <h3>{{ $l->nama_layanan }}</h3>
                                        {{ $l->keterangan }}
                                    </div>
                                </div>
                            @empty
                                <center style="width: 100%">
                                    <div
                                        style="
                                        background: #ffdddd;
                                        color: #520000;
                                        padding: 20px;
                                        border-radius: 7px;
                                    ">
                                        Layanan belum tersedia
                                    </div>
                                </center>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>

            <!-- untuk partners -->
            <section id="partners" style="
                padding-top: 30px;
            ">
                <div class="tengah">
                    <div class="kolom">
                        <h2>Partner Kami</h2>
                        <p>PT.JP INDONESIAN berkomitmen penuh untuk mendukung bisnis Anda. Untuk menyediakan solusi dan
                            nilai bisnis terhadap pelanggan kami. PT.JP bekerjasama dengan berbagai partner terbaik.
                            Berikut merupakan list partner kami.</p>
                    </div>

                    <div class="partner-list"
                        style="
                        padding-top: 30px;
                        display: flex;
                        flex-wrap: wrap;
                    ">
                        @forelse ($partner as $p)
                            <div class="kartu-partner" style="width: 19%">
                                <img
                                    src="https://obs.line-scdn.net/0hufUrbG4KKkloCz09yatVHlBdJjhbbTBASjltfBpbJ35CJ2oYA2l5Kk9bfGUVOG8XSG03LEwMd3xFODpPVA/w644" />
                            </div>
                        @empty
                            <center style="width: 100%">
                                <div
                                    style="
                                        background: #ffdddd;
                                        color: #520000;
                                        padding: 20px;
                                        border-radius: 7px;
                                    ">
                                    Layanan belum tersedia
                                </div>
                            </center>
                        @endforelse

                    </div>
                </div>
            </section>
        </div>

        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <p>JL.Surabaya-Semarang</p>
                        <p>NO : 082233230288</p>
                    </div>
                    <div class="footer-section">
                        <h3>Social</h3>
                        <p><b>YouTube: </b>JP INDONESIAN</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2022. <b>JP INDONESIAN</b> PT.JP INDONESIAN
            </div>
        </div>

</body>

</html>
