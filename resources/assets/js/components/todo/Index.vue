<template>
    <div class="container mt-5">
        <div class="form-group row">

            <div class="col-10">
                <input v-model="request.name" type="text" class="form-control" placeholder="Crate todo">
            </div>

            <div class="col-2">
                <button type="button"
                        class="form-control btn btn-group-sm btn-success"
                        @click="post(request)"
                >Add</button>
            </div>

        </div>
        <table class="table bg-light table-striped text-center">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Create</th>
                <th>Update</th>
                <th>u</th>
                <th>x</th>
            </tr>

            </thead>
            <tbody>
            <tr v-for="(res,index) in response" :key="res.id">
                <td>{{res.id}}</td>
                <td>{{res.name}}</td>
                <td>{{res.createAt}}</td>
                <td>{{res.updateAt}}</td>
                <td><button type="button"
                            class="btn btn-sm btn-info"
                            data-toggle="modal" :data-target="'#update'+index"
                            >u</button></td>
                <td><button
                            class="btn btn-sm btn-danger"
                            @click="deleteAt(res)">x</button></td>
                <!--modal-->
                <div class="modal fade" :id="'update'+index">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-body">

                                <div class="form-group">
                                    <label>Todo</label>
                                </div>

                                <div class="form-group">
                                    <input
                                        v-model.lazy="response[index].name"
                                        type="text"
                                        class="form-control"
                                    />
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" @click="put(res)" class="btn btn-primary">update</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end of modal-->
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data(){
           return{
             request:{},
           }
        },
        async mounted() {
            this.get()
        },
    }
</script>
