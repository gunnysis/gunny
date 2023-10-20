<template>
    <div class="container">
        <Header />
        <ShowMemo v-if="memos" :memos="memos" />
        <RegisterMemo v-else />
        <Footer />
    </div>
</template>

<script>
import Header from "./layout/Header.vue";
import Footer from "./layout/Footer.vue";
import ShowMemo from "./content/ShowMemo.vue";
import RegisterMemo from "./content/RegisterMemo.vue";

export default {
    name: "Memo",
    components: {Footer, Header, ShowMemo, RegisterMemo},
    props: {
        memos: {
            type: Object,
            required: true,
        },
    },
}
</script>

<style scoped>

</style>
