<template>
    <div>
        {{ user.name }}
    </div>
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
