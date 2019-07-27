<template>
<div class='container'>
    <div class='row'>
        <div class='col-6'>
            <button class='btn btn-primary' style='width: 100%;' v-on:click='matchWith'>Match with {{name}}</button>
        </div>
        <div class='col-6'>
            <button class='btn btn-danger' style='width: 100%;' v-on:click='notInterested'>Not Interested</button>
        </div>
        <div class='col-6'>
            <h2>Response below</h2>
            <p>{{msg}}</p>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data:function(){
            return{
                msg: 'test',
            };
        },
        methods:{
            matchWith(e){
                e.preventDefault();
                console.log('Send request to user_id: ' + this.id);
                axios.post('./api/getmessage',{
                }).then(response=>{
                    this.msg = response.data.message;
                    console.log(response);
                }).catch(function (error) {
                    console.log(error);            
                });
            },
            notInterested(e){
                e.preventDefault();
                console.log('Not interested in user_id: ' + this.id);
            }
        },
        props:[
            'id',
            'name',
            'help',
        ]
    }
</script>
