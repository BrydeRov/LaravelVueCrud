<template>
    <app-layout>

        <template #header>
            <h2>
                Usuario: #{{user.id}}
            </h2>
        </template>

        <div class="card w-75 text-center" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{user.name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{user.email}}</h6>
                <p class="card-text">{{user.created_at}}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue"
import InputError from "@/Jetstream/InputError"



export default{
    props: {user: Object},
    components: { 
        AppLayout, 
        InputError 
    },

}

</script>