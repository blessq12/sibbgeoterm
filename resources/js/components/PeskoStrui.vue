<script>
export default{
    mounted(){
        this.swidth = window.innerWidth
        this.$refs.container.style.height = this.$refs.item[0].offsetHeight + 'px'
    },
    props:{
        title: String,
        subtitle: String,
        items: Object
    },
    data:()=>({
        current: 0,
        swidth: null
    }),
    watch:{
        current(val){
            setTimeout(() => {
                this.$refs.container.style.height = this.$refs.item[val].offsetHeight + 'px'
            }, 100);
        }
    }
}
</script>

<template>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">
                    {{ title }}
                </h2>
                <p>{{ subtitle !== null ? subtitle : null }}</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col col-lg-4">
                <h5 class="mb-4">Виды загрязнений:</h5>
                <ul 
                    class="btn-group-lg mb-4 mb-md-0 w-100 o"
                    :class="swidth > 540 ? 'btn-group-vertical' : 'btn-group'"
                    style="white-space: nowrap; overflow-x: scroll; " role="group">
                    <li v-for="item in items" :key="item.id" class="btn btn-outline-light"
                        :class="items.indexOf(item) == current ? 'active' : null"
                        @click="current = items.indexOf(item)"
                    >
                        {{ item.title }}
                    </li>
                </ul>
            </div>
            <div class="col col-lg-8">
                <div ref="container" class="position-relative" style="transition: all .3s;">
                    <transition-group
                        enter-active-class="animate__animated animate__fadeIn"
                        leave-active-class="animate__animated animate__fadeOut"
                    >
                        <div 
                            class="position-absolute w-100"
                            v-show="items.indexOf(e) == current" 
                            v-for="e in items" :key="e.id"
                            ref="item"
                            >
                            <div class="bg-image rounded mb-4" :style="'background:url('+ e.image +'); min-height: 200px'"></div>
                            <h4><span class="text-red">: </span> {{ e.title }} </h4>
                            <p>{{ e.text }}</p>
                        </div>
                    </transition-group>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.o
    &::-webkit-scrollbar
        display: none
</style>