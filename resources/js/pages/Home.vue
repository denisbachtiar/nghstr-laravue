<template>
<div>
    <Nav></Nav>
    <Banner></Banner>
    <Paket></Paket>
</div>
</template>
<script>
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Nav from '../components/Navbar.vue'
import Footer from '../components/Footer.vue'
import Banner from '../components/Banner.vue'
import Paket from '../components/Paket.vue'
export default {
    components: {
        Nav,
        Banner,
        Paket,
        Footer
    }
}
</script>