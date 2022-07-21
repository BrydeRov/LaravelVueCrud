<template>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img :src="src" :alt="alt">
            </div>
            <div class="flip-card-back">
                <img :src="src" :alt="alt">
                <h3>{{subtitle ?? 'Aqui va el titulo'}}</h3>
                <h1>{{title ?? 'Aqui va el subtitulo'}}</h1>
                <button class="btn btn-outline-secondary my-2">{{button ?? 'Boton'}}</button>
            </div>
        </div>
    </div>

</template>

<script>
export default{
    props:{
        title: String,
        subtitle: String,
        button: String,
        src: String,
        alt: String,
    }
}
</script>

<style></style><style>
.flip-card{
    background-color: transparent;
    width: 300px;
    height: 200px;
    perspective: 1000px;
}

.flip-card-inner{
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner{
    transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back{
    position: absolute;
    width: 100%;
    backface-visibility: hidden;
    border-radius: 16px;
}


.flip-card-front img{
    width: 225px;
    margin-top: 1rem;
    border-radius: 16px;
}

.flip-card-back{
    background-image: 
    linear-gradient(
        315deg, #141E30 , #45668B
    );
    color: #ffffff;
    transform: rotateY(180deg);
}

.flip-card-back img{
    width: 125px;
    margin-top: 1rem;
    border-radius: 16px;
}

.flip-card-back h3{
    margin-bottom: 0.3rem;
}

.flip-card-back h1{
    margin: 0;
}
</style>