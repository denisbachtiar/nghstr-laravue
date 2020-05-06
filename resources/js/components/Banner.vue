<template>
<div>
    <b-jumbotron>
        <b-row>
            <b-col cols="7">
                <h2><b>PHP Hosting</b></h2>
                <h4>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                <ul>
                    <li>Solusi PHP untuk performa query lebih cepat.</li>
                    <li>Konsumsi memori yang lebih rendah</li>
                    <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</li>
                    <li>Fitur enkripsi IonCube dan Zend Guard Loaders.</li>
                </ul>
            </b-col>
            <b-col cols="5"><img :src="'/images/svg/php7-banner.svg'"></b-col>
        </b-row>
    </b-jumbotron>
    <div class="d-flex flex-wrap align-items-center mx-auto" style="width: 60%;">
        <div class="mx-auto">
            <img :src="'/images/svg/zendguard-banner.svg'">
            <p class="text-center">PHP Zend Guard Loader</p>
        </div>
        <div class="mx-auto">
            <img :src="'/images/svg/composer-banner.svg'">
            <p class="text-center">PHP Composer</p>
        </div>
        <div class="mx-auto">
            <img :src="'/images/svg/ioncube-banner.svg'">
            <p class="text-center">PHP ionCube Loader</p>
        </div>
    </div>
    </div>
</template>
<style lang="scss">
.jumbotron {
    background-color: #ffffff;
}
</style>