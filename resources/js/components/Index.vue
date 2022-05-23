<template>
    <router-link :to="{name:'person.index'}">People</router-link><br>
    <router-link :to="{name:'person.create'}">Create</router-link><br>
    <router-view></router-view>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
