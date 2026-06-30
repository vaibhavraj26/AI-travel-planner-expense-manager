<div x-show="selectedTrip" 
     class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm px-4" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-cloak>
    <div class="w-full max-w-2xl rounded-[2rem] bg-white p-6 sm:p-8 shadow-2xl flex flex-col max-h-[85vh] border border-slate-100" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 scale-95 translate-y-4"
         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 scale-95 translate-y-4"
         @click.outside="selectedTrip = null">
        
        {{-- Modal Header --}}
        <div class="flex items-start justify-between border-b border-slate-100 pb-4 shrink-0">
            <div>
                <span class="text-[9px] font-black uppercase tracking-wider px-3 py-1 bg-party-1/15 text-party-1 rounded-full">
                    Pending Invitation Details
                </span>
                <h3 class="text-2xl font-black text-page-text mt-3 tracking-tight" x-text="selectedTrip?.trip_title"></h3>
                <p class="text-xs text-slate-500 mt-1 leading-none font-semibold">
                    Invited by <span class="font-extrabold text-slate-700" x-text="selectedTrip?.inviter_name"></span> as <span class="font-extrabold text-party-1" x-text="selectedTrip?.role ? selectedTrip.role.toUpperCase() : ''"></span>
                </p>
            </div>
            <button type="button" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-50 hover:bg-slate-100 text-slate-400 hover:text-slate-600 transition-colors cursor-pointer" @click="selectedTrip = null">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        {{-- Modal Scrollable Body --}}
        <div class="mt-6 flex-1 overflow-y-auto space-y-6 pr-1">
            {{-- Quick Stats (Destination, Dates, Budget) --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="p-4 bg-slate-50 border border-slate-100 rounded-2xl">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block">Destination</span>
                    <span class="text-sm font-extrabold text-slate-800 mt-1.5 block" x-text="selectedTrip?.trip_destination"></span>
                </div>
                <div class="p-4 bg-slate-50 border border-slate-100 rounded-2xl">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block">Travel Dates</span>
                    <span class="text-sm font-extrabold text-slate-800 mt-1.5 block">
                        <span x-text="selectedTrip ? new Date(selectedTrip.trip_start_date).toLocaleDateString('en-US', {month: 'short', day: 'numeric', year: 'numeric'}) : ''"></span>
                        -
                        <span x-text="selectedTrip ? new Date(selectedTrip.trip_end_date).toLocaleDateString('en-US', {month: 'short', day: 'numeric', year: 'numeric'}) : ''"></span>
                    </span>
                </div>
                <div class="p-4 bg-slate-50 border border-slate-100 rounded-2xl">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest block">Trip Budget</span>
                    <span class="text-sm font-extrabold text-slate-800 mt-1.5 block">
                        ₹<span x-text="selectedTrip?.trip_budget ? parseFloat(selectedTrip.trip_budget).toLocaleString('en-IN', {minimumFractionDigits: 2, maximumFractionDigits: 2}) : '0.00'"></span>
                    </span>
                </div>
            </div>

            {{-- Description --}}
            <div x-show="selectedTrip?.trip_description">
                <h4 class="text-xs font-black uppercase text-slate-400 tracking-wider">About this Trip</h4>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed bg-slate-50/50 p-4 rounded-2xl border border-slate-100" x-text="selectedTrip?.trip_description"></p>
            </div>

            {{-- Activities List --}}
            <div class="space-y-3">
                <h4 class="text-xs font-black uppercase text-slate-400 tracking-wider">Planned Activities</h4>
                
                <template x-if="!selectedTrip?.activities || selectedTrip.activities.length === 0">
                    <div class="text-center py-8 border border-dashed border-slate-200 rounded-2xl bg-slate-50/40">
                        <p class="text-xs text-slate-400 font-bold uppercase tracking-wider">No activities added by owner</p>
                    </div>
                </template>

                <template x-if="selectedTrip?.activities && selectedTrip.activities.length > 0">
                    <div class="space-y-3 max-h-[300px] overflow-y-auto pr-1">
                        <template x-for="activity in selectedTrip.activities" :key="activity.id">
                            <div class="flex items-start gap-3.5 p-4 bg-white border border-slate-150 rounded-2xl hover:border-party-1/10 transition-colors">
                                <div class="w-9 h-9 rounded-xl bg-party-1/10 flex items-center justify-center shrink-0 text-party-1">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between gap-2">
                                        <h5 class="text-sm font-extrabold text-slate-800 truncate" x-text="activity.title"></h5>
                                        <span class="text-[9px] text-slate-500 font-extrabold bg-slate-100 px-2.5 py-1 rounded-full whitespace-nowrap uppercase tracking-wider" 
                                              x-text="new Date(activity.date).toLocaleDateString('en-US', {month: 'short', day: 'numeric'})"></span>
                                    </div>
                                    <p class="text-xs text-slate-500 mt-1 truncate" x-text="activity.location"></p>
                                    <p class="text-xs text-slate-400 font-bold mt-1.5 inline-flex items-center gap-1 bg-slate-50 px-2 py-1 rounded-lg" 
                                       x-show="activity.start_time">
                                        <span x-text="activity.start_time.substring(0, 5)"></span>
                                        <span x-show="activity.end_time"> - </span>
                                        <span x-show="activity.end_time" x-text="activity.end_time.substring(0, 5)"></span>
                                    </p>
                                </div>
                            </div>
                        </template>
                    </div>
                </template>
            </div>
        </div>

        {{-- Modal Footer Actions --}}
        <div class="mt-6 border-t border-slate-100 pt-4 flex items-center justify-end gap-2.5 shrink-0">
            <button type="button" class="px-4 py-2 text-sm font-semibold text-slate-500 hover:text-slate-700 transition-colors cursor-pointer" @click="selectedTrip = null">
                Close
            </button>
            
            {{-- Decline Form --}}
            <form method="POST" :action="'/trips/' + selectedTrip?.trip_id + '/decline'">
                @csrf
                <button type="submit" 
                        class="inline-flex items-center gap-1.5 px-4.5 py-2.5 rounded-xl border border-slate-300 text-slate-600 text-xs font-bold uppercase tracking-wider hover:bg-slate-50 transition-all cursor-pointer">
                    Decline
                </button>
            </form>

            {{-- Accept Form --}}
            <form method="POST" :action="'/trips/' + selectedTrip?.trip_id + '/accept'">
                @csrf
                <button type="submit" 
                        class="inline-flex items-center gap-1.5 px-4.5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold uppercase tracking-wider transition-all cursor-pointer shadow-lg shadow-emerald-600/10 hover:shadow-emerald-600/20">
                    Accept Invite
                </button>
            </form>
        </div>
    </div>
</div>
