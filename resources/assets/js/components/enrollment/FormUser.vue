<template>
    <form method="post" @submit.prevent="submit" @keydown="form.errors.clear($event.target.user)">
        <div class="form-group has-feedback" :class="{ 'has-error': form.errors.has('user') }">

            <!-- WET -->
            <label for="user">User:</label>

            <select class="form-control select2" style="width: 100%;">

                <option v-for="user in users" :value="user.id">{{ user.name }}</option>

            </select>


            <span class="help-block" v-if="form.errors.has('user')" v-text="form.errors.get('name')"></span>

        </div>
        <button type="submit" class="btn btn-primary btn-block btn-flat" :disabled="form.errors.any()"><i v-if="form.submitting" class="fa fa-refresh fa-spin"></i> Next</button>
    </form>
</template>

<script>
    import FormMixin from './FormMixin'
    import Form from 'acacha-forms'
    export default {
        mixins: [FormMixin],
        data: function () {
            return {
                form: new Form( { user: ''} ),
                users: []
            }
        },
        methods: {
            submit() {
                this.form.post('/enrollment/user')
                    .then( response => {
                        console.log('Enrollment user form sumitted OK')
                        this.$bus.$emit('formSubmit')
                    })
                    .catch( error => {
                        console.log('Enrollment user form sumitted error: ' + error)
                    })
            },
            initialitzeSelect2() {
                var component = this
                $(".select2").select2().on('TODO', function(event){
                    component.form.set('user',userid);
                    component.form.errors.clear();
                })
            },
            fetchUsers() {
                axios.get('/users').then(response => {
                    this.users = response.data
                });
            }
        },
        mounted() {
            console.log('Component Form User mounted.');
            this.initialitzeSelect2();
            this.fetchUsers()
        },
        watch: {
            'form.user': function (user) {
                //TODO API select per sleccionar el user amb i user.id
            }
        },
    }
</script>
