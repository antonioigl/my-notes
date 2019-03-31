<template>
    <div class="card" style="margin-top: 10px;">
        <div class="card-header">Publicado en: {{note.created_at}}</div>

        <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" v-model="note.description">
            <p v-else>{{note.description}}</p>
        </div>

        <div class="card-footer">
            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">Save</button>
            <button v-else class="btn btn-secondary" v-on:click="onClickEdit()">Edit</button>
            <button class="btn btn-danger" v-on:click="onClickDelete()">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        props:['note'],
        data(){
            return {
                editMode: false
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            onClickDelete(){
                this.$emit('delete');
            },
            onClickEdit(){
                this.editMode = true;
            },
            onClickUpdate(){
                this.editMode = false;
                this.$emit('update', note);
            },
        }
    }
</script>
