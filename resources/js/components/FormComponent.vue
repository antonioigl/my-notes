<template>
    <div class="card">
        <div class="card-header">Note: </div>

        <div class="card-body">
            <form action="" v-on:submit.prevent="newNote()">
                <div class="form-group">
                    <label for="note">Write your note: </label>
                    <input type="text" class="form-control" name="note" v-model="description">
                </div>
                <button type="submit" class="btn btn-primary">
                    Save note
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
                const params = {
                    description: this.description
                };
                this.description = '';

                axios.post('/notes', params)
                    .then((response) => {
                       const note = response.data;
                        this.$emit('new', note);
                    });
            }
        }
    }
</script>
