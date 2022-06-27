<template>
    <app-layout>
        <template #header>
            <h5>Nota: #{{note.id}}</h5>
        </template>
        
        <div class="container">
            <div class="d-flex bd-highlight">
                <!-- División de texto | Division izquierda-->
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <h4>Detalle de nota</h4>
                    <p>{{note.excerpt}}</p>
                </div>
                <!-- División de tabla | Division derecha-->
                <div class="p-2 w-100 bd-highlight">
                    <!-- Tabla -->
                    <table class="table table-hover">
                        {{note.content}}
                    </table>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import {Link} from "@inertiajs/inertia-vue3"
export default{
    props:{
        note: Object,
    },
    components: { AppLayout, Link }
}

</script>