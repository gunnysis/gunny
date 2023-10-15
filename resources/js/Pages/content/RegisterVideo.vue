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
    methods: {
        async submitForm() {
            const formData = {
                kind: this.$refs.type.value,
                title: this.$refs.title.value,
                url: this.$refs.url.value,
            };
            // 서버로 데이터를 전송하고 응답을 기다립니다.
            const response = await fetch("/video/registerUpdate", {
                method: "POST",
                body: JSON.stringify(formData),
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            });

            if (response.ok) {
                // 성공적으로 처리된 경우 다음 페이지로 리다이렉트
                window.location.href = "/video/show";
            } else {
                // 오류 처리
                console.error("데이터 저장 중 오류가 발생했습니다.");
            }
        },
    }
}
</script>

<style scoped>
.register {
    align-items: center;
    height: 90vh;
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
