<x-app-layout>
    <x-slot name="header">
        <div class="alert alert-success" role="alert">
          <p style="font-style: italic; color:black; font-size: 15px">
              You are successfully logged in!!
          </p>
          <a href="/">Back to Homepage</a>
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Two Factor Authentication') }}
        </h2>
         @if (session('status') == "two-factor-authentication-disabled")
          <div class="alert alert-success" role="alert">
            <p style="font-style: italic; color:black; font-size: 15px">
                Two factor Authentication has been disabled
            </p>
          </div>
          @endif
           @if (session('status') == "two-factor-authentication-enabled")
          <div class="alert alert-success" role="alert">
            <p style="font-style: italic; color:black; font-size: 15px">
                Two factor Authentication has been enabled
            </p>
          </div>
          @endif

        <form method= "POST" action="/user/two-factor-authentication">
            @csrf
            @if (auth()->user()->two_factor_secret)
            @method ('DELETE')
            <div class="pb-5">
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
            <div>
              <h3>Recovery Codes:</h3>
              <ul>
                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                <li>{{$code}}</li>

                @endforeach
              </ul>
            </div>
            <button class="btn btn-danger">Disabled</button>
            @else
               <button class="btn btn-primary">Enabled</button>
            @endif
        </form>
    </x-slot>
</x-app-layout>
