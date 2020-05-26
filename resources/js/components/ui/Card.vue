<template>
    <div  v-bind:class="widthClass()">
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">{{ title }}</h3>
            <p>{{ text }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        
        props: ['width', 'title', 'text'],
        data() {

        },
        methods: {
            widthClass() {
                console.log(this.width)
                if (this.width) {
                    return "uk-width-" + this.width;
                }
            }
        }
    }
</script>