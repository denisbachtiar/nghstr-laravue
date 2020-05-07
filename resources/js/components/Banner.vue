<template>
<div>
    <div class="jumbotron-parent">
    <b-jumbotron class="container">
        <b-row>
            <b-col cols="6">
                <h1 class="mb-3"><b>PHP Hosting</b></h1>
                <h2 class="mb-3"><b>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</b></h2>
                <ul>
                    <li>Solusi PHP untuk performa query lebih cepat.</li>
                    <li>Konsumsi memori yang lebih rendah</li>
                    <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.</li>
                    <li>Fitur enkripsi IonCube dan Zend Guard Loaders.</li>
                </ul>
            </b-col>
            <b-col cols="6"><img :src="'/images/svg/php7-banner.svg'"></b-col>
        </b-row>
    </b-jumbotron>
    </div>
    <div class="d-flex flex-wrap align-items-end mx-auto feature" style="width: 75%;">
        <div class="mx-auto">
            <img :src="'/images/zendguard.png'">
            <p class="text-center">PHP Zend Guard Loader</p>
        </div>
        <div class="mx-auto">
            <img :src="'/images/composer.png'">
            <p class="text-center">PHP Composer</p>
        </div>
        <div class="mx-auto">
            <img :src="'/images/ioncube.png'">
            <p class="text-center">PHP ionCube Loader</p>
        </div>
    </div>
    </div>
</template>