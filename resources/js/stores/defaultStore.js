import { defineStore,acceptHMRUpdate } from "pinia";

export const useDefault = defineStore('default', {
    state:()=>({}),
    getters:{},
    actions:{}
})

if (import.meta.hot){
    import.meta.hot.accept(acceptHMRUpdate(useDefault, import.meta.hot))
}