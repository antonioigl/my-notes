@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notes: </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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

            <br>

            <note-component> </note-component>

        </div>
    </div>
</div>
@endsection
