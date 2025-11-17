@extends('layouts.app')

@section('content')
@php($title = 'User Dashboard')
@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 space-y-8">
    <div>
        <h1 class="text-3xl font-bold text-indigo-700 dark:text-indigo-300 flex items-center gap-2 mb-2">
            <span>🏠</span> Welcome, {{ Auth::user()->name ?? 'User' }}!
        </h1>
        <p class="text-slate-600 dark:text-slate-300 text-lg">Your personalized dashboard. Quick access to your most important actions and stats.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-stat-card title="My Attendance" value="0%" icon="✅" color="emerald" />
        <x-stat-card title="Upcoming Sessions" value="0" icon="📅" color="blue" />
        <x-stat-card title="Pending Fees" value="$0" icon="💳" color="amber" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <a href="{{ route('students.index') }}" class="block p-6 bg-indigo-50 dark:bg-neutral-800 rounded-lg shadow hover:shadow-lg transition border border-indigo-100 dark:border-neutral-700">
            <div class="text-2xl mb-2">👥</div>
            <div class="font-bold text-lg mb-1">View Students</div>
            <div class="text-slate-600 dark:text-slate-400 text-sm">Browse, add, or edit student records.</div>
        </a>
        <a href="{{ route('profile.edit') }}" class="block p-6 bg-blue-50 dark:bg-neutral-800 rounded-lg shadow hover:shadow-lg transition border border-blue-100 dark:border-neutral-700">
            <div class="text-2xl mb-2">📝</div>
            <div class="font-bold text-lg mb-1">Edit Profile</div>
            <div class="text-slate-600 dark:text-slate-400 text-sm">Update your account information and password.</div>
        </a>
        <a href="{{ route('reports.index') }}" class="block p-6 bg-green-50 dark:bg-neutral-800 rounded-lg shadow hover:shadow-lg transition border border-green-100 dark:border-neutral-700">
            <div class="text-2xl mb-2">📄</div>
            <div class="font-bold text-lg mb-1">My Reports</div>
            <div class="text-slate-600 dark:text-slate-400 text-sm">View and submit your activity and status reports.</div>
        </a>
        <a href="#" class="block p-6 bg-yellow-50 dark:bg-neutral-800 rounded-lg shadow hover:shadow-lg transition border border-yellow-100 dark:border-neutral-700">
            <div class="text-2xl mb-2">💳</div>
            <div class="font-bold text-lg mb-1">Payments</div>
            <div class="text-slate-600 dark:text-slate-400 text-sm">Check your payment history and pending fees.</div>
        </a>
        <a href="#" class="block p-6 bg-pink-50 dark:bg-neutral-800 rounded-lg shadow hover:shadow-lg transition border border-pink-100 dark:border-neutral-700">
            <div class="text-2xl mb-2">🆘</div>
            <div class="font-bold text-lg mb-1">Support</div>
            <div class="text-slate-600 dark:text-slate-400 text-sm">Contact support or view help resources.</div>
        </a>
    </div>
    <div class="bg-white dark:bg-neutral-900 rounded-lg shadow-md border border-slate-200 dark:border-neutral-800 p-6">
        <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">Upcoming Training Sessions</h2>
        <div class="text-sm text-slate-600 dark:text-slate-400">No upcoming sessions scheduled.</div>
    </div>
</div>
@endsection