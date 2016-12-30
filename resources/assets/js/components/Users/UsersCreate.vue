<template>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Create user</h5>
        </div>
        <div class="panel-body">
            <form @submit.prevent="storeUser" class="form-horizontal">
            <alert-error :form="form"></alert-error>

            <div class="form-group" :class="{ 'has-error': form.errors.has('name') }">
                <label class="col-md-3 control-label">Name</label>
                <div class="col-md-6">
                    <input v-model="form.name" type="text" name="name" class="form-control">
                    <has-error :form="form" field="name"></has-error>
                </div>
            </div>

            <div class="form-group" :class="{ 'has-error': form.errors.has('email') }">
                <label class="col-md-3 control-label">Email</label>
                <div class="col-md-6">
                    <input v-model="form.email" type="text" name="email" class="form-control">
                    <has-error :form="form" field="email"></has-error>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <button :disabled="form.busy" type="submit" class="btn btn-primary">
                        <i v-if="form.busy" class="fa fa-fw fa-spinner fa-spin"></i>
                        <i v-else class="icon-checkmark2"></i>
                         Create user
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: this.$form({
                    name: '',
                    email: ''
                })
            };
        },
        methods: {
            storeUser() {
                this.form.post('/api/users')
                        .then(({ data }) => { console.log(data) })
            }
        }
    }
</script>
