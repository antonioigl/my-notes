<template>
    <div class="card">
        <div class="card-header">Notes: </div>

        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="note">Write your note: </label>
                    <input type="text" class="form-control" name="note">
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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
