<script>
export default{
    props:{
        image: String,
        title: String,
        text: String,
        direction: String,
        link: String,
        style: Object
    },
    data:()=>({
        overlay: false
    })
}
</script>

<template>
<div class="overlay" v-if="overlay" @click="overlay=!overlay"></div>
<div class="video-wrap d-flex align-items-center justidy-content-center invisible h-100 w-100" v-if="overlay">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="visible text-light">
                    <iframe width="600" height="345"
                        :src="link">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" :style="style">
    <div class="row position-relative wrapper overflow-hidden" :class="direction == 'ltr' ? 'justify-content-start' : 'justify-content-end'">
        <div class="image bg-image" :style="{background: 'url('+image+')', left: direction == 'rtl' ? 'unset' : '', right: direction == 'rtl' ? '200px' : ''}"></div>
        <div class="col-12 col-md-10 col-lg-6">
            <div class="row bg-red-dark d-flex p-3 p-md-4 align-items-center justify-content-between" :class="direction == 'rtl' ? 'flex-row-reverse' : ''">
                <div class="col-12 col-md-7 d-block">
                    <h2>{{ title }}</h2>
                    <p>
                        {{ text }}
                    </p>
                </div>
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-center">
                    <div class="d-flex d-md-block align-items-center text-center">
                        <button 
                            type="button"
                            class="btn rounded-circle play m-auto mx-2 mx-md-0 mb-md-3" 
                            style="height: 60px;width: 60px"
                            @click="overlay = !overlay"
                        >
                            <i class="fa fa-play fa-2x"></i>
                        </button>
                        <p class="mb-0">Смотреть видео</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>
.frame
    width: 100%
    height: auto
.video-wrap
    padding: 24px
    position: fixed
    width: 100%
    height: 10px
    z-index: 12
    top: 0
    left: 0
.overlay
    position: fixed
    width: 100%
    height: 100%
    top: 0
    left: 0
    z-index: 10
.wrapper
    @media (min-width: 768px)
        padding: 50px 0
    @media (min-width: 992px)
        padding: 70px 0
.image
    display: none
    @media(min-width: 768px)
        display: block
    position: absolute
    background: green
    top: 0
    left: 200px
    width: 100%
    height: 100%
    z-index: -1
.play
    display: flex
    align-items: center
    justify-content: end
    color: $color-red-dark
    background: $color-white
    &:hover
      background: $color-dark
      color: $color-white  
</style>