<template>
    <!-- <Header></Header> -->
    <Sidebar></Sidebar>
    <Home></Home>
    <Footer></Footer>
</template>
<script>
// import Header from '../js/components/Header.vue';
import Sidebar from '../js/components/Sidebar.vue';
import Home from '../js/components/Home.vue';
import Footer from '../js/components/Footer.vue';
export default {
  name: 'App',
  components: {
    Home,
    Sidebar,
    Footer
  }
}
</script>