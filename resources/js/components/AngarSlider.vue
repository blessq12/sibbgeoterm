<script>
export default{
    data:()=>({
        slides: [1,2,3,4,5,6,7,8,9]
    })
}
</script>

<template>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="section-title">
                    <div class="section-title">
                        <h2 class="border-start border-5 border-danger px-4">Готовые проекты</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 d-flex align-items-center">
                <div class="d-block">
                    <p class="mb-0">Посмотрите наши</p>
                    <h3 class="text-danger mb-2">Завершенные проекты</h3>
                    <a href="javascript:void(0)" class="text-light">Смотреть портфолио
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                
            </div>
            <div class="col-9 position-relative">
                <ul class="carousel" ref="carousel">
                    <li v-for="slide in slides" :key="slide">
                        <div class="carousel-item bg-image" style="background: url('//via.placeholder.com/1024x1024');">
                            <span></span>
                        </div>
                    </li>
                </ul>
                <div 
                    class="overlay-right"
                    @click="()=>{
                        $refs.carousel.scrollLeft += 224
                    }"
                >
                    <i class="fa fa-arrow-right fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.overlay-right
    cursor: pointer
    position: absolute
    display: flex
    align-items: center
    justify-content: center
    width: 100px
    height: 100%
    right: 0
    top: 0 !important
    background: linear-gradient(90deg, rgba(2,0,36,0) 0%, $color-dark 100%)

.carousel
    list-style: none
    display: flex
    align-items: center
    overflow: hidden
    overflow-x: scroll
    padding: 24px 0
    margin: 0
    scroll-behavior: smooth
    &::-webkit-scrollbar
        display: none    
    li
        margin-right: 24px
        
        .carousel-item
            position: relative
            display: block
            min-height: 350px
            height: 350px
            width: 200px
            background: $color-blue
            border-radius: $default-radius
            span
                display: block
                position: absolute
                top: 12px
                left: 12px
                width: 40px
                height: 20px
                border-radius: $default-radius
                background: $color-dark
                font-family: roadradio
</style>