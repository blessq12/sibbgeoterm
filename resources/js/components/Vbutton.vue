<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    props:{
        class: String,
        type: String
    },
    computed:{
        ...mapStores(appStore)
    }
}
</script>

<template>
    <button type="button" :class="class" @click="appStore.modal=!appStore.modal">
        <slot></slot>
    </button>
</template>