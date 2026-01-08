@extends('admin.layout')
@section('page_title', 'Lista de Projetos')

@section('admin_content')
    <div class="mb-8 flex justify-between items-center">
        <p class="text-gray-500">Gerencie os projetos exibidos no portfólio.</p>
        <a href="{{ route('admin.projects.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-bold transition-all">Novo Projeto</a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-50 border-b border-gray-100">
                <tr>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Título</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Cliente</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400">Destaque</th>
                    <th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-gray-400 text-right">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @foreach($projects as $project)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-8 rounded bg-gray-200 overflow-hidden shrink-0">
                                    @if($project->thumbnail)
                                        <img src="{{ $project->thumbnail }}" class="w-full h-full object-cover">
                                    @endif
                                </div>
                                <span class="font-bold text-gray-900">{{ $project->title }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-600">{{ $project->client }}</td>
                        <td class="px-6 py-4">
                            @if($project->is_featured)
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-bold rounded-full">Sim</span>
                            @else
                                <span class="px-3 py-1 bg-gray-100 text-gray-400 text-xs font-bold rounded-full">Não</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end space-x-2">
                                <a href="{{ route('admin.projects.edit', $project) }}"
                                    class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                    onsubmit="return confirm('Tem certeza?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection