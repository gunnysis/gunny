<template>
    <div class="header">
        <div class="header-content flex">
            <div class="div__title flex">
                <a href="/" class="header-content__logo">Gunny</a>
                <div class="menu-content" id="menu-content">
                    <ul>
                        <li><a href="/memo/show">일본어 메모</a></li>
                        <li><a href="/video/show">일본어 공부 영상</a></li>
                    </ul>
                </div>
            </div>


            <div class="menu__img flex" id="menu-icon">
                <img src="https://cdn.iconscout.com/icon/free/png-256/free-hamburger-menu-462145.png?f=webp" alt="" width="30" height="30">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header",
    mounted() {
        // 컴포넌트가 렌더링된 후에 실행될 JavaScript 코드를 여기에 추가합니다.
        const menuIcon = document.getElementById('menu-icon');
        const menuContent = document.getElementById('menu-content');

        menuIcon.addEventListener('click', () => {
            if (menuContent.style.display === 'flex') {
                menuContent.style.display = 'none';
            } else {
                menuContent.style.display = 'flex';
            }
        });
    },
}
</script>

<style scoped>
    .div__title {
        justify-content: center;
        flex-direction: column;
    }

    .header {
        height: 10vh;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
        background-color: white;
        color: black;
        justify-content: center;
    }


    .menu__img {
        cursor: pointer;
        position: relative;
        left: 1.5rem;
        align-items: center;

    }


    /* 메뉴 스타일 */
    .menu-content {
        display: none;
        color: white;
    }

    .menu-content ul {
        display: flex;
        margin: 0;
        padding: 0;
    }

    .menu-content li {
        margin-right: 0.5rem;
        background-color: antiquewhite;
        border-radius: 1px;
    }

    .menu-content a {
        color: black;
    }



    .header-content {
        height: 4rem;
        margin: 1rem auto;
        justify-content: center;
    }


    .header-content__logo {
        color: orange;
        font-size: 2rem;
        font-weight: 900;
        align-self: center;
        margin: 0 auto;
    }

    @media screen and (min-width: 962px) {

        .main {
            height: 75vh;
        }

    }
</style>
