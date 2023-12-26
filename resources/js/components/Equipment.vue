<script>
import { mapStores } from 'pinia';
import { appStore } from '../stores/appStore';
export default{
    computed:{
        ...mapStores( appStore )
    },
    mounted(){
        this.$refs.container.style.height = this.$refs.item[this.current - 1].offsetHeight + 'px'
    },
    data:()=>({
        equip: [
            {id: 1, name: 'Алмазное бурение', uri: 'almaz', equip:[
                {id: 1, name: 'Проектор отверстий', content: 'Позволяет проецировать отверстие с противоположной стороны стены. Если бурение не возможно, например изнутри, то с помощью этого устройства переносится точка бурения на улицу и в итоге бурения с улицы, получаем отверстие внутри в нужном месте. Часто бывает что отверстие важно именно в конкретном месте, а расположить оборудование там не возможно, приходится бурить с другой стороны', image: '/assets/images/almaz/uploads/image_1.png'},
                {id: 2, name: 'Сканер', content: 'Специальный сканер для обнаружения проводки, труб, профилей гипсокартона, пустот. Проверка перед началом бурения.' , image: '/assets/images/almaz/uploads/image_2.png'},
                {id: 3, name: 'Cистема отвода воды', content: 'Наша система подачи и отвода воды, в промышленных масштабах, значительно ускоряет работы и даже делает возможным бурение там, где нет подключения к водопроводу напрямую. Достаточно только несколько вёдер воды. А в случае работы в квартире, офисе, больнице и т.д. позволяет произвести работы без разбрызгивания воды и затопления, в помещениях с ремонтом без его порчи.' , image: '/assets/images/almaz/uploads/image_3.png'}
            ]},
            {id: 2, name: 'Штробление', uri: 'shtrob', equip: [
                {id: 1, name: 'Изготовление штроб', content: 'Изготовление штроб под электрику, сантехники и д.р. Шириной от 20мм до нужной, глубиной от 20мм до 60мм' , image: '/assets/images/almaz/uploads/image_4.png'},
                {id: 2, name: 'Отверстия', content: 'Отверстия для подразетников' , image: '/assets/images/almaz/uploads/image_5.png'},
                {id: 3, name: 'Резка проёмов', content: 'Увеличение проёмов в бетонных и кирпичных сооружениях.' , image: '/assets/images/almaz/uploads/image_6.png'},
            ]},
            {id: 3, name: 'Демонтажные работы', uri: 'demontazh', equip: [
                {id: 1, name: 'Демонтаж стяжки', content: 'Демонтаж стяжки, бетонных полов, асфальта.' , image: '/assets/images/almaz/uploads/image_7.png'},
                {id: 2, name: 'Демонтаж стен', content: 'Демонтаж стен и перегородок' , image: '/assets/images/almaz/uploads/image_8.png'},
                {id: 3, name: 'Демонтаж металоконструкций', content: 'Демонтаж металоконструкций' , image: '/assets/images/almaz/uploads/image_9.png'},
            ]}
        ],
        current: 1
    }),
    watch:{
        current(val){
            setTimeout(()=>{
                this.$refs.container.style.height = this.$refs.item[this.current - 1].offsetHeight + 'px'
            },300)
        }
    },
    methods:{}
}
</script>

<template>
    <div class="row">
        <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <ul class="equip-list">
                <li v-for="item in equip" :key="item.key" class="py-2">
                    <button type="button" class="btn btn-outline-light w-100" 
                        @click="current = item.id"
                        :class="item.id == current ? 'active' : ''"    
                    >
                        {{ item.name }}
                    </button>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-8">
            <div ref="container" style="transition: all .1s;">
                <transition-group
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOut"
                    tag="div"
                    class="position-relative py-4 py-md-0"
                >
                    <div v-for="item in equip" class="position-absolute overflow-hidden" ref="item" :key="'key-'+item.name" v-show="current == item.id">
                        <div class="position-relative">
                            <h3 class="section-title">{{ item.name }}</h3>
                            <ul class="p-0 m-0 list-unstyled">
                                <li v-for="item in item.equip" :key="item" class="mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="bg-image rounded" :style="'height: 140px;min-width: 140px;margin-right: 24px;background: url(' + item.image + ')'"></div>
                                        <div class="d-block">
                                            <h5 class="text-danger">
                                                {{ item.name }}
                                            </h5>
                                            <p class="mb-0">
                                                {{ item.content }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </transition-group>
            </div>
        </div>
    </div>
</template>

<style lang="sass">

</style>