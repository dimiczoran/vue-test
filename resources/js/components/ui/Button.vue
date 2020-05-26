<template>
    <button class="uk-button" v-on:click="alert">{{ label }}</button>
</template>

<script>
    export default {
        props: ['label'],
        methods: {
            alert() {
                alert('Click!!!')
            }
        }
    }
</script>