<template>
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Users</h5>
        </div>

        <div class="panel-body">
            <input v-model="searchUser"> </input>
            <ul class="media-list">

                <li class="media" v-for="user in filterBy(users, searchUser)">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img src="/images/placeholder.png" class="img-circle" alt="">
                        </a>
                    </div>

                    <div class="media-body">
                        <div class="media-heading text-semibold">{{ user.name }}</div>
                        <span class="text-muted">{{ user.email }}</span>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list text-nowrap">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" data-toggle="modal" data-target="#call"><i class="icon-phone2"></i> Make a call</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#chat"><i class="icon-comment"></i> Start chat</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#video"><i class="icon-video-camera"></i> Video call</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
                searchUser: ''
            };
        },
        methods: {
            fetchUsers() {
                this.$http.get('/api/users')
                        .then(response => {
                            this.users = response.data;
                        });
            }
        },
        created() {
            this.fetchUsers();
        }
    }

</script>
