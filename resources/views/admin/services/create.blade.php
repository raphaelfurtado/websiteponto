@extends('admin.layout')
@section('page_title', 'Novo Serviço')

@section('content')
    <div class="max-w-4xl bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="space-y-6 mb-8">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Título</label>
                    <input type="text" name="title" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Descrição</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3"></textarea>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Ordem</label>
                    <input type="number" name="order" value="0"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                </div>
            </div>
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold">Criar Serviço</button>
                <a href="{{ route('admin.services.index') }}"
                    class="bg-gray-100 text-gray-600 px-8 py-4 rounded-2xl font-bold">Cancelar</a>
            </div>
        </form>
    </div>
@endsection