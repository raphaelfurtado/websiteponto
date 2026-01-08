@extends('admin.layout')
@section('page_title', 'Editar Serviço')

@section('content')
    <div class="max-w-4xl bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.services.update', $service) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-6 mb-8">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Título</label>
                    <input type="text" name="title" value="{{ $service->title }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Descrição</label>
                    <textarea name="description" rows="4"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">{{ $service->description }}</textarea>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Ordem</label>
                    <input type="number" name="order" value="{{ $service->order }}"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3">
                </div>
            </div>
            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold">Salvar
                    Alterações</button>
                <a href="{{ route('admin.services.index') }}"
                    class="bg-gray-100 text-gray-600 px-8 py-4 rounded-2xl font-bold">Cancelar</a>
            </div>
        </form>
    </div>
@endsection