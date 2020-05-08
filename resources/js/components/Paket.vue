<template>
    <div class="mt-5">
        <div class="text-center mb-5">
            <h3 class="font-bold"><b>Paket Hosting Singapura yang Tepat</b></h3>
            <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
        </div>
        <div class="container">
        <b-card-group deck>
            <b-card v-for="(item, index) in items" v-bind:class="{'best-seller':item.best_seller}" :key="index" :title="item.title" >

            <div class="ribbon-parent" v-if="item.best_seller">
                <p class="ribbon"><span>Best Seller!</span></p>
            </div>

            <div class="price">
                <p class="mb-0">Rp. {{item.original_price}}</p>
                <h1 class="mb-0"><sup>Rp </sup><span v-html="item.price"></span><sup>/bln</sup></h1>
            </div>
            <div class="user">
                <p class="mb-0"><b>{{item.user}} </b>Pengguna Terdaftar</p>
            </div>
            <div class="list">
                <p class="mb-2" v-for="n in item.list" v-html="n"></p>
                <b-button variant="outline-dark" pill class="mx-auto d-block mt-5">Pilih Sekarang</b-button>
            </div>
            </b-card>
           
        </b-card-group>
        
        <h3 class="text-center mt-5 mb-5">Powerful dengan Limit PHP yang Lebih Besar</h3>
        <b-row class="mb-5">
            <b-col cols="6">
                <b-list-group>
                    <b-list-group-item>max execution time 300s</b-list-group-item>
                    <b-list-group-item>max execution time 300s</b-list-group-item>
                    <b-list-group-item>php memory limit 1024 MB</b-list-group-item>
                </b-list-group>
            </b-col>
            <b-col cols="6">
                <b-list-group>
                    <b-list-group-item>post max size 128 MB</b-list-group-item>
                    <b-list-group-item>upload max filesize 128 MB</b-list-group-item>
                    <b-list-group-item>max input vars 2500</b-list-group-item>
                </b-list-group>
            </b-col>
        </b-row>
        <hr>
        <h3 class="text-center mt-5 mb-5">Semua Paket Hosting Sudah Termasuk</h3>
        <b-row class="text-center">
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/php-semua-versi.svg'" width="20%" class="mx-auto d-block">
                <h5><b>PHP Semua Versi</b></h5>
                <p>mulai dari versi PHP 5.3 s/d PHP 7. <br> Ubah sesuka anda</p>
            </b-col>
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/mysql.svg'" width="20%" class="mx-auto d-block">
                <h5><b>MySQL Versi 5.6</b></h5>
                <p>Nikmati MySql versi terbaru, tercepat dan <br> kaya akan fitur</p>
            </b-col>
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/cpanel.svg'" width="20%" class="mx-auto d-block">
                <h5><b>Panel Hosting cPanel</b></h5>
                <p>Kelola website dengan panel canggih yang <br> familiar di hati anda</p>
            </b-col>
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/garansi-up.svg'" width="20%" class="mx-auto d-block">
                <h5><b>Garansi Uptime 99.9%</b></h5>
                <p>Data center yang mendukung kelangsungan <br> website Anda 24/7 </p>
            </b-col>
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/inno-db.svg'" width="20%" class="mx-auto d-block">
                <h5><b>Database InnoDB Unlimited</b></h5>
                <p>Jumlah dan ukuran database yang tumbuh <br> sesuai kebutuhan anda </p>
            </b-col>
            <b-col cols="4" class="mb-5">
                <img :src="'/images/svg/wildcard.svg'" width="20%" class="mx-auto d-block">
                <h5><b>Wildcard Remote MySql</b></h5>
                <p>Mendukung s/d 25 max_user_connections <br> dan 100 max_connections </p>
            </b-col>
        </b-row>
        <hr>
        </div>
    </div>
</template>

<script>
import paket from "../../../public/json/paket.json"
export default {
    data() {
        return {
            items: paket
        }
    },
}
</script>
