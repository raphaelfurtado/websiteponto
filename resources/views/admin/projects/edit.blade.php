@extends('admin.layout')
@section('page_title', 'Editar Projeto')

@section('admin_content')
    <div class="max-w-4xl bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Título</label>
                    <input type="text" name="title" value="{{ $project->title }}" required
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Cliente</label>
                    <input type="text" name="client" value="{{ $project->client }}"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>
                <div class="col-span-full space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Subtítulo / Breve
                        Descrição</label>
                    <input type="text" name="subtitle" value="{{ $project->subtitle }}"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Tecnologia</label>
                    <input type="text" name="technology" value="{{ $project->technology }}"
                        placeholder="ex: React & Node.js"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Duração</label>
                    <input type="text" name="duration" value="{{ $project->duration }}" placeholder="ex: 3 Meses"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">
                </div>

                <div class="col-span-full space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Desafio</label>
                    <textarea name="challenge" rows="4"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">{{ $project->challenge }}</textarea>
                </div>
                <div class="col-span-full space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Solução</label>
                    <textarea name="solution" rows="4"
                        class="w-full bg-gray-50 border border-gray-100 rounded-xl px-4 py-3 focus:outline-none focus:border-blue-500">{{ $project->solution }}</textarea>
                </div>

                <div class="col-span-full space-y-2">
                    <label class="text-xs font-bold uppercase tracking-widest text-gray-400">Thumbnail (Imagem
                        Principal)</label>
                    <input type="file" name="thumbnail_file" class="w-full">
                    @if($project->thumbnail)
                        <div class="mt-2 w-32 h-20 rounded overflow-hidden border">
                            <img src="{{ Str::startsWith($project->thumbnail, 'http') ? $project->thumbnail : asset('storage/' . $project->thumbnail) }}"
                                class="w-full h-full object-cover">
                        </div>
                    @endif
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" name="is_featured" value="1" {{ $project->is_featured ? 'checked' : '' }}
                        class="w-5 h-5 text-blue-600 rounded">
                    <label class="text-sm font-bold text-gray-700">Projeto em Destaque</label>
                </div>
            </div>

            <div class="flex space-x-4">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-2xl font-bold transition-all">Salvar
                    Alterações</button>
                <a href="{{ route('admin.projects.index') }}"
                    class="bg-gray-100 hover:bg-gray-200 text-gray-600 px-8 py-4 rounded-2xl font-bold transition-all">Cancelar</a>
            </div>
        </form>
    </div>
@endsection