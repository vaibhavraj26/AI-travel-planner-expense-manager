@extends('errors.layout')

@section('title', 'Ticket Expired')

@section('image')
<div class="relative w-52 h-52 sm:w-60 sm:h-60 flex items-center justify-center bg-violet-50 rounded-full border border-violet-100/50 shadow-inner">
    <style>
        @keyframes rotate-hourglass {
            0%, 90% { transform: rotate(0deg); }
            100% { transform: rotate(180deg); }
        }
        @keyframes drip {
            0% { stroke-dashoffset: 10; }
            100% { stroke-dashoffset: 0; }
        }
        .hourglass-body {
            animation: rotate-hourglass 5s ease-in-out infinite;
            transform-origin: center;
        }
        .sand-drip {
            stroke-dasharray: 4;
            animation: drip 1.5s linear infinite;
        }
    </style>
    
    <!-- Hourglass SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="w-32 h-32 sm:w-36 sm:h-36 text-[#071022] hourglass-body">
        <!-- Frame top & bottom -->
        <rect x="25" y="15" width="50" height="6" rx="2" fill="var(--party-1)" stroke="currentColor" stroke-width="2" />
        <rect x="25" y="79" width="50" height="6" rx="2" fill="var(--party-1)" stroke="currentColor" stroke-width="2" />
        
        <!-- Glass body -->
        <path d="M30,21 L70,21 L57,48 C55,52 55,52 57,56 L70,79 L30,79 L43,56 C45,52 45,52 43,48 Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round" />
        
        <!-- Sand top (disappearing) -->
        <path d="M33,23 L67,23 C63,33 58,40 50,47 C42,40 37,33 33,23 Z" fill="var(--party-2)" style="opacity: 0.8;" />
        
        <!-- Sand bottom (accumulating) -->
        <path d="M43,58 C47,65 37,73 33,77 L67,77 C63,73 53,65 57,58 Z" fill="var(--party-2)" style="opacity: 0.9;" />
        
        <!-- Sand dripping stream -->
        <line x1="50" y1="46" x2="50" y2="60" stroke="var(--party-2)" stroke-width="2" stroke-linecap="round" class="sand-drip" />
    </svg>
</div>
@endsection

@section('code', '419')
@section('title-text', 'Boarding Ticket Expired')

@section('message')
Your session has expired due to inactivity. This is a security precaution to keep your itinerary data safe. Please refresh the page and try again!
@endsection
