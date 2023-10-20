<template>
    <div class="container">
        <Header />
        <Main />
        <Footer />
    </div>
</template>

<script>
import Header from "./layout/Header.vue";
import Main from "./content/Main.vue";
import Footer from "./layout/Footer.vue";
export default {
    name: "Index",
    components: {Footer, Header,Main},
}
</script>

<style scoped>

</style>
