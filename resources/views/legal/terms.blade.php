@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-transparent page-root pt-6 pb-20">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
        <div class="mb-10">
            <div class="text-xs font-semibold tracking-[0.2em] text-slate-400 uppercase">Legal</div>
            <h1 class="mt-3 font-['Playfair_Display',serif] text-4xl lg:text-5xl font-black text-page-text">Terms of Service </h1>
            <p class="mt-4 text-slate-600 text-base">Effective date: June 1, 2026</p>
        </div>

        <div class="space-y-8 text-slate-700">
            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">1. Agreement to terms</h2>
                <p class="text-sm leading-relaxed">By accessing or using TripTogether, you agree to these Terms of Service. If you do not agree, do not use the service.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">2. Eligibility</h2>
                <p class="text-sm leading-relaxed">You must be at least 13 years old to create an account. If you are using TripTogether on behalf of an organization, you represent that you are authorized to accept these terms for that organization.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">3. Accounts and security</h2>
                <ul class="list-disc list-inside text-sm leading-relaxed space-y-2">
                    <li>You are responsible for maintaining the confidentiality of your login credentials.</li>
                    <li>You agree to provide accurate information and keep it up to date.</li>
                    <li>Notify us immediately of any unauthorized access or use.</li>
                </ul>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">4. Acceptable use</h2>
                <p class="text-sm leading-relaxed">You agree not to misuse the service. This includes attempting to interfere with the service, access data without authorization, or use the service for unlawful activities.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">5. Subscriptions and billing</h2>
                <p class="text-sm leading-relaxed">Paid plans renew automatically until canceled. Prices, taxes, and billing cycles are presented at checkout. You can manage or cancel your subscription from your account settings.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">6. Intellectual property</h2>
                <p class="text-sm leading-relaxed">TripTogether and its content are protected by intellectual property laws. You may not copy, modify, or distribute our content without permission.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">7. Termination</h2>
                <p class="text-sm leading-relaxed">We may suspend or terminate your access if you violate these terms. You may stop using the service at any time.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">8. Limitation of liability</h2>
                <p class="text-sm leading-relaxed">To the fullest extent permitted by law, TripTogether is not liable for indirect, incidental, special, or consequential damages.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">9. Changes to these terms</h2>
                <p class="text-sm leading-relaxed">We may update these terms from time to time. If we make material changes, we will provide notice by updating the effective date.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">10. Contact</h2>
                <p class="text-sm leading-relaxed">Questions about these terms? Email us at <a class="text-party-1 font-semibold hover:underline" href="mailto:support@triptogether.com">support@triptogether.com</a>.</p>
            </section>
        </div>
    </div>
</div>
@endsection
