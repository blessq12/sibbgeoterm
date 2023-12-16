<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    props:{
        class: String,
        target: String

    },
    computed:{
        ...mapStores(appStore)
    }
}
</script>

<template>
    <button type="button" :class="class" @click="appStore[target]=!appStore[target]">
        <slot></slot>
    </button>
</template>