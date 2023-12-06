<script>
export default{
    data:()=>({
        slides: [
            {id: 1, image: '/assets/portfolio/1.jpg'},
            {id: 2, image: '/assets/portfolio/2.jpg'},
            {id: 3, image: '/assets/portfolio/1.jpg'},
            {id: 4, image: '/assets/portfolio/2.jpg'},
            {id: 5, image: '/assets/portfolio/1.jpg'},
            {id: 6, image: '/assets/portfolio/2.jpg'},
        ]
    })
}
</script>

<template>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">Готовые проекты</h2>
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
                    <li v-for="slide in slides" :key="slide" >
                        <div class="carousel-item bg-image" :style="'background: url('+ slide.image +')'">
                            <span class="badge bg-dark">Badge</span>
                        </div>
                    </li>
                </ul>
                <div 
                    class="nav-arrow right"
                    @click="()=>{
                        $refs.carousel.scrollLeft += 474
                    }"
                >
                    <i class="fa fa-arrow-right fa-2x"></i>
                </div>
                <div 
                    class="nav-arrow left"
                    @click="()=>{
                        $refs.carousel.scrollLeft -= 474
                    }"
                >
                    <i class="fa fa-arrow-left fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.nav-arrow
    cursor: pointer
    position: absolute
    display: flex
    align-items: center
    justify-content: center
    width: 100px
    height: 100%
    top: 0 !important
    &.right
        background: linear-gradient(90deg, rgba(2,0,36,0) 0%, $color-dark 100%)
        right: 0
    &.left
        background: linear-gradient(270deg, rgba(2,0,36,0) 0%, $color-dark 100%)
        left: 0

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
            padding: 12px
            display: block
            min-height: 350px
            width: 450px
            height: 200px
            background: $color-blue
            border-radius: $default-radius
</style>