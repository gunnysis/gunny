<template>
    <Header />
    <Show v-if="memos" :memos="memos" />
    <RegisterMemo v-else />
    <Footer />
</template>

<script>
import Header from "./layout/Header.vue";
import Show from "./content/ShowMemo.vue";
import Footer from "./layout/Footer.vue";
import RegisterMemo from "./content/RegisterMemo.vue";

export default {
    name: "Memo",
    components: {Footer, Header, Show, RegisterMemo},
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
