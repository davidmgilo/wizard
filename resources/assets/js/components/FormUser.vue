<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear($event.target.user)">
        <div class="form-group has-feedback" :class="{'has-error': form.errors.has('user')}">
            <label for="user">User:</label>

            <select class="form-control select2" style="width: 100%;" id="user">
                <option v-for="user in users" :value="user.id">{{ user.name }}</option>
            </select>

            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span class="help-block" v-if="form.errors.has('user')" v-text="form.errors.get('user')"></span>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()"><i class="fa fa-refresh fa-spin" v-if="form.submitting"></i>Next</button>
    </form>
</template>

<script>
    import Form from 'acacha-forms'
    export default {
        data: function(){
            return {
                form : new Form({user: ''}),
                users : []
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.initialitzeSelect2()
            this.fetchUsers()
        },
        methods : {
            submit () {
                this.form.post('/enrollment/user')
                    .then( response => {
                        console.log('TODO')
                    })
                    .catch(error => {
                        console.log('ERROR')
                    })
            },
            initialitzeSelect2 () {
                var component = this
                $(".select2").select2().on('TODO', function (event) {
                    component.form.set('user', userId)
                    component.form.error.clear()
                });
            },
            fetchUsers () {
                axios.get('/users').then(response => {
                    this.users = response.data;
                });
            }
        },
        watch: {
            'form.user': function(user){
                //TODO API SELECT2 PER seleccionar user la user.id
            }
        }
    }
</script>
