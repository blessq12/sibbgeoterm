<script>
export default{
    props:{
        images: Object,
        title: String,
        subtitle: String
    },
    data:()=>({
        overlay: false,
        current: null
    })
}
</script>

<template>
    <div class="invisible position-fixed top-0 w-100 h-100 p-2 p-md-5" v-if="overlay" style="z-index: 20;">
        <div class="container h-100">
            <div class="row row-cols justify-content-center h-100 align-items-center">
                <div class="col text-center position-relative w-100 h-100">
                    <img :src="current" alt="" class="position-relative visible" style="z-index: 25;max-width: 100%; height: 100%;">
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" v-if="overlay" @click="overlay=!overlay"></div>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">{{ title ?? 'Заголовка нет' }}</h2>
                <p class="mb-0">{{ subtitle ?? 'Подзаголовка нет' }}</p>
            </div>
        </div>
        <div class="row row-cols">
            <div class="col-md-4 mb-4 mb-md-0">
                <slot></slot>
            </div>
            <div class="col-md-8">
                <div class="position-relative">
                    <div class="position-absolute d-flex invisible align-items-center justify-content-between w-100 h-100" v-if="images.length > 3">
                        <i class="cursor-pointer visible fa fa-caret-left fa-4x text-red h-100 d-flex align-items-center p-3" style="z-index: 1;" @click="$refs.slider.scrollLeft -= 424"></i>
                        <i class="cursor-pointer visible fa fa-caret-right fa-4x text-red h-100 d-flex align-items-center p-3" style="z-index: 1;" @click="$refs.slider.scrollLeft += 424"></i>
                    </div>
                    <ul class="image-list" ref="slider" v-if="images.length">
                        <li 
                            v-for="image in images" 
                            :key="image.id" 
                            :style="'background: url('+ image.path +')'" 
                            class="cursor-pointer"
                            @click="overlay=!overlay; current = image.path"
                        ></li>
                    </ul>
                    <ul class="image-list placeholder-glow" ref="slider" v-else>
                        <li v-for="e in 10" class="placeholder"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.overlay
    position: fixed
    top: 0
    left: 0
    width: 100%
    height: 100%
    z-index: 10
.image-list
    display: flex
    align-items: center
    overflow: hidden
    overflow-x: scroll
    scroll-behavior: smooth
    &::-webkit-scrollbar
        display: none
    li
        min-width: 280px
        height: 250px
        @media (min-width: 768px)
            min-width: 400px
            height: 400px
        margin-right: 24px
        border-radius: $default-radius
        padding: 12px
        background-position: center !important
        background-repeat: no-repeat !important
        background-size: cover !important
</style>