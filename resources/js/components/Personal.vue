<template>
    <div>
        Personal_Info
    </div>
</template>

<script>
export default {
    name: "Personal",

    mounted() {
        this.getData()
    },

    methods: {
        getData() {
            axios.get('/api/user/personal')
                .then( res => {
                    console.log(res);
                })
        }
    }
}
</script>

<style scoped>

</style>
