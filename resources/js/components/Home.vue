<template>
    <div>
        Home
    </div>
</template>

<script>
export default {
    name: "Home",

    mounted() {
        this.getData()
    },

    methods: {
        getData() {
            axios.get('/api/home')
                .then( res => {
                    console.log(res);
                })
        }
    }
}
</script>

<style scoped>

</style>
