@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-2xl font-semibold mb-4">Dashboard Overview</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($cards as $card)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-{{ $loop->iteration % 4 == 1 ? 'info' : ($loop->iteration % 4 == 2 ? 'success' : ($loop->iteration % 4 == 3 ? 'warning' : 'danger')) }} elevation-1">
                        <i class="fas fa-{{ $loop->iteration % 4 == 1 ? 'users' : ($loop->iteration % 4 == 2 ? 'file' : ($loop->iteration % 4 == 3 ? 'comments' : 'cog')) }}"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">{{ $card['label'] }}</span>
                        <span class="info-box-number">{{ $card['value'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop

@section('css')
<style>
    .info-box {
        min-height: 100px;
        background: #fff;
        border-radius: .25rem;
        transition: all .3s ease-in-out;
    }

    .info-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 6px rgba(0,0,0,.1) !important;
    }

    .info-box-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.875rem;
        color: #fff;
        border-radius: .25rem;
    }

    .info-box-content {
        padding: 1rem;
        margin-left: 70px;
    }

    .info-box-text {
        display: block;
        font-size: 1rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #666;
    }

    .info-box-number {
        display: block;
        font-weight: 700;
        font-size: 1.5rem;
        color: #333;
    }
</style>
@stop

@section('js')
<script>
    $(document).ready(function() {
        // Add animation to cards
        $('.info-box').each(function(index) {
            $(this).delay(100 * index).animate({opacity: 1}, 500);
        });
    });
</script>
@stop