<template>
    <div>
        <h1>Welcome</h1>

        <div class="uk-grid-match" uk-grid>
            <component-card width="1-2" title="Card 1" text="Lorem ipsum"></component-card>
            <component-card width="1-2" title="Card 1" text="Eius magnam sequi"></component-card>
            <component-card width="1-1" title="Card 1" text="Onsectetur adipisicing elit"></component-card>
        </div>

        <div class="uk-margin">
            <component-button label="Click me!"></component-button>
            <component-button label="Click me!"></component-button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
