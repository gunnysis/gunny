<template>
    <main class="main main__show__video flex">
        <div class="div__show__video flex">
            <div class="show__top flex">
                <input type="text" v-model="keyword" class="show__input" placeholder="종류">
                <a href="/video/registerForm">영상 추가</a>
            </div>
            <div v-for="video in videos" :key="video.id" class="media flex">
                <span class="media__kind">{{ video.kind }}</span>
                {{ video.id }}. {{ video.title }}<br>
                <iframe :src="video.url + '&output=embed'" frameborder="0" allowfullscreen width="300" height="150"></iframe>
            </div>
        </div>
    </main>
</template>


<script>
import axios from "axios";

export default {
    name: "videos",
    props: {
        videos: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            keyword: null,
            showFooter: false, // footer를 초기에 보이지 않게 설정
            videos: this.videos,
        };
    },
    watch: {
        keyword(after, before) {
            this.getResults();
        }
    },
    methods: {
        getResults() {
            axios.get('/video/search', { params: { keyword: this.keyword } })
                .then(res => this.videos = res.data)
                .catch(error => {});
        },
    }
}
</script>

<style scoped>
.show__top {
    gap: 1rem;
}

.div__show__video {
    align-items: center;
    justify-content: center;
    flex-direction: column;
}


.media {
    margin: 0.5rem 0;
    flex-direction: column;
}

.media__kind {
    font-size: 0.7rem;
}

@media (min-width: 768px) {



    .media {
        align-items: flex-start;
        flex: 1;
    }


}


</style>
