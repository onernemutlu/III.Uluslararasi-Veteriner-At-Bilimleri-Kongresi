@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('E-posta onay mesajı gönderildi.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Yeni istek e-mail hesabınıza gönderildi.') }}
                        </div>
                    @endif

                    {{ __('İşlem yapmadan önce lütfen e-posta kutunuzu kontrol ediniz.') }}
                    {{ __('Eğer mail almadıysanız.') }}, <a href="{{ route('verification.resend') }}">{{ __('Yeni istek gönder') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
