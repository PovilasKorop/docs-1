@extends('layouts.screencasts')

@section('nav-menu')
    <div class="ml-8 mt-8">
        @include('includes.screencast-sidebar')
    </div>
@endsection

@section('content')
    <section class="flex flex-1 h-full">
        <div class="flex-1 overflow-y-auto">
            @livewire('screencast-player', ['screencast' => $screencast])
        </div>

        <nav class="hidden relative z-10 h-full w-1/4 bg-white overflow-x-hidden lg:block">
            <div class="absolute right-0 -mr-4 z-10 w-8 h-64 pointer-events-none bg-gradient-to-b from-white to-transparent"></div>
            <div class="relative h-full flex-1 overflow-y-auto">
                <div class="p-8 bg-white">
                    @include('includes.screencast-sidebar')
                </div>
            </div>
        </nav>
    </section>
@overwrite
