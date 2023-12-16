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
                <div class="col-12 col-md-6 col-lg-6 visible">
                    <div class="bg-light p-3 rounded text-dark">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h4 class="mb-0">Бесплатная консультация</h4>
                            <button class="btn-close" @click="appStore.modal = false"></button>
                        </div>
                        <p>Оставьте свои контактные данные чтобы мы могли свзяаться с вами</p>
                        <form @submit.prevent="">
                            <div class="form-group">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tel">Телефон</label>
                                <input type="text" class="form-control" v-maska data-maska="+7 (###) ###-##-##">
                            </div>
                            <button type="button" class="mt-4 btn btn-primary">Отправить </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>