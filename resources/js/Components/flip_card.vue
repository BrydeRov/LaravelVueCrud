<template>

    <Link class="card" :href="href">
        <div class="card-header" hidden>{{title}}</div>
        <img :src="src" :alt="alt">
        <p hidden>{{title}}</p>
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default{
    components: {Link},
    props:{
        title: String,
        subtitle: String,
        button: String,
        src: String,
        alt: String,
    }
}
</script>

<style>
.card{
    width: 85%;
    height: 85%;
}
.card img{
    border-radius: 16px;
    min-width: 245px;
    min-height: 370px;
    object-fit: cover;
}

.card img:hover{
    transform: scale(1.04);
    border-radius: 16px;
    border: solid rgb(209, 191, 191);
}
</style>