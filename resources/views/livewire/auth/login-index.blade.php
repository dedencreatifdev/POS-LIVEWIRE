<div>
    <form wire:submit="loginAuth">

        <div class="form-group">
            <label for="email">Email address</label>
            <div class="mb-3 input-group">
                <input wire:model.defer="email" type="email"
                    class="form-control form-control-sm @error('email') is-invalid @enderror" placeholder="Email"
                    value="{{ old('email') }}" />
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a email address</span>
            </div>
            <label for="password">Password</label>
            <div class="mb-3 input-group">
                <input wire:model.defer="password" type="password" class="form-control form-control-sm"
                    placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Ingatkan saya
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block btn-sm">
                        <i class="fas fa-key"></i>
                        Login
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
