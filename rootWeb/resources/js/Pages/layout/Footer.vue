<template>
    <footer class="div__footer">
        <section class="footer__company__info">
            <div class="div__company__infos">
                <section class="company__intro">
                    <div><b>대표</b> 박정건</div>
                    <div><b>주소</b> 서울특별시 양천구</div>
                    <div><b>고객문의</b> qkr133456@gmail.com</div>
                </section>
                <section class="company__cs">
                    <span>이용약관</span>
                    <span>개인정보처리방침</span>
                </section>
            </div>
        </section>
    </footer>
</template>

<script>
export default {
    name: "Footer",
    mounted() {

    }
};
</script>

<style scoped>
.div__footer {
    color: #0000008c;
    width: 100vw;
    background-color: #d3d3d3;
    padding: 0.5rem;
    position: relative;
    top: 10vh;
}


.div__company__infos {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0.5rem;
}

.footer__company__info {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    display: block;
}

.company__intro div {
    padding-bottom: 0.5rem;
    font-size: 0.8rem;
}

.company__cs {
    display: inline-block;
    font-size: 0.8rem;
}

.company__cs span {
    padding-right: 0.5rem;
}
</style>
