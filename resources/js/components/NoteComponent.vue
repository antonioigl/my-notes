<template>
    <div class="card">
        <div class="card-header">Publicado en: {{note.created_at}}</div>

        <div class="card-body">
            <p>{{note.description}}</p>
        </div>

        <div class="card-footer">
            <button class="btn btn-secondary">Edit</button>
            <button class="btn btn-danger">Remove</button>
        </div>
    </div>
</template>

<script>
    export default {
        props:['note'],
        data(){
            return {
                note: {
                    'id':'',
                    'description':'',
                    'created_at':'',
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
