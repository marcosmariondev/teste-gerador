<template>
    <div id="wrapper">
        <template >
            <main-navigation-component></main-navigation-component>
        </template>
        <div id="page-wrapper" class="gray-bg">
            <template >
                <minor-navigation-component/>
            </template>
            <router-view/>
            <template >
                <footer-component></footer-component>
            </template>
        </div>
    </div>
</template>

<script>
    import FooterComponent from "./layout/FooterComponent";
    import MainNavigationComponent from "./layout/MainNavigationComponent";
    import MinorNavigationComponent from "./layout/MinorNavigationComponent";

    export default {
        name: "App",
        components: {MinorNavigationComponent, MainNavigationComponent, FooterComponent},
        data() {
            return {
                msg: 'Aguarde...',
                isAuth: true,
                optionsPNotify: {
                    defaultStyle: 'success',
                    defaultDelay: 3000,
                    zIndex: 5000,
                    animateConfig: {
                        animate: true,
                        in_class: 'flipInX',
                        out_class: 'flipOutX',
                    },
                }
            }
        },
    }
</script>

<style scoped>

</style>
