<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear($event.target.name)">
        <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('name') }">

            <label for="name">User:</label>

            <input type="text" class="form-control" placeholder="Your name here" name="name" value="" v-model="form.name" autofocus/>


            <span class="help-block" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>

        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()"><i v-if="form.submitting" class="fa fa-refresh fa-spin"></i> Next</button>
    </form>
</template>

<script>
    import Form from 'acacha-forms'
    export default {
        data: function () {
            return {
                form: new Form( { name: ''} ),
            }
        },
        methods: {
            submit() {
                this.form.post('/enrollment/test')
                        .then( response => {
                            console.log('TODO')
                            this.$emit('next')
                        })
                        .catch( error => {
                            console.log('ERROR')
                        })
            }
        },
        mounted() {
            console.log('Component Form User mounted.')
        }
    }
</script>