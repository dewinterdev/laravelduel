<template>
    <div>
        <h3 class="text-center">Create category</h3>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-7">
                <form @submit.prevent="addCategory">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="category.name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
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
    methods: {
        addCategory() {
            this.axios
                .post('http://localhost:8888/test_laravel/public/api/categories', this.category)
                .then(response => (
                    this.$router.push({ name: 'categories' })
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
}
</script>
