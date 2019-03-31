<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addNote"> </form-component>
            <br>
            <note-component
                v-for="(note, index) in notes"
                :key="note.id"
                :note="note"
                @delete="deleteNote(index)"
                @update="updateNote(index, ...arguments)">
            </note-component>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                notes: [{
                    'id':1,
                    'description': 'abc',
                    'created_at':'17/07/2018'
                }]
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            addNote(note){
                this.notes.push(note);
            },
            deleteNote(index){
                this.notes.splice(index, 1);
            },
            updateNote(index, note){
                this.notes[index] = note;
            },
        }
    }
</script>
