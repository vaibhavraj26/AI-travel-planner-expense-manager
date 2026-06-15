<div id="data-warning-banner" class="sticky top-0 z-50 w-full bg-amber-200 text-amber-900 border-b border-amber-300 hidden">
    <div class="mx-auto max-w-7xl px-4 py-2 text-sm sm:px-6 lg:px-8 flex items-center justify-between gap-4">
        <div class="flex-1">
            <span class="font-semibold">Heads up:</span> This site is currently in development and runs on Render with PostgreSQL. Frequent deploys can reset data, and local changes may not match production yet! If you encounter any issues, please <a href="https://vaibhav5860.vercel.app" class="underline font-medium" target="_blank" rel="noopener">Contact Developer</a>.
        </div>
        <button id="close-warning-btn" class="p-1 rounded-md text-amber-700 hover:text-amber-950 hover:bg-amber-300 focus:outline-none transition-all duration-200" aria-label="Dismiss warning">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<script>
    (function() {
        const banner = document.getElementById('data-warning-banner');
        if (localStorage.getItem('data-warning-dismissed') !== 'true') {
            banner.classList.remove('hidden');
        }
        
        document.getElementById('close-warning-btn').addEventListener('click', function() {
            banner.classList.add('hidden');
            localStorage.setItem('data-warning-dismissed', 'true');
        });
    })();
</script>