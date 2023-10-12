<template>
    <Header />
    메모<Show />
    <Footer />
</template>

<script>
import Header from "./layout/Header.vue";
import Show from "./content/Show.vue";
import Footer from "./layout/Footer.vue";
export default {
    name: "Memo",
    components: {Footer, Header, Show},
}
</script>

<style scoped>

</style>
