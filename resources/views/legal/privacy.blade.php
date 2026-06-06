@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-transparent page-root pt-6 pb-20">
    <div class="max-w-4xl mx-auto px-6 lg:px-12">
        <div class="mb-10">
            <div class="text-xs font-semibold tracking-[0.2em] text-slate-400 uppercase">Legal</div>
            <h1 class="mt-3 font-['Playfair_Display',serif] text-4xl lg:text-5xl font-black text-page-text">Privacy Policy</h1>
            <p class="mt-4 text-slate-600 text-base">Effective date: June 1, 2026</p>
        </div>

        <div class="space-y-8 text-slate-700">
            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">1. Information we collect</h2>
                <ul class="list-disc list-inside text-sm leading-relaxed space-y-2">
                    <li>Account details like name, email, and password.</li>
                    <li>Trip data you create such as destinations, dates, and notes.</li>
                    <li>Usage data like device type, browser, and interactions.</li>
                </ul>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">2. How we use information</h2>
                <p class="text-sm leading-relaxed">We use your information to provide the service, improve features, communicate about your account, and keep the platform secure.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">3. Sharing of information</h2>
                <p class="text-sm leading-relaxed">We do not sell your personal information. We share data with service providers that help us operate the service, and only as necessary.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">4. Data retention</h2>
                <p class="text-sm leading-relaxed">We keep your information while your account is active and for a reasonable period afterward to comply with legal obligations or resolve disputes.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">5. Your choices</h2>
                <p class="text-sm leading-relaxed">You can update your profile details at any time. You may request deletion of your account in your settings.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">6. Security</h2>
                <p class="text-sm leading-relaxed">We use reasonable safeguards to protect your data, but no system is completely secure. Use a strong password and keep it private.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">7. Changes to this policy</h2>
                <p class="text-sm leading-relaxed">We may update this policy from time to time. If changes are material, we will update the effective date and provide notice.</p>
            </section>

            <section class="bg-white/70 border border-slate-200 rounded-3xl p-6 lg:p-8 shadow-sm">
                <h2 class="font-['Playfair_Display',serif] text-2xl font-bold text-page-text mb-3">8. Contact</h2>
                <p class="text-sm leading-relaxed">Questions about privacy? Email us at <a class="text-party-1 font-semibold hover:underline" href="mailto:privacy@triptogether.com">privacy@triptogether.com</a>.</p>
            </section>
        </div>
    </div>
</div>
@endsection
