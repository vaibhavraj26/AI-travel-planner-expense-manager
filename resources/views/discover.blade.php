@extends('layouts.dashboard')

@section('header_title', 'Discover')

@section('content')
<div class="max-w-7xl mx-auto space-y-6 animate-float-up" 
     x-data="{ 
         activeTag: 'All Explorers', 
         searchQuery: '',
         matchesFilter(tags, title, desc) {
             const query = this.searchQuery.toLowerCase().trim();
             const matchesQuery = !query || 
                 title.toLowerCase().includes(query) || 
                 desc.toLowerCase().includes(query) || 
                 tags.some(t => t.toLowerCase().includes(query));
                 
             const matchesTag = this.activeTag === 'All Explorers' || tags.includes(this.activeTag);
             
             return matchesQuery && matchesTag;
         }
     }">
     
    {{-- Search Bar Section --}}
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="relative w-full sm:max-w-md">
            <div class="absolute inset-y-0 left-0 pl-4.5 flex items-center pointer-events-none text-slate-400">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <input type="text" 
                   x-model="searchQuery" 
                   placeholder="Search destinations, guides, or tags..." 
                   class="w-full pl-12 pr-10 py-3 bg-white border border-slate-200 rounded-2xl focus:bg-white focus:border-party-1 focus:ring-1 focus:ring-party-1/20 transition-all outline-none text-slate-800 text-sm shadow-sm placeholder-slate-400 font-semibold">
            <button type="button" 
                    x-show="searchQuery.length > 0" 
                    @click="searchQuery = ''" 
                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 transition-colors"
                    x-cloak>
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest hidden lg:block">
            Curated guides from around the world
        </p>
    </div>

    {{-- Header filter pills --}}
    <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none">
        @php
            $filterTags = [
                'All Explorers',
                '#adventure',
                '#budget',
                '#solo',
                '#luxury',
                '#foodie',
                '#family',
                '#remote_work'
            ];
        @endphp
        @foreach($filterTags as $tag)
            <button type="button" 
                    @click="activeTag = '{{ $tag }}'"
                    :class="activeTag === '{{ $tag }}' ? 'bg-party-1 text-white border-transparent' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-full text-xs font-bold transition-all whitespace-nowrap cursor-pointer">
                {{ $tag }}
            </button>
        @endforeach
    </div>

    @php
        $featuredPost = [
            'title' => 'Amalfi Dream: 7 Days in Positano',
            'description' => 'Experience the breathtaking beauty of the Amalfi Coast, from the iconic pastel houses of Positano to the historic streets of Amalfi.',
            'image' => 'https://images.unsplash.com/photo-1516483638261-f4dbaf036963?q=80&w=1200&auto=format&fit=crop',
            'author' => 'Elena Rossi',
            'author_avatar' => 'https://i.pravatar.cc/100?img=47',
            'likes' => '2.4k',
            'duration' => '7 Days',
            'tags' => ['#adventure', '#luxury', '#romance'],
            'destination' => 'Positano, Italy'
        ];

        $standardPosts = [
            [
                'title' => 'Zen & Tea: Kyoto Seclusion',
                'description' => 'A deep dive into the hidden temples and private tea ceremonies of Gion...',
                'image' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?q=80&w=600&auto=format&fit=crop',
                'tags' => ['#solo', '#culture'],
                'duration' => '4 Days',
                'destination' => 'Kyoto, Japan'
            ],
            [
                'title' => 'Wild Iceland: The Ring Road',
                'description' => 'The ultimate camper van guide for photographers seeking the northern...',
                'image' => 'https://images.unsplash.com/photo-1504893524553-ac55fce698be?q=80&w=600&auto=format&fit=crop',
                'tags' => ['#adventure', '#photography'],
                'duration' => '12 Days',
                'destination' => 'Ring Road, Iceland'
            ],
            [
                'title' => 'Mexico City: Taco Tour',
                'description' => 'Finding the best al pastor and hidden mezcal bars in Roma Norte.',
                'image' => 'https://images.unsplash.com/photo-1565299585323-38d6b0865b47?q=80&w=600&auto=format&fit=crop',
                'tags' => ['#foodie', '#budget'],
                'duration' => '5 Days',
                'destination' => 'Mexico City, Mexico'
            ],
            [
                'title' => 'Santorini Sunset Bliss',
                'description' => 'A curated list of the most exclusive villas and sunset viewpoints in Oia.',
                'image' => 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?q=80&w=600&auto=format&fit=crop',
                'tags' => ['#luxury', '#couples'],
                'duration' => '3 Days',
                'destination' => 'Santorini, Greece'
            ],
        ];
    @endphp

    {{-- Main Grid --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        {{-- Row 1: Featured Card (2 columns) + Kyoto Card (1 column) --}}
        <div class="lg:col-span-2 relative overflow-hidden rounded-[2rem] h-[400px] flex flex-col justify-end p-8 text-white shadow-xl group border border-slate-100 animate-float-up"
             x-show="matchesFilter(@json($featuredPost['tags']), '{{ $featuredPost['title'] }}', '{{ $featuredPost['description'] }}')">
            {{-- Background Image --}}
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" 
                 style="background-image: url('{{ $featuredPost['image'] }}')"></div>
            {{-- Dark Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/35 to-transparent"></div>

            {{-- Top floating badges --}}
            <div class="absolute top-6 left-6 flex items-center gap-2 z-10">
                <span class="backdrop-blur-md bg-white/10 border border-white/20 text-white text-[9px] font-black uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                    Premium Guide
                </span>
                <span class="bg-party-1 text-white text-[9px] font-black uppercase tracking-widest px-3.5 py-1.5 rounded-full">
                    Top Rated
                </span>
            </div>

            {{-- Content --}}
            <div class="relative z-10 flex flex-col md:flex-row md:items-end justify-between gap-6 w-full">
                <div class="space-y-3">
                    <h2 class="text-3xl font-extrabold tracking-tight leading-tight max-w-lg font-sans">
                        {{ $featuredPost['title'] }}
                    </h2>
                    <div class="flex items-center gap-2.5">
                        <img src="{{ $featuredPost['author_avatar'] }}" alt="{{ $featuredPost['author'] }}" class="w-8 h-8 rounded-full border border-white/60 object-cover" />
                        <span class="text-xs font-semibold text-slate-200">by {{ $featuredPost['author'] }}</span>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button class="backdrop-blur-md bg-white/10 hover:bg-white/20 border border-white/20 px-4 py-2.5 rounded-full text-xs font-bold inline-flex items-center gap-1.5 transition-colors cursor-pointer">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318z"/></svg>
                        <span>{{ $featuredPost['likes'] }}</span>
                    </button>
                    <a href="{{ route('trips.create', ['destination' => $featuredPost['destination']]) }}" 
                       class="bg-white hover:bg-slate-50 text-party-1 px-6 py-2.5 rounded-full text-xs font-black shadow-md transition-colors cursor-pointer">
                        View Trip
                    </a>
                </div>
            </div>
        </div>

        {{-- Kyoto (and standard posts loop) --}}
        @foreach($standardPosts as $post)
            <div class="bg-white border border-slate-200/80 rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl hover:border-party-1/10 transition-all duration-300 flex flex-col justify-between group"
                 x-show="matchesFilter(@json($post['tags']), '{{ $post['title'] }}', '{{ $post['description'] }}')">
                
                {{-- Card Header Image --}}
                <div class="relative h-[210px] w-full overflow-hidden shrink-0">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-750 group-hover:scale-105" 
                         style="background-image: url('{{ $post['image'] }}')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    
                    {{-- Floating Bookmark --}}
                    <button type="button" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/10 hover:bg-white/25 border border-white/25 backdrop-blur-md flex items-center justify-center text-white transition-colors cursor-pointer">
                        <svg class="w-4.5 h-4.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/></svg>
                    </button>
                </div>

                {{-- Card Body --}}
                <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex flex-wrap gap-1.5">
                            @foreach($post['tags'] as $tag)
                                <span class="bg-slate-100 text-slate-500 text-[9px] font-extrabold uppercase tracking-wider px-2.5 py-1 rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <h3 class="text-lg font-black text-page-text group-hover:text-party-1 transition-colors leading-tight">
                            {{ $post['title'] }}
                        </h3>
                        <p class="text-xs text-slate-500 leading-relaxed font-medium">
                            {{ $post['description'] }}
                        </p>
                    </div>

                    {{-- Card Footer --}}
                    <div class="flex items-center justify-between border-t border-slate-100 pt-4 mt-auto">
                        <span class="inline-flex items-center gap-1.5 text-xs font-extrabold text-slate-500">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            {{ $post['duration'] }}
                        </span>
                        
                        <a href="{{ route('trips.create', ['destination' => $post['destination']]) }}" 
                           class="text-xs font-black text-party-1 hover:text-[#E03A89] hover:underline transition-all">
                            Explore Guide
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Discover Footer area --}}
    <div class="pt-12 border-t border-slate-200 flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="text-center md:text-left">
            <span class="font-['Playfair_Display',serif] font-black text-xl text-page-text">
                trip<span class="text-party-1">Together</span>
            </span>
            <p class="text-[11px] text-slate-400 mt-1">&copy; {{ date('Y') }} tripTogether. All rights reserved.</p>
        </div>

        <div class="flex items-center gap-6 text-xs font-bold text-slate-400">
            <a href="{{ route('privacy') }}" class="hover:text-slate-600 transition-colors">Privacy Policy</a>
            <a href="{{ route('terms') }}" class="hover:text-slate-600 transition-colors">Terms of Service</a>
            <a href="#" class="hover:text-slate-600 transition-colors">Community</a>
        </div>

        <div>
            <a href="{{ route('trips.create') }}" 
               class="py-3 px-6 rounded-full bg-party-1 hover:bg-[#E03A89] text-white font-extrabold text-xs tracking-wider uppercase shadow-xl shadow-party-1/20 hover:shadow-party-1/30 hover:-translate-y-0.5 transition-all inline-flex items-center gap-1.5 cursor-pointer duration-300">
                <span class="text-sm font-bold">+</span> Share My Itinerary
            </a>
        </div>
    </div>
</div>
@endsection
