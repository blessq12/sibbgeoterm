<script>
export default{
    data:()=>({
        formData:{
            material: null,
            client:{
                name: null,
                phone: null
            }
        },
        headers:[ 
            {id:1,text:'Какой материал перегородки?'},
            {id:2,text:'Желаемые размеры'},
            {id:3,text:'Дополнительные данные'},
            {id:4,text:'Локация проведения работ'},
            {id:5,text:'Территориальное расположение'},
            {id:6,text:'Получение результата'},
            {id:7,text:'Данные клиента'},
         ],
        steps: 6,
        step: 0,
    }),
    mounted(){
        
        this.$refs.container.style.height = document.querySelector('#st-0').offsetHeight + 'px'
    },
    methods:{},
    watch:{
        step(val){
            setTimeout(() => {
                this.$refs.container.style.height = document.querySelector('#st-' + val + '').offsetHeight + 'px'
            }, 100);
        }
    },
    computed:{
        progValue(){
            return (100 * this.step) / this.steps
        }
    }
}
</script>

<template>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">Предварительный рассчет стоимости за услугу</h2>
            </div>
        </div>
        <div class="row rounded">
            <div class="col-md-6 d-none d-md-block">
                <div class="border border-light rounded p-3 h-100 d-flex align-items-center">
                    <div class="d-block">
                        <h4>
                            Пройдите небольшой опрос, чтобы рассчитать предварительную стотимость услуги непосредственно под ваши нужны. Это бесплатно
                        </h4>
                        <p class="text-red">
                            Мы не передаем информацию третьим лицам
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class=" calc">
                    <div class="progress bg-transparent border border-light mb-4">
                        <div class="progress-bar bg-light" role="progressbar" :style="'width: '+ progValue +'%'"></div>
                    </div>
                    <transition
                        enter-active-class="animate__animated animate__fadeIn"
                        leave-active-class="animate__animated animate__fadeOut"
                        mode="out-in"
                    >
                        <h2 
                            class="text-light mb-4"
                            v-if="headers[ step ]"
                        >{{ headers[ step ].text }}</h2>
                    </transition>
                    <div ref="container" class="overflow-hidden">
                        <transition-group
                        enter-active-class="animate__animated animate__slideInRight"
                        leave-active-class="animate__animated animate__slideOutLeft"
                        tag="div"
                        class="position-relative w-100"
                        
                    >
                            <div v-show="step == 0" key="0" id="st-0" class="position-absolute w-100">                        
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="material" id="beton" v-model="formData.material" value="Бетон">
                                    <label class="form-check-label" for="beton">
                                        Бетон
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material" id="zhbeton" value="Железобетон" v-model="formData.material">
                                    <label class="form-check-label" for="zhbeton">
                                        Железобетон
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material" id="kirpich" value="Кирпич" v-model="formData.material">
                                    <label class="form-check-label" for="kirpich">
                                        Кирпич
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material" id="gipsolit" value="Гипсолит" v-model="formData.material">
                                    <label class="form-check-label" for="gipsolit">
                                        Гипсолит
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material" id="fbs" value="Блоки ФБС" v-model="formData.material">
                                    <label class="form-check-label" for="fbs">
                                        Блоки ФБС
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="material" id="another" value="Другое" v-model="formData.material">
                                    <label class="form-check-label" for="another">
                                        Другое
                                    </label>
                                </div>
                            </div>
                            <div v-show="step == 1" key="1" id="st-1" class="position-absolute w-100">
                                <div class='form-group mb-4'>
                                    <label for="diametr">Дииаметр отверстия в (см)</label>
                                    <input type="text" name="diametr" id="diametr" class="form-control w-50" v-model="formData.diametr">
                                </div>
                                <div class='form-group'>
                                    <label for="diametr">Глубина(длина) отверстия в (см)</label>
                                    <input type="text" name="diametr" id="diametr" class="form-control w-50" v-model="formData.glubina">
                                </div>
                            </div>
                            <div v-show="step == 2" key="2" id="st-2" class="position-absolute w-100">
                                <h5>Направление отверстия</h5>
                                <div class="btn-group mb-4">
                                    <button type="button" class="btn btn-outline-light"
                                        v-for="e in ['Вертикально', 'Горизонтально', 'Под углом']"
                                        @click="formData.holeAngle = e"
                                        :class="formData.holeAngle == e ? 'active' : ''"
                                    >
                                        {{ e }}
                                    </button>
                                </div>
                                <h5>Количество отверстий</h5>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-light" v-for="e in 5"
                                        @click="formData.holeCount = e"
                                        :class="formData.holeCount == e ? 'active' : ''"
                                    >
                                        {{ e }}
                                    </button>
                                </div>
                            </div>
                            <div v-show="step == 3" key="3" id="st-3" class="position-absolute w-100">
                                <div class="mb-4">
                                    <h5>Работы будут высотные?</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="height1" id="height1" value="Работы высотные" v-model="formData.height">
                                        <label class="form-check-label" for="height1">
                                            Да
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="height1" id="height2" value="Работы не высотные" v-model="formData.height" checked>
                                        <label class="form-check-label" for="height2">
                                            Нет
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <h5>Где будут проводиться работы?</h5>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="height2" id="inside" value="Работы в помещении" v-model="formData.insideOutside" checked>
                                        <label class="form-check-label" for="inside">
                                            Работы в помещении
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="height2" id="outside" value="Уличные работы" v-model="formData.insideOutside">
                                        <label class="form-check-label" for="outside">
                                            Уличные работы
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div v-show="step == 4" key="4" id="st-4" class="position-absolute w-100">
                                <div class="form-check">
                                    <input type="radio" name="locale" id="locale" class="form-check-input" checked value="В пределах Томска" v-model="formData.locale">
                                    <label for="locale" class="form-check-label">В пределах Томска</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="locale" id="locale1" class="form-check-input" value="Томск +50км" v-model="formData.locale">
                                    <label for="locale1" class="form-check-label">Томск +50км</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="locale" id="locale2" class="form-check-input" value="Томск +100км" v-model="formData.locale">
                                    <label for="locale2" class="form-check-label">Томск +100км</label>
                                </div>
                            </div>
                            <div v-show="step == 5" key="5" id="st-5" class="position-absolute w-100">
                                <ul>
                                    <li class="mb-3">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fa fa-whatsapp"></i>
                                            Сообщение в WhatsApp
                                        </button>
                                    </li>
                                    <li class="mb-3">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fa fa-telegram"></i>
                                            Сообщение в Telegram
                                        </button>
                                    </li>
                                    <li class="mb-3">
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fa fa-envelope"></i>
                                            SMS сообщение
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn btn-outline-light">
                                            <i class="fa fa-phone"></i>
                                            Звонок на телефон
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div v-show="step == 6" key="6" id="st-6" class="position-absolute w-100">
                                <p class="w-100">
                                    Для получения предварительного рассчета - нам необходимы контакты для обратной связи, пожалуйста введите имя и номер телефона, чтобы наш менеджер мог связаться с вами в ближайшее время
                                </p>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="name" ref="client"  placeholder="Введите ваше имя" aria-label="Введите ваше имя" aria-describedby="name" v-model="formData.client.name">
                                    <span class="input-group-text" id="name">
                                        <i class="fa fa-user-o"></i>
                                    </span>
                                </div>
                                <div class="input-group w-100 mb-5 mb-md-3">
                                    <input type="text" class="form-control" placeholder="Номер телефона" aria-label="Номер телефона" aria-describedby="tel" v-model="formData.client.tel" v-maska data-maska="+7 (###) ###-##-##">
                                    <span class="input-group-text" id="tel">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                            </div>
                        </transition-group>
                    </div>
                    <div class="d-flex mt-4">
                        <div v-if="step !== 6">
                            <button type="button" class="btn btn-outline-light" style="margin-right: 12px;" v-if="step > 0" @click="step--">
                                <i class="fa fa-arrow-left"></i>
                                Назад
                            </button>
                            <button type="button" class="btn btn-outline-light" @click="step++" :disabled="formData.material == null">
                                Вперед
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                        <div v-else class="d-block w-100">
                            <button type="button" class="btn btn-light w-100 w-md-50" @click="$refs.client.focus()">Отправить данные на рассчет</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped>
.content-container
    width: 50%
.calc
    min-height: 450px
    transition: all .3s
</style>