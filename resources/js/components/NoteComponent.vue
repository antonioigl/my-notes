<template>
    <div class="card" style="margin-top: 10px;">
        <div class="card-header">Publicado en: {{note.created_at}}</div>

        <div class="card-body">
            <p>{{note.description}}</p>
        </div>

        <div class="card-footer">
            <button class="btn btn-secondary">Edit</button>
            <button class="btn btn-danger" v-on:click="onClickDelete()">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        props:['note'],
        data(){
            return {
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            onClickDelete(){
                this.$emit('delete');
            },
        }
    }
</script>
