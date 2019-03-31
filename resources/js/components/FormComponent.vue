<template>
    <div class="card">
        <div class="card-header">Notes: </div>

        <div class="card-body">
            <form action="" v-on:submit.prevent="newNote()">
                <div class="form-group">
                    <label for="note">Write your note: </label>
                    <input type="text" class="form-control" name="note" v-model="description">
                </div>
                <button type="submit" class="btn btn-primary">
                    Send note
                </button>
            </form>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
           return {
               description: ''
           }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newNote(){
                let note = {
                    id: 2,
                    description: this.description,
                    created_at: '11/22/3333'
                };
                this.$emit('new', note);
                this.description = '';
            }
        }
    }
</script>
