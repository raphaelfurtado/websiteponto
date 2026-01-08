<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', $siteSettings['site_title'] ?? 'WebsitePonto - Transformamos ideias em sistemas robustos')</title>
    @if(isset($siteSettings['site_favicon']))
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $siteSettings['site_favicon']) }}">
    @endif
    <meta name="description"
        content="@yield('meta_description', $siteSettings['footer_description'] ?? 'Soluções digitais de alta performance para empresas que crescem.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#1e293b',
                        dark: '#0f172a',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        .glass {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hero-gradient {
            background: radial-gradient(circle at top left, rgba(37, 99, 235, 0.15), transparent 40%),
                radial-gradient(circle at bottom right, rgba(37, 99, 235, 0.1), transparent 40%);
        }

        .text-gradient {
            background: linear-gradient(to right, #60a5fa, #2563eb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        [v-cloak] {
            display: none;
        }
    </style>
    @yield('styles')
</head>

<body class="bg-dark text-slate-300 font-sans selection:bg-primary selection:text-white">

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 glass">
        <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                @if(isset($siteSettings['site_logo']))
                    <img src="{{ asset('storage/' . $siteSettings['site_logo']) }}" class="h-8 w-auto" alt="{{ $siteSettings['site_title'] ?? 'WebsitePonto' }}">
                @else
                    <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                @endif
                <span class="text-xl font-bold text-white tracking-tight uppercase font-display">{{ $siteSettings['site_title'] ?? 'WebsitePonto' }}</span>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}#servicos"
                    class="text-sm font-medium hover:text-white transition-colors">Serviços</a>
                <a href="{{ route('home') }}#sobre"
                    class="text-sm font-medium hover:text-white transition-colors">Sobre</a>
                <a href="{{ route('portfolio.index') }}"
                    class="text-sm font-medium hover:text-white transition-colors">Portfólio</a>
                <a href="{{ route('home') }}#contato"
                    class="text-sm font-medium hover:text-white transition-colors">Contato</a>
                <a href="{{ route('home') }}#contato"
                    class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold transition-all hover:shadow-[0_0_20px_rgba(37,99,235,0.4)]">Orçamento</a>
            </div>

            <button class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-white/5 py-12 mt-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <a href="#" class="flex items-center space-x-2 mb-6">
                        @if(isset($siteSettings['site_logo']))
                            <img src="{{ asset('storage/' . $siteSettings['site_logo']) }}" class="h-8 w-auto" alt="{{ $siteSettings['site_title'] ?? 'WebsitePonto' }}">
                        @else
                            <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        @endif
                        <span
                            class="text-xl font-bold text-white tracking-tight uppercase font-display">{{ $siteSettings['site_title'] ?? 'WebsitePonto' }}</span>
                    </a>
                    <p class="text-slate-400 max-w-sm">{{ $siteSettings['footer_description'] ?? 'Transformamos ideias em sistemas robustos. Soluções digitais de alta performance para empresas que buscam excelência técnica.' }}</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Links Rápidos</h4>
                    <ul class="space-y-4 text-sm">
                        <li><a href="{{ route('portfolio.index') }}"
                                class="hover:text-white transition-colors">Portfólio</a></li>
                        <li><a href="#servicos" class="hover:text-white transition-colors">Serviços</a></li>
                        <li><a href="#sobre" class="hover:text-white transition-colors">Sobre Nós</a></li>
                        <li><a href="#contato" class="hover:text-white transition-colors">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Social</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all text-slate-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all text-slate-400 hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                <p>&copy; {{ date('Y') }} {{ $siteSettings['site_title'] ?? 'WebsitePonto' }}. Todos os direitos reservados.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Privacidade</a>
                    <a href="#" class="hover:text-white">Termos</a>
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>

</html>