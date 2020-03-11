<template>
    <v-app>
        <Header />
        <v-content>
            <v-container class="fill-height" fluid>
                <v-row align="center" justify="center">
                    <v-col class="text-center">
                        Hola mundos
                    </v-col>
                </v-row>
            </v-container>
        </v-content>
        <FooterCore />
    </v-app>
</template>

<script>
    import Header from '../components/Header';
  //import Footer from '../components/Footer';
    export default {
        components: {
            Header,
            FooterCore: () => import("../components/Footer")
            }
    }
</script>
