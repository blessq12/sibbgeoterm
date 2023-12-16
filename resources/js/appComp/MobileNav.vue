<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    props:{
        company: Object
    },
    computed:{
        ...mapStores( appStore )
    }
}
</script>

<template>

    <transition
        enter-active-class="animate__animated animate__fadeInRight"
        leave-active-class="animate__animated animate__fadeOutRight"
        mode="out-in"
    >
        <div class="mobile-menu" v-if="appStore.mobile">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="header">
                            <div class="d-flex justify-content-between">
                                <h3>Мобильное меню</h3>
                                <button class="btn-close btn-close-white"
                                    @click="appStore.mobile = !appStore.mobile"
                                ></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h5>Навигация</h5>
                        <ul>
                            <li>Главная страница</li>
                            <li>Строительство</li>
                            <li>Услуги</li>
                            <li>О нас</li>
                            <li>Контакты</li>
                            <li>Вакансии</li>
                            <li>Отзывы</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5>Контактная информация</h5>
                        {{ company }}
                    </div>
                </div>
            </div>
        </div>
    </transition>

</template>

<style lang="sass">
.mobile-menu
    background: $color-dark
    position: fixed
    top: 0
    right: 0
    height: 100%
    width: 100%
    z-index: 20
    padding: 24px 0
</style>