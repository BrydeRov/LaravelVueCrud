<template>
    <app-layout>
        <template #header>
            <h5>Notes</h5>
        </template>
        
        <div class="container">
            <div class="d-flex bd-highlight">
                <!-- División de texto | Division izquierda-->
                <div class="p-2 flex-shrink-1 bd-highlight">                    
                    <div class="d-flex flex-row bd-highlight mb-3 w-100">
                        <div class="py-2 px-0 flex-fill bd-highlight">
                            <h4>Listado de notas</h4>
                        </div>
                        <div class="py-2 pe-4 bd-highlight">
                            <Link :href="route('notes.create')" type="button" class="btn btn-outline-dark">
                                <i class="bi bi-plus-circle"></i>
                                Crear
                            </Link>
                        </div>
                    </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, neque.
                        </p>
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
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <!-- Boton para Borrar Nota -->
                                        <button @click="destroy(note)" type="button" class="btn btn-sm btn-outline-dark">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                        <!-- Botón para Ver Nota -->
                                        <Link :href="route('notes.show' , note.id)" type="button" class="btn btn-outline-dark">
                                            <i class="bi bi-three-dots"></i>
                                        </Link>
                                    </div>  
                                    
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
import {Inertia} from "@inertiajs/inertia"
import {Link} from "@inertiajs/inertia-vue3"
import Swal from 'sweetalert2'

export default{
    props:{
        notes: Object,
    },
    components: { AppLayout, Link },

    setup() {
        const destroy = (note) => {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((destroy) => {
            if (destroy.isConfirmed) {
                Inertia.delete(route('notes.destroy' , note))
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
            }
            })                               
        }
        return {destroy}
    }
}

</script>