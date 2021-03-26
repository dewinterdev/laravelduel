<template>
    <div>
        <h3 class="text-center">Edit category</h3>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">
                <form @submit.prevent="updateCategory">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="category.name">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            category: {}
        }
    },
    created() {
        this.axios
            .get(`http://localhost:8888/test_laravel/public/api/categories/${this.$route.params.id}`)
            .then((res) => {
                this.category = res.data;
            });
    },
    methods: {
        updateCategory() {
            this.axios
                .patch(`http://localhost:8888/test_laravel/public/api/categories/${this.$route.params.id}`, this.category)
                .then((res) => {
                    this.$router.push({ name: 'categories' });
                });
        }
    }
}
</script>
