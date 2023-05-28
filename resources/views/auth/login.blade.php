@extends("admin.layouts.auth")
@section("title")
    Giriş Yap
@endsection

@section("content")
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control m-b-md"
                        id="signInEmail"
                        aria-describedby="signInEmail"
                        placeholder="example@neptune.com"
                        name="email"
                        value=" {{ old('email') }}"
                    >

                    <label for="signInPassword" class="form-label">Parola</label>
                    <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword"
                           placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">
                </div>

                <div class="auth-submit text-center">
                    <button type="submit" class="btn btn-primary" style="width: 50%">Giriş Yap</button>
                </div>
                <div class="divider"></div>
                <div class="auth-alts">
                    <a href="#" class="auth-alts-google"></a>
                    <a href="#" class="auth-alts-facebook"></a>
                    <a href="#" class="auth-alts-twitter"></a>
                </div>
            </form>
        </div>
    </div>
@endsection
