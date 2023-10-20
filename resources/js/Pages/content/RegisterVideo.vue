<template>
    <main class="main register flex">
        <form @submit.prevent="submitForm" method="POST">
            <p>
            <label for="type">종류:</label>
            <input type="text" name="kind" id="type" v-model="formData.kind">
            </p>

            <p>
            <label for="pronunciation">제목:</label>
            <input type="text" name="title" id="title" v-model="formData.title">
            </p>

            <p>
            <label for="japanese">영상 주소:</label>
            <input type="text" name="url" id="url" v-model="formData.url">
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
    data() {
        return {
            formData: {
                kind: '',
                title: '',
                url: '',
            },
        };
    },
    methods: {
        async submitForm() {
            try {
                const response = await axios.post('/video/registerUpdate', this.formData, {
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                });

                if (response.status === 200) {
                    window.location.href = '/video/show';
                } else {
                    // 오류 처리
                    console.error('데이터 저장 중 오류가 발생했습니다.');
                }
            } catch (error) {
                // 오류 처리
                console.error('데이터 저장 중 오류가 발생했습니다.', error);
            }
        },
    },
};
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
