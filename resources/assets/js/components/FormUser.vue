<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear($event.target.name)">
        <div class="form-group has-feedback" :class="{'has-error': form.errors.has('user')}">
            <label for="user">User:</label>
            <input type="text" class="form-control" placeholder="" name="user" value="" v-model="form.user" id="user" autofocus/>
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
                form : new Form({user: ''})
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods : {
            submit () {
                this.form.post('/enrollment/user')
                    .then( response => {

                    })
                    .catch(error => {

                    })
            }
        }
    }
</script>
