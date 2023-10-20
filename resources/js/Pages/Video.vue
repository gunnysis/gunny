<template>
    <div class="container">
        <Header />
        <ShowVideo v-if="videos" :videos="videos"/>
        <RegisterVideo v-else />
        <Footer />
    </div>
</template>

<script>
import Header from "./layout/Header.vue";
import Footer from "./layout/Footer.vue";
import ShowVideo from "./content/ShowVideo.vue";
import RegisterVideo from "./content/RegisterVideo.vue";
export default {
    name: "Video",
    components: {Footer, Header, RegisterVideo, ShowVideo},
    props: {
        videos: {
            type: Object,
            required: true,
        },
    },
}
</script>

<style scoped>

</style>
