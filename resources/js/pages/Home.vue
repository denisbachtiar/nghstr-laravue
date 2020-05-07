<template>
<div>
    <Nav></Nav>
    <Banner></Banner>
    <Paket></Paket>
    <Modul></Modul>
    <Footer></Footer>
</div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Nav from '../components/Navbar.vue'
import Banner from '../components/Banner.vue'
import Paket from '../components/Paket.vue'
import Modul from '../components/Modul.vue'
import Footer from '../components/Footer.vue'
export default {
    components: {
        Nav,
        Banner,
        Paket,
        Modul,
        Footer
    }
}
</script>