<template>
    <app-layout>
        <template #header>
            <h5>Notes</h5>
        </template>
        
        <div class="container">
            <div class="d-flex bd-highlight">
                <!-- División de texto | Division izquierda-->
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <h4>Listado de notas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat molestiae natus, maxime quas necessitatibus nihil.</p>
                </div>
                <!-- División de tabla | Division derecha-->
                <div class="p-2 w-100 bd-highlight">
                    <!-- Tabla -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Excerpt</th>
                            <th scope="col">Content</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="note in notes">
                                <th scope="row">{{note.id}}</th>
                                <td>{{note.excerpt}}</td>
                                <td>
                                    <Link :href="route('notes.show' , note.id)" type="button" class="btn btn-dark">
                                        Ver
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
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
        notes: Array,
    },
    components: { AppLayout, Link }
}

</script>