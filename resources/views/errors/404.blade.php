@extends('errors.layout')

@section('title', 'Lost in Transit')

@section('image')
<div class="relative w-40 h-40 flex items-center justify-center bg-violet-50 rounded-full border border-violet-100/50 shadow-inner">
    <style>
        @keyframes rotate-needle {
            0% { transform: rotate(0deg); }
            30% { transform: rotate(110deg); }
            40% { transform: rotate(90deg); }
            60% { transform: rotate(290deg); }
            70% { transform: rotate(260deg); }
            100% { transform: rotate(360deg); }
        }
        @keyframes pulse-ring {
            0%, 100% { transform: scale(1); opacity: 0.2; }
            50% { transform: scale(1.15); opacity: 0.4; }
        }
        .compass-needle {
            animation: rotate-needle 6s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
            transform-origin: center;
        }
        .pulse-layer {
            animation: pulse-ring 3s ease-in-out infinite;
        }
    </style>
    <!-- Outer Pulsing Ring -->
    <div class="absolute inset-0 bg-violet-100 rounded-full pulse-layer"></div>
    
    <!-- Compass SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-28 h-28 relative z-10 text-[#071022]">
        <!-- Compass Outer Ring -->
        <circle cx="50" cy="50" r="44" stroke="currentColor" stroke-width="2" fill="none" class="text-slate-300" />
        <circle cx="50" cy="50" r="38" stroke="currentColor" stroke-width="1.5" fill="none" class="text-slate-200" />
        
        <!-- Compass markings -->
        <line x1="50" y1="6" x2="50" y2="12" stroke="currentColor" stroke-width="2" class="text-party-1" />
        <line x1="50" y1="88" x2="50" y2="94" stroke="currentColor" stroke-width="2" />
        <line x1="6" y1="50" x2="12" y2="50" stroke="currentColor" stroke-width="2" />
        <line x1="88" y1="50" x2="94" y2="50" stroke="currentColor" stroke-width="2" />
        
        <!-- Cardinal Text -->
        <text x="50" y="20" font-size="8" font-family="Sora, sans-serif" font-weight="800" text-anchor="middle" fill="var(--party-1)">N</text>
        <text x="50" y="87" font-size="8" font-family="Sora, sans-serif" font-weight="700" text-anchor="middle" class="text-slate-400">S</text>
        <text x="83" y="53" font-size="8" font-family="Sora, sans-serif" font-weight="700" text-anchor="middle" class="text-slate-400">E</text>
        <text x="17" y="53" font-size="8" font-family="Sora, sans-serif" font-weight="700" text-anchor="middle" class="text-slate-400">W</text>
        
        <!-- Dial Needle -->
        <g class="compass-needle">
            <!-- North Pointer (Red/Pink) -->
            <polygon points="50,16 44,50 50,46" fill="var(--party-1)" />
            <polygon points="50,16 56,50 50,46" fill="var(--accent)" style="opacity: 0.9;" />
            <!-- South Pointer (Slate) -->
            <polygon points="50,84 44,50 50,54" fill="#a1a09a" />
            <polygon points="50,84 56,50 50,54" fill="#cbcaa4" style="opacity: 0.7;" />
            <!-- Center Pivot -->
            <circle cx="50" cy="50" r="4" fill="white" stroke="currentColor" stroke-width="1.5" />
        </g>
    </svg>
</div>
@endsection

@section('code', '404')
@section('title-text', 'Lost in Transit')

@section('message')
Don't panic! It looks like you've taken an unplanned detour. The travel destination or page you're trying to reach doesn't exist or has moved. Let's redirect your flight!
@endsection
