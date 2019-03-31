<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component> </form-component>
            <br>
            <note-component
                v-for="note in notes"
                :key="note.id"
                :note="note">
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
        }
    }
</script>
