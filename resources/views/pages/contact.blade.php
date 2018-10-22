@extends('layouts.default')

@section('content')
    <h1>Contact</h1>
    <p class="lead">Please use this form to contact site owner.</p>

    <form action="/contact" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input name='email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea name='body' class="form-control" id="body" rows="3"></textarea>
        </div>

        <div class="form-group">
            <button type='submit' class="btn btn-primary mb-2"> Submit</button>
        </div>

    </form>
@endsection
