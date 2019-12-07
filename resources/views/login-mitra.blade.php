<div id="tab-1" class="tab-content">
    <div class="custom-form">
        <form method="post"  name="registerform" action="{{ url('/admin/login') }}">
            {{ csrf_field() }}                                            
            <label class="{{ $errors->has('email') ? ' has-error' : '' }}">Username atau Alamat Email * </label>
            <input name="email" type="text" onClick="this.select()" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <label class="{{ $errors->has('password') ? ' has-error' : '' }}">Password * </label>
            <input name="password" type="password" onClick="this.select()" value="" >
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <button type="submit" class="log-submit-btn"><span>Login</span></button>
            <div class="clearfix"></div>
            <div class="filter-tags">
                <input id="check-a" type="checkbox" name="check">
                <label for="check-a">Remember me</label>
            </div>
        </form>
        <div class="lost_password">
            <a href="#">Kamu Lupa Password ?</a>
        </div>
    </div>
</div>