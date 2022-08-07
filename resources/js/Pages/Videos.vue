<template>
    <h1 class="text-center">Videos</h1>

    <p>Click the name for tutorial</p>

    <div class="text-center">
        <a href="https://www.youtube.com/watch?v=h6j4C64bdQI" class="asdf">Pacman</a><br>
        <a href="https://www.youtube.com/watch?v=sKz2qmD4wMI" class="asdf">Tetris</a>
    </div>

</template>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout
}
</script>

<style>
h1, p{
    color: white;
}

.asdf {
    font-size: 150px;
    
}
</style>