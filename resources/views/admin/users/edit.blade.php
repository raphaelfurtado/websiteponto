@extends('admin.layout')

@section('title', 'Editar Usuário - Admin')

@section('content')
    <div class="mb-10">
        <a href="{{ route('admin.users.index') }}"
            class="text-blue-600 hover:text-blue-700 font-bold text-sm mb-4 inline-block">
            ← Voltar para Usuários
        </a>
        <h1 class="text-3xl font-bold text-slate-900">Editar Usuário</h1>
        <p class="text-slate-600 mt-2">Atualize as informações do usuário</p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-10">
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-8">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Nome Completo</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">E-mail</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="border-t border-gray-200 pt-8">
                    <h3 class="text-lg font-bold text-slate-900 mb-4">Alterar Senha (Opcional)</h3>
                    <p class="text-sm text-slate-600 mb-6">Deixe em branco para manter a senha atual</p>

                    <div class="grid grid-cols-1 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Nova Senha</label>
                            <input type="password" name="password"
                                class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror">
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Confirmar Nova
                                Senha</label>
                            <input type="password" name="password_confirmation"
                                class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-4 mt-10">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl font-bold transition-all">
                    Atualizar Usuário
                </button>
                <a href="{{ route('admin.users.index') }}"
                    class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-8 py-3 rounded-xl font-bold transition-all">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection