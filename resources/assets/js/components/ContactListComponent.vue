<template>
    <div>
        <b-form class="my-3 mx-2">
            <b-form-input class="text-center"
                type="text"
                placeholder="Buscar contacto...">
            </b-form-input>
        </b-form>
        <b-list-group>
            <contact-component variant="dark"></contact-component>
            <contact-component variant=""></contact-component>
            <b-list-group-item variant="secondary">
                <b-row class="p-2" align-h="center">
                    <b-col cols="12" md="3" class="text-center">
                        <b-img rounded="circle" blank width="60" height="60" blank-color="#777" alt="img" class="m-1" />
                    </b-col>
                    <b-col cols="6" align-self="center" class="d-none d-md-block">
                        <p class="mb-1">Alfredo Ramírez</p>
                        <p class="text-muted small mb-1">Tú: Hasta luego</p>
                    </b-col>
                    <b-col cols="3" class="d-none d-md-block">
                        <p class="text-muted small">1:37 pm</p>
                    </b-col>
                </b-row>
            </b-list-group-item>
        </b-list-group>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            };
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

