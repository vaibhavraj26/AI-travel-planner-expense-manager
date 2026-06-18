@extends('errors.layout')

@section('title', 'Engine Maintenance')

@section('image')
<div class="relative w-52 h-52 sm:w-60 sm:h-60 flex items-center justify-center bg-violet-50 rounded-full border border-violet-100/50 shadow-inner">
    <style>
        @keyframes spin-gear {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes float-wrench {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-4px) rotate(5deg); }
        }
        .gear-svg {
            animation: spin-gear 12s linear infinite;
            transform-origin: center;
        }
        .wrench-svg {
            animation: float-wrench 3s ease-in-out infinite;
            transform-origin: center;
        }
    </style>
    
    <!-- Maintenance SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-32 h-32 sm:w-36 sm:h-36 text-[#071022]">
        <!-- Rotating Gear in Background -->
        <g class="gear-svg text-slate-300">
            <path d="M50,34 C41.2,34 34,41.2 34,50 C34,58.8 41.2,66 50,66 C58.8,66 66,58.8 66,50 C66,41.2 58.8,34 50,34 Z M50,58 C45.6,58 42,54.4 42,50 C42,45.6 45.6,42 50,42 C54.4,42 58,45.6 58,50 C58,54.4 54.4,58 50,58 Z" fill="currentColor" />
            <!-- Teeth -->
            <rect x="47" y="26" width="6" height="9" fill="currentColor" rx="1" />
            <rect x="47" y="65" width="6" height="9" fill="currentColor" rx="1" />
            <rect x="26" y="47" width="9" height="6" fill="currentColor" rx="1" />
            <rect x="65" y="47" width="9" height="6" fill="currentColor" rx="1" />
            <g transform="rotate(45 50 50)">
                <rect x="47" y="26" width="6" height="9" fill="currentColor" rx="1" />
                <rect x="47" y="65" width="6" height="9" fill="currentColor" rx="1" />
                <rect x="26" y="47" width="9" height="6" fill="currentColor" rx="1" />
                <rect x="65" y="47" width="9" height="6" fill="currentColor" rx="1" />
            </g>
        </g>
        
        <!-- Wrench overlay -->
        <g class="wrench-svg text-[#071022]" transform="translate(10, 10)">
            <path d="M25,55 L55,25 C56.5,23.5 56.5,21 55,19.5 L50.5,15 C49,13.5 46.5,13.5 45,15 L15,45 C13.5,46.5 13.5,49 15,50.5 L19.5,55 C21,56.5 23.5,56.5 25,55 Z" fill="var(--party-1)" stroke="currentColor" stroke-width="2" />
            <!-- Wrench open end -->
            <path d="M15,45 L23,37 M21,49 L29,41" stroke="currentColor" stroke-width="2" />
            <!-- Hammer or secondary tool crossing or just tool highlight -->
            <circle cx="50" cy="20" r="3.5" fill="var(--party-2)" stroke="currentColor" stroke-width="1.5" />
        </g>
    </svg>
</div>
@endsection

@section('code', '503')
@section('title-text', 'Scheduled Maintenance')

@section('message')
We're in the hangar tuning up our flight engines to ensure your next travel planning experience is smoother than ever. We'll be back online in just a short bit!
@endsection
