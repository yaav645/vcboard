<template>
    <div>
        <router-link v-if="token" :to="{name: 'home.index'}">Home</router-link>
        <router-link v-if="!token" :to="{name: 'user.login'}">LOGIN</router-link>
        <router-link v-if="token" :to="{name: 'user.personal'}">Personal</router-link>
        <router-link v-if="!token" :to="{name: 'user.registration'}">REGISTRATION</router-link>
        <a @click.prevent="logout" v-if="token" href="#">Logout</a>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "Index",

    data() {
        return {
            token: null
        }
    },

    mounted() {
        this.getToken()
    },

    updated() {
        this.getToken()
    },

    methods: {
        getToken() {
            this.token = localStorage.getItem('x_xsrf_token')
        },

        logout() {
            axios.post('/logout')
                .then(res => {
                    localStorage.removeItem('x_xsrf_token')
                    this.$router.push({name: 'user.login'})
                })
        }
    }
}
</script>

<style scoped>

</style>
