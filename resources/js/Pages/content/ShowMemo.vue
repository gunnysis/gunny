<template>
    <main class="main main__show__memo flex">
        <div class="show__top flex">
            <input type="text" v-model="keyword" class="show__input" placeholder="종류">
            <a href="/memo/registerForm">메모 추가</a>
        </div>
        <ul class="ul__show">
            <li v-for="memo in memos" :key="memo.id" class="li__show">
                <strong>No:</strong> {{ memo.id }}<br>
                <strong>종류:</strong> {{ memo.kind }}<br>
                <strong>발음:</strong> {{ memo.jap_pron }}<br>
                <strong>일본어:</strong> {{ memo.jap_lang }}<br>
                <strong>의미:</strong> {{ memo.jap_mean }}<br>
            </li>
        </ul>
    </main>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        memos: {
            type: Object,
            required: true,
        }
    },
    data() {
        return {
            keyword: null,
            memos: this.memos
        };
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/memo/search', { params: { keyword: this.keyword } })
                .then(res => this.memos = res.data)
                .catch(error => {});
        }
    }
}
</script>

<style>
.show__top {
    gap: 1rem;
}

.show__input {
    height: 1.5rem;
    width: 8rem;
}

.main__show__memo {
    align-items: center;
    padding-top: 1rem;
}

 .ul__show {
     padding: 0;
 }

 .li__show {
     padding: 0.5rem 0;
 }
</style>
