<template>
    <div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link mr-2" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://localhost:8888/test_laravel/public/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <router-link class="mr-2" :to="{ name: 'categories' }">All Categories</router-link>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <router-link class="mr-2" :to="{ name: 'create' }">Create Categories</router-link>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <router-view> </router-view>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
