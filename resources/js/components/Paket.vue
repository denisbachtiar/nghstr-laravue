<template>
    <div class="mt-5">
        <div class="text-center mb-5">
            <h3 class="font-bold"><b>Paket Hosting Singapura yang Tepat</b></h3>
            <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
        </div>
        <div class="container">
        <b-card-group>
            <b-card title="Bayi" img-alt="Image" img-top>
            <div class="price">
                <p>Rp. 19.900</p>
                <h5><sup>Rp </sup>14<sup>.900/bln</sup></h5>
            </div>
            </b-card>

            <b-card title="Pelajar" img-alt="Image" img-top>
            <b-card-text>
                This card has supporting text below as a natural lead-in to additional content.
            </b-card-text>
            <template v-slot:footer>
                <small class="text-muted">Last updated 3 mins ago</small>
            </template>
            </b-card>

            <b-card title="Personal" img-alt="Image" img-top>
            <b-card-text>
                This is a wider card with supporting text below as a natural lead-in to additional content.
                This card has even longer content than the first to show that equal height action.
            </b-card-text>
            <template v-slot:footer>
                <small class="text-muted">Last updated 3 mins ago</small>
            </template>
            </b-card>

            <b-card title="Bisnis" img-alt="Image" img-top>
            <b-card-text>
                This is a wider card with supporting text below as a natural lead-in to additional content.
                This card has even longer content than the first to show that equal height action.
            </b-card-text>
            <template v-slot:footer>
                <small class="text-muted">Last updated 3 mins ago</small>
            </template>
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
