<template>
    <main class="main register flex">
        <form @submit.prevent="submitForm" method="POST">
            <p>
            <label for="type">종류:</label>
            <input type="text" name="kind" id="type" ref="type">
            </p>

            <p>
            <label for="pronunciation">제목:</label>
            <input type="text" name="title" id="title" ref="title">
            </p>

            <p>
            <label for="japanese">영상 주소:</label>
            <input type="text" name="url" id="url" ref="url">
            </p>

            <div class="div__btn">
                <button type="submit">제출</button>
            </div>
        </form>
    </main>
</template>

<script>
import axios from 'axios';

export default {
    name: "Register",
    methods: {
        submitForm() {
            const formData = {
                kind: this.$refs.type.value,
                title: this.$refs.title.value,
                url: this.$refs.url.value,
            };
            // 서버로 데이터를 전송합니다.
            axios.post('/video/registerUpdate', formData)
                .then(response => {
                    // 성공적으로 전송되었을 때 수행할 작업
                    console.log('데이터가 성공적으로 서버로 전송되었습니다.');
                })
                .catch(error => {
                    // 전송 중 오류가 발생한 경우 처리
                    console.error('데이터 전송 중 오류가 발생했습니다:', error);
                });
        },
    }
}
</script>

<style scoped>
.register {
    align-items: center;
}

.register button {
    border: none;
    border-radius: 5px;
    background-color: greenyellow;
    margin-top: 5px;
    padding: 7px;
    font-size: 1.2rem;
}

.div__btn {
    display: flex;
    justify-content: center;
}
</style>
