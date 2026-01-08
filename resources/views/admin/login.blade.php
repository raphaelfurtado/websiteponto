<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - WebsitePonto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-950 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full p-8 bg-gray-900 rounded-3xl border border-white/10 shadow-2xl">
        <h1 class="text-3xl font-bold text-white mb-8 text-center">Acesso Restrito</h1>

        @if(session('error'))
            <div class="bg-red-500/10 border border-red-500/20 text-red-500 p-4 rounded-xl mb-6 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">E-mail</label>
                <input type="email" name="email" required
                    class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-gray-400 mb-2">Senha</label>
                <input type="password" name="password" required
                    class="w-full bg-black/50 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl transition-all">Entrar
                no Painel</button>
        </form>
    </div>
</body>

</html>