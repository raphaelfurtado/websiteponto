@extends('admin.layout')
@section('page_title', 'Dashboard')

@section('admin_content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <span class="text-xs font-bold uppercase tracking-widest text-gray-400 block mb-2">Total de Projetos</span>
            <span class="text-4xl font-bold text-gray-900">{{ $stats['projects'] }}</span>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <span class="text-xs font-bold uppercase tracking-widest text-gray-400 block mb-2">Serviços Ativos</span>
            <span class="text-4xl font-bold text-gray-900">{{ $stats['services'] }}</span>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
            <span class="text-xs font-bold uppercase tracking-widest text-gray-400 block mb-2">Mensagens Pendentes</span>
            <span class="text-4xl font-bold text-gray-900">{{ $stats['unread_messages'] }}</span>
        </div>
    </div>

    <div class="mt-12 bg-blue-600 rounded-3xl p-12 text-white relative overflow-hidden">
        <div class="relative z-10">
            <h3 class="text-3xl font-bold mb-4">Bem-vindo ao Painel!</h3>
            <p class="text-blue-100 max-w-lg mb-8">Aqui você pode gerenciar todo o conteúdo do seu site. Adicione novos
                cases, atualize seus serviços e responda aos seus cliantes.</p>
            <div class="flex space-x-4">
                <a href="{{ route('admin.projects.create') }}"
                    class="bg-white text-blue-600 px-6 py-3 rounded-xl font-bold">Novo Projeto</a>
                <a href="{{ route('home') }}" class="bg-blue-700 text-white px-6 py-3 rounded-xl font-bold"
                    target="_blank">Ver Site</a>
            </div>
        </div>
        <!-- Decor -->
        <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
    </div>
@endsection