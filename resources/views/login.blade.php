@if (session()->has('flash'))
    <div class="alert alert-danger" role="alert">
        {{ session('flash') }}
    </div>
    @php
        session()->forget('flash');
        session()->forget('success');
    @endphp
@endif
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @php
        session()->forget('success');
        session()->forget('flash');
    @endphp
@endif
<div class="container d-flex justify-content-center align-items-center">
    <div class="card mb-3 p-3 " style="width: 400px">
        <form action="/actionlogin" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            {{-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="/register">Register</a>
    </div>
</div>