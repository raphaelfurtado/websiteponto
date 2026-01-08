@extends('layouts.app')

@section('title', $project->title . ' - WebsitePonto')

@section('content')
    <!-- Project Hero -->
    <section class="relative py-20 overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <nav class="flex items-center space-x-2 text-xs font-bold uppercase tracking-widest text-slate-500 mb-12">
                <a href="{{ route('home') }}" class="hover:text-primary">Home</a>
                <span>/</span>
                <a href="{{ route('portfolio.index') }}" class="hover:text-primary">Portfólio</a>
                <span>/</span>
                <span class="text-white">{{ $project->title }}</span>
            </nav>

            <div class="flex flex-col lg:flex-row items-start gap-16">
                <div class="lg:w-1/2">
                    <div
                        class="inline-flex items-center space-x-2 bg-primary/10 border border-primary/20 px-4 py-2 rounded-full mb-8">
                        <span class="w-2 h-2 rounded-full bg-primary"></span>
                        <span class="text-xs font-bold text-primary tracking-wider uppercase">Projeto Destaque</span>
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight font-display">
                        {{ $project->title }}</h1>
                    <p class="text-xl text-slate-400 mb-12 leading-relaxed">{{ $project->subtitle }}</p>

                    <div class="flex flex-wrap gap-4 mb-16">
                        <a href="#"
                            class="bg-primary hover:bg-blue-600 text-white px-8 py-4 rounded-full font-bold transition-all flex items-center shadow-[0_0_20px_rgba(37,99,235,0.3)]">
                            Acessar Projeto ao Vivo
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-white/5 hover:bg-white/10 border border-white/10 text-white px-8 py-4 rounded-full font-bold transition-all flex items-center">
                            Ver Case Study
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </a>
                    </div>

                    <!-- Info Grid -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 py-10 border-t border-white/5">
                        <div>
                            <span
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Tecnologia</span>
                            <span class="text-sm font-bold text-white">{{ $project->technology ?? 'PHP & Laravel' }}</span>
                        </div>
                        <div>
                            <span
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Duração</span>
                            <span class="text-sm font-bold text-white">{{ $project->duration ?? '2 Meses' }}</span>
                        </div>
                        <div>
                            <span
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Função</span>
                            <span class="text-sm font-bold text-white">{{ $project->role ?? 'Full Stack' }}</span>
                        </div>
                        <div>
                            <span
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2">Cliente</span>
                            <span class="text-sm font-bold text-white">{{ $project->client ?? 'Empresa' }}</span>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="rounded-3xl overflow-hidden shadow-2xl border border-white/5 bg-slate-900/50 p-2">
                        <img src="{{ $project->thumbnail ?? 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=1200' }}"
                            alt="{{ $project->title }}" class="w-full h-auto rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenge & Solution -->
    <section class="py-32 bg-slate-950">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <div>
                    <div class="mb-16">
                        <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">O Desafio</span>
                        <h2 class="text-4xl font-bold text-white mb-8 font-display">
                            {{ $project->title_challenge ?? 'Transformar problemas em soluções.' }}</h2>
                        <p class="text-slate-400 leading-relaxed text-lg">{{ $project->challenge }}</p>
                    </div>

                    <div>
                        <span class="text-green-500 font-bold uppercase tracking-widest text-xs mb-4 block">A Solução</span>
                        <p class="text-slate-400 leading-relaxed text-lg">{{ $project->solution }}</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Highlight Cards -->
                    <div
                        class="bg-slate-900/50 border border-white/5 p-8 rounded-3xl group hover:border-primary/30 transition-all">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">Interface Intuitiva</h4>
                        <p class="text-slate-500 text-sm">Foco total na usabilidade para maximizar a produtividade dos
                            usuários.</p>
                    </div>
                    <div
                        class="bg-slate-900/50 border border-white/5 p-8 rounded-3xl group hover:border-primary/30 transition-all">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mb-6 text-primary">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-white mb-2">Segurança Robusta</h4>
                        <p class="text-slate-500 text-sm">Criptografia de ponta a ponta e backups automáticos integrados.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- System Visualization -->
    <section class="py-32">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-white mb-4 font-display text-center">Visualização do Sistema</h2>
            <p class="text-slate-500 text-center mb-20 italic">Telas principais da aplicação em alta definição.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $gallery = json_decode($project->images ?? '[]') ?: [
                        'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800',
                        'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=800',
                        'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&q=80&w=800'
                    ];
                @endphp

                @foreach($gallery as $img)
                    <div
                        class="rounded-3xl overflow-hidden border border-white/5 shadow-xl transition-transform hover:scale-[1.02]">
                        <img src="{{ $img }}" alt="Tela do Sistema" class="w-full h-auto">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Next Project CTA -->
    <section class="py-32 border-t border-white/5 bg-slate-900/20">
        <div class="container mx-auto px-6 text-center">
            <span class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-4 block">Próximo Projeto</span>
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-12 font-display">E-commerce de Alta Performance</h2>
            <div class="flex justify-center space-x-4">
                <a href="#"
                    class="bg-white/5 border border-white/10 text-white px-10 py-4 rounded-full font-bold hover:bg-white/10 transition-all">Projeto
                    Anterior</a>
                <a href="#"
                    class="bg-primary text-white px-10 py-4 rounded-full font-bold hover:bg-blue-600 transition-all">Ver
                    Próximo Caso</a>
            </div>
        </div>
    </section>
@endsection