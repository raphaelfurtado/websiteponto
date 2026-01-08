@extends('admin.layout')

@section('title', 'Novo Usuário - Admin')

@section('content')
    <div class="mb-10">
        <a href="{{ route('admin.users.index') }}"
            class="text-blue-600 hover:text-blue-700 font-bold text-sm mb-4 inline-block">
            ← Voltar para Usuários
        </a>
        <h1 class="text-3xl font-bold text-slate-900">Novo Usuário</h1>
        <p class="text-slate-600 mt-2">Adicione um novo usuário ao painel administrativo</p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-10">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-8">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Nome Completo</label>
                    <input type="text" name="name" value="{{ old('name') }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">E-mail</label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Senha</label>
                    <input type="password" name="password" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Confirmar Senha</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>
            </div>

            <div class="flex items-center space-x-4 mt-10">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-all">
                    Criar Usuário
                </button>
                <a href="{{ route('admin.users.index') }}"
                    class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-3 rounded-xl font-bold transition-all">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection