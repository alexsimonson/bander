<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a v-bind:href="'/users/' + this.id">{{name}}</a>
                    </div>

                    <div class="card-body">
                        {{bio}}
                    </div>
                </div>
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
            'bio',
            'profile',
            'user'
        ]
    }
</script>
