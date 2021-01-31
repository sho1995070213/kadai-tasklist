@extends('layouts.app')

@section('content')
    @if (Auth::check())
    
    @include('tasks.index')
    
    @else
        <div class="center jumbtron">
            <div class="text-center">
                <h1>Tasklist</h1>
                {{-- ユーザ登録ページ --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection