<script>
export default{
    props:{
        images: Object,
        title: String,
        subtitle: String
    }
}
</script>

<template>
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
                        <li v-for="image in images" :key="image.id" :style="'background: url('+ image.path +')'"></li>
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
.image-list
    display: flex
    align-items: center
    overflow: hidden
    overflow-x: scroll
    scroll-behavior: smooth
    &::-webkit-scrollbar
        display: none
    li
        min-width: 400px
        height: 400px
        margin-right: 24px
        border-radius: $default-radius
        padding: 12px
        background-position: center !important
        background-repeat: no-repeat !important
        background-size: cover !important
</style>