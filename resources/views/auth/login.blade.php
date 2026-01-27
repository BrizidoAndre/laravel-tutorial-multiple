<x-layout>
    <h1>Login</h1>
    <form method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="pass">Passphrase</label>
            <input type="password" id="pass" class="form-control" name="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</x-layout>
