<script>
export default{
    props:{
        items: Object
    },data:()=>({
        current: 0
    })
}
</script>

<template>
    <div class="row g-0">
        <div class="col-12 col-lg-6 p-0">
            <ul>
                <li 
                    v-for="item in items" 
                    :key="item.id"
                    style="transition: all .3s;"
                    class="px-4 py-4 cursor-pointer bg-light border-bottom border-dark text-dark"
                    :class="items.indexOf(item) == current ? 'active' : '' "
                    @click="current = items.indexOf(item)"
                >
                    <h5>{{ item.title }}</h5>
                    <p class="mb-0">{{ item.text }}</p>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-6 p-0 position-relative" style="min-height:350px">
            <transition-group
                enter-active-class="animate__animated animate__fadeIn"
                leave-active-class="animate__animated animate__fadeOut"
            >
                <div 
                    class="position-absolute w-100 h-100 bg-image" 
                    v-for="item in items" 
                    :key="item"
                    v-show="items.indexOf(item) == current"
                    :style="'background: url('+ item.image +')'"
                ></div>
            </transition-group>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.active
    background: $color-red-dark !important
    color: $color-white !important
    border-color: $color-red-dark !important
</style>