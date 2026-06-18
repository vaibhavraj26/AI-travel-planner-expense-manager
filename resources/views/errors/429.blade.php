@extends('errors.layout')

@section('title', 'Traffic Delay')

@section('image')
<div class="relative w-52 h-52 sm:w-60 sm:h-60 flex items-center justify-center bg-rose-50 rounded-full border border-rose-100/50 shadow-inner">
    <style>
        @keyframes pulse-red-light {
            0%, 100% { fill: #ef4444; filter: drop-shadow(0 0 2px rgba(239, 68, 68, 0.4)); }
            50% { fill: #f87171; filter: drop-shadow(0 0 12px rgba(239, 68, 68, 0.9)); }
        }
        @keyframes bounce-light {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        .red-light {
            animation: pulse-red-light 1.5s ease-in-out infinite;
        }
        .stoplight-box {
            animation: bounce-light 3s ease-in-out infinite;
        }
    </style>
    
    <!-- Traffic Light SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-32 h-32 sm:w-36 sm:h-36 text-[#071022] stoplight-box">
        <!-- Post/Pole -->
        <rect x="47" y="65" width="6" height="25" fill="#a1a09a" stroke="currentColor" stroke-width="1.5" />
        
        <!-- Light Body Box -->
        <rect x="36" y="15" width="28" height="52" rx="6" fill="#1e293b" stroke="currentColor" stroke-width="2.5" />
        
        <!-- Red Light (Top, Pulsing) -->
        <circle cx="50" cy="26" r="7" class="red-light" stroke="currentColor" stroke-width="1.5" />
        <path d="M30,22 L36,25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        <path d="M70,22 L64,25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        
        <!-- Yellow Light (Middle, Off/Dim) -->
        <circle cx="50" cy="41" r="7" fill="#eab308" style="opacity: 0.25;" stroke="currentColor" stroke-width="1.5" />
        <path d="M30,37 L36,40" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        <path d="M70,37 L64,40" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        
        <!-- Green Light (Bottom, Off/Dim) -->
        <circle cx="50" cy="56" r="7" fill="#22c55e" style="opacity: 0.25;" stroke="currentColor" stroke-width="1.5" />
        <path d="M30,52 L36,55" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        <path d="M70,52 L64,55" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>
</div>
@endsection

@section('code', '429')
@section('title-text', 'Traffic Delays Ahead')

@section('message')
Whoa, slow down there explorer! You're requesting itineraries faster than our engines can fly. Please take a small breather, enjoy the view, and try again in a moment.
@endsection
