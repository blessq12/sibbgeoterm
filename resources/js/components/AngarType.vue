<script>
export default{
    mounted(){
        this.$refs.container.style.height = this.$refs.item[0].offsetHeight + 'px'
    },
    data:()=>({
        angarTypes: [
            {id: 1, for: 'Хранение', name: 'Склады и складские комплексы', excerpt: 'Быстровозводимые конструкции сочетают в себе высокие качественные характеристики и эффективное использование внутреннего пространства (отсутствие колонн и балок каркаса). Это позволяет использовать их под склады для хранения любых товаров и материалов.',  appointment: ['Подходит для хранения любых товаров и материалов.', 'Возможность смены склада с одной товарной группы на другую в короткие сроки.', 'Отсутствие "мостков холода", высокая герметичность.', 'Низкие эксплуатационные расходы.'], possibilities: ['Установка подъемных механизмов, расчитанных на вес до 10 тонн.','Оборудование системами вентиляции и кондиционирования.','Возможность смены склада с одной товарной группы на другую в короткие сроки.']},
            {id: 2, for: 'Производство', name: 'Производственные помещения', excerpt: 'Производственные помещения, построенные по технологии бескаркасного строительства надежно и в течение многих лет обеспечивают необходимые условия для работы персонала и оборудования, позволяют следовать всем современным нормам строительства производственных зданий.',  appointment: ['Применимы для организации самых различных производств.', 'Невысокая стоимость строений, минимальные эксплуатационные расходы.', 'Любые размеры и комплектация.', 'Надежность, герметичность и долговечность.'], possibilities: ['Возможность оснащения монорельсами, подкрановыми балками до 10 тонн и другими подъемными устройствами.']},
            {id: 3, for: 'Торговля', name: 'Торговые площади', excerpt: 'Быстровозводимые бескаркасные арочные рынки давно зарекомендовали себя в сфере торговли, как практичные здания. Такие здания имеют большую прочность, полностью водонипроницаемы, не требуют внутренней и внешней отделки, очень экономичны в строительстве и эксплуатации.',  appointment: ['Срок службы торгового помещения более 50 лет.', 'Минимальные затраты на содержание.', 'Низкие эксплуатационные расходы.', 'Низкие эксплуатационные расходы.'], possibilities: ['Возможность комплектования всеми системами жизнеобеспечения: - электро, -водо, -канализационными.']},
            {id: 4, for: 'Ремонт техники', name: 'Гаражи, боксы', excerpt: 'Технология широко используется в строительстве гаражей, боксов для различного вида техники. Как для хранения автопарка для промышленных предприятий, так и в качестве цеха для ремонта техники.',  appointment: ['Высота конструкции позволяет размещать даже очень крупногабаритную технику.', 'Низкие эксплуатационные расходы.', 'Высокие показатели огне-, снего- и ветроустойчивости.', 'Отсутствие протечек, коррозии металла.'], possibilities: ['Возможны теплый и холодный вариант исполнения.']},
            {id: 5, for: 'Помещения', name: 'Административные здания, офисы', excerpt: 'Административные или офисные здания без проблем впишутся в любую местность за счет своей многообразной палитры цветовых решений и способов отделки фасадов. Такие здания могут совмещать в себе и складскую часть и торговую. Это особенно актуально при сооружении торговых и торгово-развлекательных центров.',  appointment: ['Широкий выбор цветовых и архитектурных решений.', 'Минимальные затраты на содержание.', 'Высокая экологичность зданий.', 'Здания соответствуют всем требованиям пожарной безопасности и СЭС.'], possibilities: ['Возможность сооружать 2 этажа.', 'Возможность комплектования всеми системами жизнеобеспечения: - электро, -водо, -канализационными.']},
            {id: 6, for: 'Сельскохозяйственные помещения', name: 'Гаражи, боксы', excerpt: 'Технология бескаркасного строительства все больше востребована для создания овощехранилищ, зарнохранилищ, свинарников, коровников, птицеферм и других зданий. Здания соответствуют всем эпидемиологическим нормам предъявляемым к животноводческим зданиям.',  appointment: ['Высота конструкции позволяет размещать даже очень крупногабаритную технику.', 'Низкие эксплуатационные расходы.', 'Высокие показатели огне-, снего- и ветроустойчивости.', 'Отсутствие протечек, коррозии металла.'], possibilities: ['Низкая стоимость строительства.', 'Отсутствие эксплуатационных расходов.', 'Высокая экологичность сооружений.']},
        ],
        current: 1
    }),
    watch:{
        current(val){
            setTimeout(() => {
                this.$refs.container.style.height = this.$refs.item[this.current - 1].offsetHeight + 'px'
            }, 300);
        }
    }
}
</script>

<template>
<div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Задачи и разновидностии ангаров</h2>
                    </div>

                </div>
            </div>
            <div class="row placeholder-glow">
                <div class="col-12 col-lg-4">
                    <ul class="list-unstyled p-0 mb-4 mb-md-0">
                        <li v-for="appoint in angarTypes" :key="appoint.id" class="pb-3">
                            <button 
                                class="btn btn-outline-light w-100 btn-lg" 
                                @click="current = appoint.id"
                                :class="current == appoint.id ? 'active' : ''"
                            >
                                {{ appoint.for }}
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-8 overflow-hidden">
                    <div ref="container">
                        <transition-group
                            tag="div"
                            class="position-relative"
                            enter-active-class="animate__animated animate__fadeInRight"
                            leave-active-class="animate__animated animate__fadeOutLeft"
                        >
                            <div 
                                class="angar position-absolute"
                                ref="item"
                                v-for="item in angarTypes" 
                                :key="item.id"
                                v-show="item.id == current"
                            >
                                <h2> <span class="text-danger">:</span> {{ item.name }}</h2>
                                <p>{{ item.excerpt }}</p>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="border-start border-5 border-danger px-4">Преимущества</h5>
                                        <ul>
                                            <li v-for="li in item.appointment">
                                                {{ li }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="border-start border-5 border-danger px-4">Возможности</h5>
                                        <ul>
                                            <li v-for="li in item.possibilities">
                                                {{ li }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </transition-group>
                    </div>
                </div>
            </div>
        </div>
</template>

<style lang="sass" scoped>
</style>
