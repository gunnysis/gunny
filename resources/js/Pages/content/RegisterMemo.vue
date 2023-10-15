<template>
    <main class="main register flex">
        <form @submit.prevent="submitForm" method="POST">
            <!-- "종류" 필드 -->
            <p>
            <label for="type">종류:</label>
            <input type="text" name="kind" id="type" ref="type">
            </p>

            <!-- "발음" 필드 -->
            <p>
            <label for="pronunciation">발음:</label>
            <input type="text" name="jap_pron" id="pronunciation" ref="pronunciation">
            </p>

            <p>
            <!-- "일본어" 필드 -->
            <label for="japanese">문장:</label>
            <input type="text" name="jap_lang" id="japanese" ref="japanese">
            </p>

            <!-- "의미" 필드 -->
            <p>
            <label for="meaning">의미:</label>
            <input type="text" name="jap_mean" id="meaning" ref="meaning">
            </p>

            <div class="div__btn">
                <button type="submit">제출</button>
            </div>
        </form>
    </main>
</template>

<script>

export default {
    methods: {
        async submitForm() {
            const formData = {
                kind: this.$refs.type.value,
                jap_pron: this.$refs.pronunciation.value,
                jap_lang: this.$refs.japanese.value,
                jap_mean: this.$refs.meaning.value,
            };

            // 서버로 데이터를 전송하고 응답을 기다립니다.
            const response = await fetch("/memo/registerUpdate", {
                method: "POST",
                body: JSON.stringify(formData),
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            });

            if (response.ok) {
                // 성공적으로 처리된 경우 다음 페이지로 리다이렉트
                window.location.href = "/memo/show";
            } else {
                // 오류 처리
                console.error("데이터 저장 중 오류가 발생했습니다.");
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
