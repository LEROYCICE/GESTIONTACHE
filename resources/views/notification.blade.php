@extends('layout')

@section('content')
    

    @foreach (auth()->user()->unReadNotifications as $notification)

        <section class="section">
            {{ $resultat = $notification->data['titre']}}

            @if ($resultat)
                {{$notification->markAsRead()}}
            @endif

        </section>
 
    @endforeach
    
@endsection