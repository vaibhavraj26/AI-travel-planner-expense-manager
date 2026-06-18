@extends('errors.layout')

@section('title', 'Unexpected Turbulence')

@section('image')
<div class="relative w-52 h-52 sm:w-60 sm:h-60 flex items-center justify-center bg-rose-50 rounded-full border border-rose-100/50 shadow-inner">
    <style>
        @keyframes turbulent-float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            20% { transform: translateY(-8px) rotate(-4deg); }
            40% { transform: translateY(-3px) rotate(3deg); }
            60% { transform: translateY(-10px) rotate(-2deg); }
            80% { transform: translateY(-2px) rotate(4deg); }
        }
        @keyframes cloud-drift {
            0% { transform: translateX(-30px); opacity: 0; }
            10% { opacity: 0.6; }
            90% { opacity: 0.6; }
            100% { transform: translateX(30px); opacity: 0; }
        }
        .hot-air-balloon {
            animation: turbulent-float 5s ease-in-out infinite;
            transform-origin: center bottom;
        }
        .drifting-cloud-1 {
            animation: cloud-drift 8s linear infinite;
        }
        .drifting-cloud-2 {
            animation: cloud-drift 12s linear infinite;
            animation-delay: -4s;
        }
    </style>
    <!-- Drifting clouds background -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="absolute inset-0 w-full h-full text-slate-300 pointer-events-none" style="opacity: 0.7;">
        <path class="drifting-cloud-1" d="M15,35 C17,35 18,33 19,33 C20,33 21,34 22,34 C23,34 24,32 25,32 C27,32 28,34 29,34 C30,34 30,35 31,35" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
        <path class="drifting-cloud-2" d="M60,65 C62,65 63,63 64,63 C65,63 66,64 67,64 C68,64 69,62 70,62 C72,62 73,64 74,64 C75,64 75,65 76,65" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
    </svg>
 
    <!-- Hot Air Balloon Illustration -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-32 h-32 sm:w-36 sm:h-36 relative z-10 text-[#071022] hot-air-balloon">
        <!-- Balloon Envelope (Stripe Pattern) -->
        <path d="M50,15 C32,15 28,35 34,48 C37,55 44,65 44,68 L56,68 C56,65 63,55 66,48 C72,35 68,15 50,15 Z" fill="var(--party-1)" />
        <!-- Accent stripes -->
        <path d="M50,15 C44,15 41,35 44,48 C45,53 48,60 48,68 L52,68 C52,60 55,53 56,48 C59,35 56,15 50,15 Z" fill="var(--party-2)" />
        <path d="M50,15 C48,15 46,35 48,48 C49,53 49.5,60 49.5,68 L50.5,68 C50.5,60 51,53 52,48 C54,35 52,15 50,15 Z" fill="var(--accent)" />
        
        <!-- Envelope Bottom Collar -->
        <rect x="44" y="68" width="12" height="2" rx="1" fill="#071022" />
        
        <!-- Ropes/Rigging -->
        <line x1="45" y1="70" x2="47" y2="78" stroke="#071022" stroke-width="1" />
        <line x1="49" y1="70" x2="49" y2="78" stroke="#071022" stroke-width="1" />
        <line x1="51" y1="70" x2="51" y2="78" stroke="#071022" stroke-width="1" />
        <line x1="55" y1="70" x2="53" y2="78" stroke="#071022" stroke-width="1" />
        
        <!-- Basket -->
        <rect x="46" y="78" width="8" height="6" rx="1.5" fill="#C9A84C" stroke="#071022" stroke-width="1" />
        <!-- Basket pattern -->
        <line x1="48" y1="78" x2="48" y2="84" stroke="#071022" stroke-width="0.5" />
        <line x1="50" y1="78" x2="50" y2="84" stroke="#071022" stroke-width="0.5" />
        <line x1="52" y1="78" x2="52" y2="84" stroke="#071022" stroke-width="0.5" />
        <line x1="46" y1="81" x2="54" y2="81" stroke="#071022" stroke-width="0.5" />
    </svg>
</div>
@endsection

@section('code', '500')
@section('title-text', 'Unexpected Turbulence')

@section('message')
Our navigation system experienced a temporary hiccup. Don't worry, our flight crew has been notified and is already charting a course to fix it. Please try reloading or check back in a few minutes.
@endsection
