@extends('layouts.app')

@section('content')
    <div class="center jumbtron">
        <div class="text-center">
            <h1>Tasklist</h1>
            {{-- ユーザ登録ページ --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection