<template>

    <h1 class="text-center">My Games</h1>
    <hr>
    
    <div class="row d-flex justify-content-center align-content-center line">
        <div class="asd card" v-for="recipe in recipes" :key="recipe.id">
            <div class="column card-header bg-warning text-center">
                <h4>{{ recipe.name }}</h4>
            </div>
            <div class="card-body">
                <h6>Developers</h6>
                <ul>
                    <li v-for="ingredient in recipe.ingredients" :key="ingredient.id">
                        {{ ingredient.name }}
                    </li><br>
                </ul>
                <h6>Instructions</h6>
                <ul>
                    
                    <li class="instruction" v-bind="recipe in recipes" :key="recipe.id">
                        {{ recipe.instruction }}
                    </li>
                </ul>
            </div>
        </div>
    </div>



</template>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout,
    props: {
        recipes: Array
    }
}
</script>

<style scoped>
.card {
    width: 375px;
}
.instruction {
    list-style: none;
}
.asdf {
    width: 200px;
}


h1 {
    color: white;
}
.asd {
    margin: 100px auto;
    background-color: rgba(255, 255, 255,0.6);
}
.line {
    margin: auto;
    width: 90%;
    /* border: 3px solid green; */
    padding: 10px;
}
hr {
        text-align: left;
        border-top: 50px solid rgb(64, 0, 255);


}
</style>