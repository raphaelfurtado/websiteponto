@extends('admin.layout')
@section('page_title', 'Configurações')

@section('admin_content')
    <div class="max-w-4xl bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="space-y-8 mb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Logo do Site</label>
                        <input type="file" name="site_logo"
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                        @if(isset($settings['site_logo']))
                            <div class="mt-2 p-4 bg-gray-900 rounded-xl inline-block">
                                <img src="{{ asset('storage/' . $settings['site_logo']) }}" class="h-8 w-auto" alt="Logo Atual">
                            </div>
                        @endif
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Favicon (Ícone da
                            Aba)</label>
                        <input type="file" name="site_favicon"
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                        @if(isset($settings['site_favicon']))
                            <div class="mt-2 p-2 bg-gray-100 rounded-lg inline-block">
                                <img src="{{ asset('storage/' . $settings['site_favicon']) }}" class="h-8 w-8"
                                    alt="Favicon Atual">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Título do Site</label>
                    <input type="text" name="site_title" value="{{ $settings['site_title'] ?? 'WebsitePonto' }}"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Descrição do Rodapé</label>
                    <textarea name="footer_description" rows="3"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">{{ $settings['footer_description'] ?? 'Transformamos ideias em sistemas robustos.' }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">E-mail de Contato</label>
                        <input type="email" name="contact_email"
                            value="{{ $settings['contact_email'] ?? 'contato@websiteponto.com.br' }}"
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Telefone</label>
                        <input type="text" name="contact_phone"
                            value="{{ $settings['contact_phone'] ?? '(11) 99999-8888' }}"
                            class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                    </div>
                </div>
            </div>

            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-10 py-4 rounded-2xl font-bold transition-all">Salvar
                Configurações</button>
        </form>
    </div>
@endsection