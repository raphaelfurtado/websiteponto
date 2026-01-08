@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center overflow-hidden hero-gradient py-20">
        <div class="container mx-auto px-6 relative z-10 flex flex-col items-center text-center">
            <div class="max-w-4xl mx-auto">
                <div
                    class="inline-flex items-center space-x-2 bg-primary/10 border border-primary/20 px-4 py-2 rounded-full mb-8">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                    </span>
                    <span class="text-xs font-bold text-primary tracking-wider uppercase">Especialistas em Soluções Web
                        B2B</span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-tight font-display">
                    Transformamos ideias em <span class="text-gradient">sistemas robustos</span>.
                </h1>

                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Soluções digitais de alta performance para empresas que crescem. Desenvolvimento web, sistemas
                    personalizados e consultoria de software.
                </p>

                <div
                    class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0 sm:space-x-6 mb-20">
                    <a href="#contato"
                        class="w-full sm:w-auto bg-primary hover:bg-blue-600 text-white px-10 py-4 rounded-full font-bold transition-all hover:scale-105 hover:shadow-[0_0_30px_rgba(37,99,235,0.4)] text-center">
                        Iniciar Projeto
                    </a>
                    <a href="{{ route('portfolio.index') }}"
                        class="w-full sm:w-auto bg-white/5 hover:bg-white/10 border border-white/10 text-white px-10 py-4 rounded-full font-bold transition-all text-center">
                        Ver Portfólio
                    </a>
                </div>
            </div>

            <!-- Hero Stats -->
            <div
                class="w-full max-w-5xl grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12 border-t border-white/5 pt-12 text-center">
                <div class="flex flex-col items-center">
                    <span
                        class="block text-3xl md:text-5xl font-bold text-white mb-1 tracking-tighter font-display">+50</span>
                    <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-slate-500 font-bold">Projetos
                        Entregues</span>
                </div>
                <div class="flex flex-col items-center">
                    <span
                        class="block text-3xl md:text-5xl font-bold text-white mb-1 tracking-tighter font-display">98%</span>
                    <span
                        class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-slate-500 font-bold">Satisfação</span>
                </div>
                <div class="flex flex-col items-center">
                    <span
                        class="block text-3xl md:text-5xl font-bold text-white mb-1 tracking-tighter font-display">24/7</span>
                    <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-slate-500 font-bold">Suporte
                        Técnico</span>
                </div>
                <div class="flex flex-col items-center">
                    <span
                        class="block text-3xl md:text-5xl font-bold text-white mb-1 tracking-tighter font-display">10+</span>
                    <span class="text-[10px] md:text-xs uppercase tracking-[0.2em] text-slate-500 font-bold">Anos de
                        Mercado</span>
                </div>
            </div>
        </div>

        <!-- Background Decoration -->
        <div class="absolute top-1/2 right-0 -translate-y-1/2 w-1/2 h-full hidden lg:block opacity-20 pointer-events-none">
            <div class="w-full h-full bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.3)_0,transparent_70%)]"></div>
        </div>
    </section>

    <!-- Tech Stack -->
    <section class="py-16 border-y border-white/5 bg-slate-900/50">
        <div class="container mx-auto px-6">
            <div
                class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-40 grayscale hover:grayscale-0 transition-all duration-700">
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">JS</span>
                    <span class="text-sm font-bold text-white">JavaScript</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">HTML</span>
                    <span class="text-sm font-bold text-white">HTML5</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">CSS</span>
                    <span class="text-sm font-bold text-white">CSS3</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">SQL</span>
                    <span class="text-sm font-bold text-white">SQL</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">API</span>
                    <span class="text-sm font-bold text-white">RESTful</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">Cloud</span>
                    <span class="text-sm font-bold text-white">Cloud</span>
                </div>
                <div class="flex flex-col items-center">
                    <span class="text-[10px] font-bold uppercase tracking-[0.3em] mb-3 text-slate-500">Security</span>
                    <span class="text-sm font-bold text-white">Security</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="py-32">
        <div class="container mx-auto px-6 text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 font-display">Nossos Serviços</h2>
            <p class="text-slate-400 max-w-2xl mx-auto italic">Expertise técnica completa para alavancar seu negócio no
                ambiente digital.</p>
        </div>

        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div
                    class="group bg-slate-900/50 border border-white/5 p-10 rounded-3xl hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Desenvolvimento Web</h3>
                    <p class="text-slate-400 leading-relaxed">Landing pages de alta conversão e sites institucionais
                        modernos, otimizados para SEO e mobile-first.</p>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="group bg-slate-900/50 border border-white/5 p-10 rounded-3xl hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Sistemas Personalizados</h3>
                    <p class="text-slate-400 leading-relaxed">Dashboards administrativos, plataformas SaaS e ferramentas
                        internas desenvolvidas sob medida para sua regra de negócio.</p>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="group bg-slate-900/50 border border-white/5 p-10 rounded-3xl hover:border-primary/50 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4">Consultoria Tech</h3>
                    <p class="text-slate-400 leading-relaxed">Refatoração de código legado, otimização de performance e
                        consultoria em arquitetura de software escalável.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre" class="py-32 bg-slate-900/30 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="lg:w-1/2 relative">
                    <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1000"
                            alt="Equipe WebsitePonto" class="w-full h-auto">
                    </div>
                    <!-- Mini Badge -->
                    <div
                        class="absolute -bottom-6 -right-6 z-20 bg-primary p-6 rounded-2xl shadow-xl flex items-center space-x-4 animate-bounce-slow">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-white text-xs font-bold opacity-60">Desde 2014</span>
                            <span class="block text-white font-bold">Inovando a Web</span>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-8 font-display">Sobre Nós</h2>
                    <p class="text-primary font-bold mb-6">Nossa missão é entregar excelência técnica.</p>
                    <p class="text-slate-400 mb-8 leading-relaxed">
                        Na WebsitePonto, não apenas escrevemos código; construímos o futuro digital de empresas que buscam
                        liderar seus mercados. Combinamos design moderno com arquitetura robusta para criar soluções que
                        duram e escalam.
                    </p>
                    <p class="text-slate-400 mb-12">
                        Nossa equipe é formada por especialistas apaixonados por tecnologia, focados em resolver problemas
                        complexos com simplicidade e elegância.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-white">Metodologia Ágil</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-white">Código Limpo</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-white">Design Responsivo</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-white">Foco em Resultados</span>
                        </div>
                    </div>

                    <a href="#"
                        class="inline-flex items-center mt-12 text-primary font-bold hover:translate-x-2 transition-transform">
                        Conheça nossa história <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="py-32">
        <div class="container mx-auto px-6">
            <div
                class="bg-slate-900 border border-white/5 rounded-[3rem] overflow-hidden flex flex-col md:flex-row shadow-2xl">
                <div class="md:w-2/5 bg-primary p-12 md:p-20 flex flex-col justify-between">
                    <div>
                        <h2 class="text-4xl font-bold text-white mb-8 font-display">Vamos conversar?</h2>
                        <p class="text-white/80 mb-12">Preencha o formulário e nossa equipe entrará em contato em até 24
                            horas.</p>

                        <div class="space-y-8">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-white font-bold">E-mail</span>
                                    <span class="text-white/70">contato@websiteponto.com.br</span>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-white font-bold">Telefone</span>
                                    <span class="text-white/70">(11) 99999-8888</span>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-white font-bold">Localização</span>
                                    <span class="text-white/70">São Paulo, SP - Brasil</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4 mt-12">
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white/10 transition-all text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white/10 transition-all text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="md:w-3/5 p-12 md:p-20">
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
                        @csrf
                        <div class="space-y-2">
                            <label for="name"
                                class="text-xs font-bold uppercase tracking-widest text-slate-500">Nome</label>
                            <input type="text" id="name" name="name" required placeholder="Seu nome completo"
                                class="w-full bg-transparent border-b border-white/10 py-4 focus:border-primary focus:outline-none transition-colors text-white">
                        </div>
                        <div class="space-y-2">
                            <label for="email"
                                class="text-xs font-bold uppercase tracking-widest text-slate-500">E-mail</label>
                            <input type="email" id="email" name="email" required placeholder="seu@email.com"
                                class="w-full bg-transparent border-b border-white/10 py-4 focus:border-primary focus:outline-none transition-colors text-white">
                        </div>
                        <div class="space-y-2">
                            <label for="message"
                                class="text-xs font-bold uppercase tracking-widest text-slate-500">Mensagem</label>
                            <textarea id="message" name="message" required rows="4" placeholder="Conte sobre seu projeto..."
                                class="w-full bg-transparent border-b border-white/10 py-4 focus:border-primary focus:outline-none transition-colors text-white resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="group relative w-full bg-primary hover:bg-blue-600 text-white py-5 rounded-2xl font-bold transition-all flex items-center justify-center space-x-3">
                            <span>Enviar Mensagem</span>
                            <svg class="w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <style>
        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-bounce-slow {
            animation: bounce-slow 3s infinite ease-in-out;
        }
    </style>
@endsection