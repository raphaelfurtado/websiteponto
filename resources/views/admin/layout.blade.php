<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - WebsitePonto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white p-6 hidden md:block">
            <div class="mb-10">
                <span class="text-xl font-bold uppercase tracking-tight">Admin Ponto</span>
            </div>
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}"
                    class="block px-4 py-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.dashboard') ? 'bg-primary text-white' : 'text-slate-400' }}">Dashboard</a>
                <a href="{{ route('admin.projects.index') }}"
                    class="block px-4 py-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.projects.*') ? 'bg-primary text-white' : 'text-slate-400' }}">Projetos</a>
                <a href="{{ route('admin.services.index') }}"
                    class="block px-4 py-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.services.*') ? 'bg-primary text-white' : 'text-slate-400' }}">Serviços</a>
                <a href="{{ route('admin.settings.index') }}"
                    class="block px-4 py-2 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.settings.*') ? 'bg-primary text-white' : 'text-slate-400' }}">Configurações</a>
                <div class="pt-10">
                    <a href="{{ route('home') }}" class="block px-4 py-2 text-sm text-slate-500 hover:text-white"
                        target="_blank">Ver Site</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <header class="bg-white border-b border-gray-200 p-6 flex items-center justify-between">
                <h2 class="text-xl font-bold">@yield('page_title', 'Painel')</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-500">Olá, Administrador</span>
                </div>
            </header>

            <div class="p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-xl">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('admin_content')
            </div>
        </main>
    </div>
</body>

</html>