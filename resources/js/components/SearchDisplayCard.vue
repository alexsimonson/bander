<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2><a v-bind:href="this.url">{{name}}</a></h2>
            </div>

            <div class="card-body">
                <img v-bind:src="this.image" width='100%'>
                <br><br>
                <h5>{{age}}</h5>
                {{bio}}

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.'),
            this.setAll
        },
        computed:{
            setAll: function(){
                console.log('magical');
            }
        },
        props:[
            'id',
            'name',
            'image',
            'age',
            'bio',
            'url',                      
        ]
    }
</script>
