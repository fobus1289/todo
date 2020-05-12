import Vue from 'vue'
import Vuex,{mapGetters,mapActions} from 'vuex'
import {data} from './mixin'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        data,
    }
})

const minx = {
    install(Vue,option) {
        Vue.mixin({
            computed:{
                ...mapGetters({
                    response:'data/response',
                })
            },
            methods:{
                ...mapActions({
                    get:'data/get',
                    post:'data/post',
                    put:'data/put',
                    deleteAt:'data/delete'
                }),
            }
        })
    }
}

Vue.use(minx)

export {store}
