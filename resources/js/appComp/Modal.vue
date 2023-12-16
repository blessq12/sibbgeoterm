<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    computed:{
        ...mapStores( appStore )
    }
}
</script>

<template>
    <div class="position-fixed top-0 left-0 w-100 h-100 d-flex align-items-center invisible" style="z-index: 10;" v-if="appStore.modal">
        <div class="overlay visible"></div>
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 visible">
                    {{ appStore }}
                    asdasd
                    asdasdasd
                </div>
            </div>
        </div>
    </div>
</template>