@extends('errors.layout')

@section('title', 'Restricted Lounge')

@section('image')
<div class="relative w-40 h-40 flex items-center justify-center bg-amber-50 rounded-full border border-amber-100/50 shadow-inner">
    <style>
        @keyframes float-suitcase {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        @keyframes lock-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1) rotate(-3deg); }
        }
        .suitcase-wrapper {
            animation: float-suitcase 4s ease-in-out infinite;
        }
        .lock-badge {
            animation: lock-pulse 2s ease-in-out infinite;
            transform-origin: center;
        }
    </style>
    
    <!-- Locked Suitcase SVG -->
    <div class="suitcase-wrapper relative z-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-24 h-24 text-[#071022]">
            <!-- Suitcase Handle -->
            <path d="M38,30 L38,20 C38,17.8 39.8,16 42,16 L58,16 C60.2,16 62,17.8 62,20 L62,30" stroke="currentColor" stroke-width="3.5" fill="none" stroke-linecap="round" />
            
            <!-- Suitcase Body -->
            <rect x="20" y="30" width="60" height="46" rx="8" fill="var(--party-2)" stroke="currentColor" stroke-width="2.5" />
            
            <!-- Straps -->
            <rect x="30" y="30" width="8" height="46" fill="var(--party-1)" stroke="currentColor" stroke-width="2" />
            <rect x="62" y="30" width="8" height="46" fill="var(--party-1)" stroke="currentColor" stroke-width="2" />
            
            <!-- Protective Corners -->
            <path d="M20,38 L28,30" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" />
            <path d="M80,38 L72,30" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" />
            <path d="M20,68 L28,76" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" />
            <path d="M80,68 L72,76" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" />
            
            <!-- Lock Overlay -->
            <g class="lock-badge" transform="translate(0, 0)">
                <circle cx="50" cy="53" r="13" fill="var(--accent)" stroke="currentColor" stroke-width="2" />
                <!-- Lock Shackle -->
                <path d="M46,50 L46,45 C46,42.8 47.8,41 50,41 C52.2,41 54,42.8 54,45 L54,50" stroke="white" stroke-width="1.5" fill="none" />
                <!-- Lock Body Inside -->
                <rect x="44" y="49" width="12" height="9" rx="1.5" fill="white" />
                <circle cx="50" cy="53.5" r="1.5" fill="var(--accent)" />
                <line x1="50" y1="55" x2="50" y2="57" stroke="var(--accent)" stroke-width="1" />
            </g>
        </svg>
    </div>
</div>
@endsection

@section('code', '403')
@section('title-text', 'Restricted Territory')

@section('message')
You do not have the required boarding pass to access this itinerary or section. Please double-check your account permissions or log in with the correct credentials.
@endsection
