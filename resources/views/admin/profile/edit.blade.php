@extends('admin.layout')

@section('title', 'Meu Perfil - Admin')

@section('content')
    <div class="mb-10">
        <h1 class="text-3xl font-bold text-slate-900">Meu Perfil</h1>
        <p class="text-slate-600 mt-2">Gerencie suas informações pessoais e senha</p>
    </div>

    @if (session('success'))
        <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-xl mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-xl mb-6">
            {{ session('error') }}
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Profile Info -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-10">
            <h2 class="text-xl font-bold text-slate-900 mb-6">Informações do Perfil</h2>
            <div class="space-y-4">
                <div>
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Nome</label>
                    <p class="text-lg font-semibold text-slate-900 mt-1">{{ auth()->user()->name }}</p>
                </div>
                <div>
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">E-mail</label>
                    <p class="text-lg font-semibold text-slate-900 mt-1">{{ auth()->user()->email }}</p>
                </div>
                <div>
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Membro desde</label>
                    <p class="text-lg font-semibold text-slate-900 mt-1">{{ auth()->user()->created_at->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Change Password -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-10">
            <h2 class="text-xl font-bold text-slate-900 mb-6">Alterar Senha</h2>
            <form action="{{ route('admin.profile.updatePassword') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Senha Atual</label>
                        <input type="password" name="current_password" required
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('current_password') border-red-500 @enderror">
                        @error('current_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Nova Senha</label>
                        <input type="password" name="password" required
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Confirmar Nova
                            Senha</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-all mt-8">
                    Atualizar Senha
                </button>
            </form>
        </div>
    </div>
@endsection