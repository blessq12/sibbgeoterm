<script>
export default{
    data:()=>({
        currentId: 0,
        angarSizes: [
            {id:1, size: '6', image: '/assets/images/angars/h6.jpg', width: '12', height: '6', halfHeight: '3.3'},
            {id:2, size: '6.5', image: '/assets/images/angars/h6-5.jpg', width: '13', height: '6.5', halfHeight: '3.4'},
            {id:3, size: '7', image: '/assets/images/angars/h7.jpg', width: '14', height: '7', halfHeight: '3.6'},
            {id:4, size: '7.5', image: '/assets/images/angars/h7-5.jpg', width: '15', height: '7.5', halfHeight: '3.7'},
            {id:5, size: '8', image: '/assets/images/angars/h8.jpg', width: '16', height: '8', halfHeight: '3.9'}
        ]
    })
}
</script>

<template>
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="section-title">
                <h2 class="border-5 border-start border-danger px-4">
                    Размеры ангаров
                </h2>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-8">
            <ul class="list-unstyled p-0 m-0 d-flex align-items-center justify-content-between">
                <li v-for="item in angarSizes" :key="item.id">
                    <button 
                        type="button" 
                        class="btn btn-outline-light btn-lg" 
                        style="margin-right: 12px;"
                        :class="currentId == angarSizes.indexOf(item) ? 'active' : ''"
                        @click="currentId = angarSizes.findIndex(e => e.id == item.id)"
                    >
                       Высота - {{ item.size }} м
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="overflow-hidden">
                <transition-group
                    tag="div"
                    class="angar-images position-relative rounded"
                    duration="400"
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOut"
                >
                    <div class="image-item position-absolute " style="top: 0;" v-for="angar in angarSizes" :key="angar.id" v-show="currentId == angarSizes.indexOf(angar)">
                        <img :src="angar.image" alt="" class="img-fluid">
                    </div>
                </transition-group>
                <img src="/assets/images/angars/h6.jpg" alt="" class="img-fluid invisible">
            </div>
        </div>
        <div class="col-12 col-lg-4 overflow-hidden">
            <transition-group
                tag="div"
                class="angar-additional position-relative"
                enter-active-class="animate__animated animate__fadeInLeft"
                leave-active-class="animate__animated animate__fadeOutLeft"
            >
                <div v-for="angar in angarSizes" :key="angar.id" v-show="currentId == angarSizes.indexOf(angar)" class="position-absolute">
                    <h4 class="border-start border-5 border-danger px-2">Ширина основания: <span class="text-danger">{{ angar.width }} метров</span></h4>
                    <h4 class="border-start border-5 border-danger px-2">Высота арки: <span class="text-danger">{{ angar.height }} метров</span></h4>
                    <h4 class="border-start border-5 border-danger px-2">Высота "2 этаж": <span class="text-danger">{{ angar.halfHeight }} метров</span></h4>
                </div>
            </transition-group>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>

</style>