<template>
    <div>
        <h1>Welcome</h1>

        <div v-if="isLoading" class="uk-flex uk-flex-center uk-flex-middle uk-height-large">
            <span uk-spinner="ratio: 4.5"></span>
        </div>

        <div :class="{ 'uk-hidden': isLoading, 'uk-animation-fade': !isLoading }" >
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
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isLoading: true,
                isActive: true
            }
        },

        mounted() {
            setTimeout( () => {
                this.isLoading = false;
                UIkit.update(document.body, 'update');
            }, 1000);
        },

        method() {

        }


    }
</script>
