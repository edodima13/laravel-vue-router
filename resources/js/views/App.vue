<template>
    <div>
        <h1>Post</h1>
        <ul>
            <li>
                <router-link to="/posts"> Posts </router-link>
            </li>
            <li>
                <router-link to="/post"> Post </router-link>
            </li>
        </ul>
    <router-view> </router-view>
        
    </div>
</template>

<script>

    export default {
    }
</script>

<style lang="scss" scoped>

</style>
