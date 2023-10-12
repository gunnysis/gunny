<template>
    <Header />
    영상<Show />
    <Footer />
</template>

<script>
import Header from "./layout/Header.vue";
import Show from "./content/Show.vue";
import Footer from "./layout/Footer.vue";
export default {
    name: "Video",
    components: {Footer, Header, Show},
}
</script>

<style scoped>

</style>
