<template>
    <app-layout>
        <template #header>
            <h5>Notes</h5>
        </template>
        
        <div class="container">
            <div class="row">
                <!-- División de texto | Division izquierda-->
                <div class="col-sm-6 mb-4">   
                                         
                        <h4 class="mb-4">Listado de notas</h4>
                            
                        <p class="pe-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, corporis. Nobis corporis sequi blanditiis deleniti incidunt atque, voluptatibus, accusantium adipisci, porro harum officia placeat consectetur culpa aliquam illo consequatur error eius. Pariatur sequi fuga amet quo laborum enim obcaecati similique assumenda, at sit minima repudiandae.
                        </p>
                </div>
                <!-- División de tabla | Division derecha-->
                <div class="col-sm-6 mb-4">
                    <div class="row justify-content-between">
                        <div class="col-sm-9">
                            <div class="input-group mb-3 w-100">
                                <input v-model="term" type="text" class="form-control" placeholder="Buscar . . ." aria-label="Buscar" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <Link :href="route('notes.create')" type="button" class="btn btn-outline-dark w-100">
                                <i class="bi bi-plus-circle"></i>
                                Crear
                            </Link>
                        </div>
                    </div>
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
                                        <Link :href="route('notes.show' , note)" type="button" class="btn btn-outline-dark">
                                            <i class="bi bi-three-dots"></i>
                                        </Link>
                                    </div>  
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <pagination :links="notes.links" />
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
import paginator from '@/Components/paginator'

export default{
    props:{
        notes: Object,
    },
    components: { AppLayout, Link, paginator },
    data(){
        return{
            term: ''
        }
    },
    watch:{
        term: function (value){
            Inertia.replace(route('notes.index' , {term: value}))
        }
    },
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