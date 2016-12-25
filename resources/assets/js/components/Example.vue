<template>
    <!-- Simple panel -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Dashboard</h5>
        </div>

        <div class="panel-body">
            <h6 class="text-semibold">Welcome to your Dashboard</h6>
            <p class="content-group">Your are logged in as {{ user.name }}</p>
        </div>
    </div>
    <!-- /simple panel -->
</template>

<script>
    export default {
        data() {
            return {
                user: ''
            };
        },
        methods: {
            fetchUser() {
                this.$http.get('/api/user')
                        .then(response => {
                            this.user = response.data;
                        });
            }
        },
        created() {
            this.fetchUser();
        }
    }

</script>
