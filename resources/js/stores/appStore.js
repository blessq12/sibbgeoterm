import { defineStore, acceptHMRUpdate } from "pinia";

export const appStore = defineStore( 'app' , {
    state:()=>({
        modal: false,
        mobile: false
    }),
    getters:{},
    actions:{}
})

if (import.meta.hot){
    import.meta.hot.accept(acceptHMRUpdate(appStore, import.meta.hot))
}