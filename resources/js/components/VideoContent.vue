<script>
export default{
    props:{
        image: String,
        title: String,
        text: String,
        direction: String,
        link: String
    }
}
</script>

<template>
<div class="container">
    <div class="row position-relative wrapper overflow-hidden" :class="direction == 'ltr' ? 'justify-content-start' : 'justify-content-end'">
        <div class="image bg-image" :style="{background: 'url('+image+')', left: direction == 'rtl' ? 'unset' : '', right: direction == 'rtl' ? '200px' : ''}"></div>
        <div class="col-12 col-md-10 col-lg-6">
            <div class="bg-red-dark d-flex p-5 p-md-4 align-items-center justify-content-between" :class="direction == 'rtl' ? 'flex-row-reverse' : ''">
                <div class="d-block">
                    <h2>{{ title }}</h2>
                    <p>
                        {{ text }}
                    </p>
                </div>
                <div class="px-3">
                    <a :href="link" class="btn rounded-circle play" style="height: 60px;width: 60px;">
                        <i class="fa fa-play fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>
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