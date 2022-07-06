<template>
    <AppLayout>
        <template #header>
            <h5>Nota: #{{note.id}}</h5>
        </template>

        <div class="container">
            <div class="row">
                <!-- División de texto | Division izquierda-->
                <div class="col-sm-6 mb-4">
                    <div class="row justify-content-between">
                        <div class="col-sm-7 mb-4">
                            <h4>{{ note.excerpt }}</h4>
                        </div>
                        <div class="col-sm-3 mb-4">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <!-- Boton para Borrar Nota -->
                                <button @click.prevent="destroy(note.id)" type="button" class="btn btn-sm btn-outline-dark">
                                    <i class="bi bi-trash3"></i>
                                </button>
                                <!-- Botón para Editar Nota -->
                                <Link :href="route('notes.edit' , note)" type="button" class="btn btn-sm btn-outline-dark">
                                    <i class="bi bi-pencil"></i>
                                </Link>
                            </div>  
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, neque.
                    </p>
                </div>
                <!-- División de tabla | Division derecha-->
                <div class="col-sm-6 ms-auto mb-4">
                    <!-- Tabla -->
                    <table class="card p-3">
                        {{note.content}}
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
    import AppLayout from "@/Layouts/AppLayout.vue"
    import {Link , useForm} from "@inertiajs/inertia-vue3"
    export default {
        props: {
            note: Object,
        },
        components: {
            AppLayout,
            Link
        },
    }

</script>