<template>
    <div>
        <div class="bg-sky pt-5 pb-5">
            <div class="container">
                <h1 class="text-white mb-0">Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></h1>
            </div>
        </div>

        <footer>
            <div class="container pt-5 pb-5">
                <b-row>
                    <b-col cols="3">
                        <p class="title"><b>Hubungi Kami</b></p>
                        <p>0274-5305505<br>Senin - Minggu<br>24 Jam Nonstop<br><br>Jl. Selokan Mataram Monjali Karangjati MT I/304<br>Sinduadi, Mlati, Sleman<br>Yogyakarta 55284</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Layanan</b></p>
                        <p>Domain<br>Shared Hosting<br>Cloud VPS Hosting<br>Managed VPS Hosting<br>Web builder<br>Keamanan SSL/HTTPS<br>Jasa Pembuatan Website<br>Program Affiliasi</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Service Hosting</b></p>
                        <p>Hosting Murah<br>Hosting Indonesia<br>Hosting Singapura SG<br>Hosting PHP<br>Hosting Wordpress<br>Hosting Laravel</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Tutorial</b></p>
                        <p>Knowledgebase<br>Blog<br>Cara Pembayaran</p>
                    </b-col>
                </b-row>

                <b-row class="mt-5">
                    <b-col cols="3">
                        <p class="title"><b>Tentang Kami</b></p>
                        <p>Tim Niagahoster<br>Karir<br>Events<br>Penawaran & Promo Spesial<br>Kontak Kami</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Kenapa Pilih Niagahoster?</b></p>
                        <p>Support Terbaik<br>Garansi Harga Termurah<br>Domain Gratis Selamanya<br>Datacenter Hosting Terbaik<br>Review Pelanggan</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Newsletter</b></p>
                        <b-form-input
                        id="input-1"
                        type="email"
                        required
                        placeholder="Email"
                        ></b-form-input>
                        <p class="disable">Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda</p>
                    </b-col>
                    <b-col cols="3">
                        <p class="title"><b>Social Media</b></p>
                    </b-col>
                </b-row>
                <p class="title"><b>Pembayaran</b></p>
                <hr>
                <p><small>Copyright @2016 Niagahoster | Hosting powered by PHP 7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta<br>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</small></p>
            </div>
        </footer>
    </div>
</template>

<style lang="scss">
    .bg-sky {
        background-color: #1fa2f3;
    }
    footer {
        p {
            color: #d8d8d8;
            &.disable {
                color: #646464;
            }
            &.title {
                color: #8e8e8e;
                text-transform: uppercase;
            }
        }
        background-color: #303030;
    }
</style>