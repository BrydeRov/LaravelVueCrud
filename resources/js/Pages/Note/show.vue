<template>
    <AppLayout>
        <template #header>
            <h5>Nota: #{{note.id}}</h5>
        </template>

        <div class="container">
            <div class="d-flex bd-highlight">
                <!-- División de texto | Division izquierda-->
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="py-2 px-0 flex-fill bd-highlight">
                            <h4>{{ note.excerpt }}</h4>
                        </div>
                        <div class="py-2 pe-4 bd-highlight">
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
                <div class="p-2 bd-highlight w-75">
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