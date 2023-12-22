<script>
export default{
    mounted(){
        this.$refs.container.style.height = this.$refs.item[this.current - 1].offsetHeight + 'px'
    },
    data:()=>({
        angarSizes: [
            {id:1, size: '5', image: '/assets/images/angars/h6.jpg', width: '10', height: '5'},
            {id:2, size: '5.5', image: '/assets/images/angars/h6.jpg', width: '11', height: '5.5'},
            {id:3, size: '6', image: '/assets/images/angars/h6.jpg', width: '12', height: '6'},
            {id:4, size: '6.5', image: '/assets/images/angars/h6-5.jpg', width: '13', height: '6.5'},
            {id:5, size: '7', image: '/assets/images/angars/h7.jpg', width: '14', height: '7'},
            {id:6, size: '7.5', image: '/assets/images/angars/h7-5.jpg', width: '15', height: '7.5'},
            {id:7, size: '8', image: '/assets/images/angars/h8.jpg', width: '16', height: '8'},
        ],
        current: 1
    })
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="section-title">Размеры ангаров</h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12">
            <ul class="sizes">
                <li v-for="item in angarSizes" :key="item.id">
                    <button
                        type="button" 
                        class="btn btn-outline-light btn-lg" 
                        :class="current == item.id ? 'active' : ''"
                        @click="current = item.id"
                    >
                       Высота - {{ item.size }} м
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row flex-column-reverse flex-md-row">
        <div class="col-12 col-lg-8">
            <div class="overflow-hidden">
                <transition-group
                    tag="div"
                    class="angar-images position-relative rounded"
                    duration="400"
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOut"
                >
                    <div class="image-item position-absolute mt-4 mt-lg-0" v-for="angar in angarSizes" :key="angar.id" 
                    v-show="current == angar.id">
                        <img :src="angar.image" alt="" class="img-fluid">
                    </div>
                </transition-group>
                <img src="/assets/images/angars/h6.jpg" alt="" class="img-fluid invisible mt-4">
            </div>
        </div>
        <div class="col-12 col-lg-4 overflow-hidden">
            <div ref="container">
                <transition-group
                tag="div"
                class="angar-additional position-relative"
                enter-active-class="animate__animated animate__fadeInLeft"
                leave-active-class="animate__animated animate__fadeOutLeft"
                >
                    <div 
                    v-for="angar in angarSizes" :key="angar.id" 
                    v-show="current == angar.id" class="position-absolute"
                    ref="item"
                    >
                        <h4 class="border-start border-5 border-danger px-2">Ширина основания: <span class="text-danger">{{ angar.width }} метров</span></h4>
                        <h4 class="border-start border-5 border-danger px-2">Высота арки: <span class="text-danger">{{ angar.height }} метров</span></h4>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>
ul.sizes
    display: flex
    flex-wrap: wrap
    li
        width: 50%
        padding: 0 6px
        @media(min-width: 992px)
            width: unset
            padding: 0
            margin-right: 12px
        &:last-child
            margin-right: 0
            
        button
            width: 100%
            margin-bottom: 12px

</style>