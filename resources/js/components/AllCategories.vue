<template>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-7">
            <h2 class="text-center">categories List</h2>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <!-- <th>Actions</th> -->
                </tr>
                </thead>
                <tbody>
                <tr v-for="category in categories" :key="category.id">
                    <td>{{ category.id }}</td>
                    <td>{{ category.name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <router-link :to="{name: 'edit', params: { id: category.id }}" class="btn btn-success">Edit</router-link>
                            <button class="btn btn-danger" @click="deleteCategory(category.id)">Delete</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: []
        }
    },
    created() {
        this.axios
            .get('http://localhost:8888/test_laravel/public/api/categories')
            .then(response => {
                this.categories = response.data;
            });
    },
    methods: {
        deleteCategory(id) {
            this.axios
                .delete(`http://localhost:8888/test_laravel/public/api/categories/${id}`)
                .then(response => {
                    let i = this.categories.map(data => data.id).indexOf(id);
                    this.categories.splice(i, 1)
                });
        }
    }
}
</script>
