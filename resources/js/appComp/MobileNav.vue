<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    props:{
        company: Object
    },
    data:()=>({
        link:[
            {id: 1, name: 'Строительство', route: '/construct'},
            {id: 2, name: 'Услуги', route: '/slug'},
            {id: 3, name: 'О нас', route: '/about'},
            {id: 4, name: 'Контакты', route: '/contact'},
        ]
    }),
    computed:{
        ...mapStores( appStore )
    },
    watch:{
        'appStore.mobile':{
            handler(val){
                if (val) {
                    if (!document.body.classList.contains('overflow-hidden')){
                        document.body.classList.add('overflow-hidden')
                    }
                } else {
                    if (document.body.classList.contains('overflow-hidden')){
                        document.body.classList.remove('overflow-hidden')
                    }
                }
            }
        }
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
                                <h3 class="section-title">Мобильное меню</h3>
                                <button class="btn-close btn-close-white"
                                    @click="appStore.mobile = !appStore.mobile"
                                ></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <h5 class="section-title">Навигация</h5>
                        <ul>
                            <a :href="link.route" v-for="link in link" :key="link.id" class="text-decoration-none">
                                <li class="py-4 border-bottom border-danger text-center"> 
                                    <h5>{{ link.name }}</h5>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5 class="section-title">Контактная информация</h5>
                        <ul class="">
                            <a :href="'tel:' + company.tel" class="text-decoration-none">
                                <li class="d-flex align-items-center justify-content-center border-bottom border-danger py-4">
                                    <i class="fa fa-phone "></i>
                                    <h5 class="mb-0 mx-2"> {{ company.tel }} </h5>
                                </li>
                            </a>
                            <a :href="'mailto:' + company.email" class="text-decoration-none">
                                <li class="d-flex align-items-center justify-content-center border-bottom border-danger py-4">
                                    <i class="fa fa-envelope"></i>
                                    <h5 class="mb-0 mx-2">{{ company.email }}</h5>
                                </li>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <li class="d-flex align-items-center justify-content-center py-4">
                                    <i class="fa fa-map-marker"></i>
                                    <h5 class="mb-0 mx-2">{{ company.address }}</h5>
                                </li>
                            </a>
                        </ul>
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
    overflow: auto
</style>