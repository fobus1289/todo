const data = {

    namespaced: true,

    state: {
        response:[],
    },

    getters: {
        response(state){
            return state.response
        }
    },

    actions: {

        async get({state}){
            try {
                const res = await axios.get('/todo')
                state.response = res.data || []
            }catch (e) {
                const error = e.response.data || []
                console.log(error)
            }
        },

        async post({state},data){
            try {
                const res = await axios.post('/todo',data)
                data.name = ''
                state.response.push(res.data)
            }catch (e) {
                const error = e.response.data || []
                console.log(error)
            }
        },

        async put({state},data){
            try {
                const res = await axios.put('/todo/',data)
                const i = state.response.indexOf(data)
                state.response.splice(i, 1, res.data)
            }catch (e) {
                const error = e.response.data || []
                console.log(error)
            }
        },

        async delete({state},data){
            try {
                const res = await axios.delete('/todo/'+data.id)
                const i = state.response.indexOf(data)
                state.response.splice(i, 1)
            }catch (e) {
                const error = e.response.data || []
                console.log(error)
            }
        }

    },

    mutations: {

    },

}

export {data}
