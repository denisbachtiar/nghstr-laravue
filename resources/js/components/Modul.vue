<template>
    <div>
    <div class="container">
        <h3 class="text-center mt-5 mb-5">Mendukung Penuh Framework Laravel</h3>
        <b-row class="sect">
            <b-col lg="6">
                <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit anda</p>
                <ul>
                    <li>Install Laravel <b>1 klik</b> dengan softaculous Installer</li>
                    <li>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json</b> dan <b>fileinfo.</b></li>
                    <li>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</li>
                </ul>
                <p><small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small></p>
                <b-button variant="primary" pill>Pilih Hosting Anda</b-button>
            </b-col>
            <b-col lg="6">
                <img :src="'/images/svg/banner-support-laravel.svg'" width="100%">
            </b-col>
        </b-row>
        <h3 class="text-center mt-5 mb-5">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
        <b-row class="mb-5 modul">
            <b-col md="3" sm="6" cols="6" v-for="(item, index) in items" :key="index">
                <p class="mb-0" v-for="n in item.list">{{n}}</p>
            </b-col>
        </b-row>
        <b-button variant="outline-dark" pill class="mx-auto d-block">Selengkapnya</b-button>

        <b-row class="mt-5 sect">
            <b-col lg="6" class="pr-5">
                <h3 class="mb-3">Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan <br>teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi <br/>dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching. Apache load balancer <br/>berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> proctection <br/>dan auto backup untuk keamanan website PHP Anda.</p>
                <b-button variant="primary" class="mt-3" pill>Pilih Hosting Anda</b-button>
            </b-col>
            <b-col lg="6">
                <img :src="'/images/image-support.png'" width="100%">
            </b-col>
        </b-row>
    </div>
    <div class="bg-gray mt-5">
        <div class="container">
            <b-row>
                <b-col lg="6" class="pr-5">
                    <p class="mb-0"><b>Bagikan jika Anda menyukai halaman ini</b></p>
                </b-col>
                <b-col lg="6">
                    <div class="d-flex align-items-center socmed">
                        <img :src="'/images/facebook.png'" class="ml-auto" width="30px">
                        <p class="mb-0 pointing-box">80k</p>
                        <img :src="'/images/twitter.png'" class="ml-2" width="30px">
                        <p class="mb-0 pointing-box">450</p>
                        <img :src="'/images/gplus.png'" class="ml-2" width="30px">
                        <p class="mb-0 pointing-box">1900</p>
                    </div>
                </b-col>
            </b-row>
        </div>
    </div>
    </div>
</template>

<script>
import modul from "../../../public/json/modul.json"
export default {
    data() {
        return {
            items: modul
        }
    },
}
</script>