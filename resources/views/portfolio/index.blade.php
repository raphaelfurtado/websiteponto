@extends('layouts.app')

@section('title', 'Portfólio - WebsitePonto')

@section('content')
    <section class="py-20 bg-slate-900/50">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mb-16">
                <span class="text-primary font-bold uppercase tracking-widest text-xs mb-4 block">Portfólio
                    Selecionado</span>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-8 font-display">Transformando ideias complexas em
                    <span class="text-gradient">sistemas robustos</span>.</h1>
                <p class="text-xl text-slate-400">Confira uma seleção dos nossos projetos mais recentes, desenvolvidos com
                    foco em performance, escalabilidade e experiência do usuário.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @forelse($projects as $project)
                    <a href="{{ route('portfolio.show', $project->slug) }}"
                        class="group block relative overflow-hidden rounded-[2.5rem] bg-slate-900 border border-white/5 transition-all duration-500 hover:border-primary/50">
                        <div class="aspect-video overflow-hidden">
                            <img src="{{ $project->thumbnail ?? 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800' }}"
                                alt="{{ $project->title }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-90">
                            </div>
                        </div>

                        <div class="absolute bottom-0 left-0 right-0 p-10">
                            <span
                                class="inline-block bg-primary/20 backdrop-blur-md border border-primary/30 text-primary text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full mb-4">{{ $project->client ?? 'Logística' }}</span>
                            <h3 class="text-2xl font-bold text-white mb-2">{{ $project->title }}</h3>
                            <p class="text-slate-400 text-sm mb-6 line-clamp-2 max-w-sm">{{ $project->subtitle }}</p>
                            <div class="flex items-center text-primary font-bold text-sm">
                                <span>Ver detalhes do projeto</span>
                                <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </a>
                @empty
                    <!-- Demo Projects if empty -->
                    <div class="md:col-span-2 py-20 text-center">
                        <p class="text-slate-500">Nenhum projeto cadastrado no momento. Acesse o admin para adicionar.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-32 bg-dark">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto bg-slate-900/50 border border-white/5 p-16 md:p-24 rounded-[3rem] shadow-3xl">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 font-display">Pronto para transformar seu negócio?
                </h2>
                <p class="text-slate-400 text-lg mb-12">Vamos criar a solução digital ideal para a sua empresa. Da concepção
                    ao lançamento.</p>
                <a href="{{ route('home') }}#contato"
                    class="inline-flex items-center bg-primary hover:bg-blue-600 text-white px-10 py-5 rounded-2xl font-bold transition-all hover:scale-105 shadow-[0_0_30px_rgba(37,99,235,0.3)]">
                    <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    Falar com um especialista
                </a>
            </div>
        </div>
    </section>
@endsection