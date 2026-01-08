<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        // Projects
        Project::create([
            'title' => 'Gestão Financeira Enterprise',
            'slug' => 'gestao-financeira-enterprise',
            'subtitle' => 'Um sistema web abrangente para controle de fluxo de caixa, faturamento e relatórios financeiros empresariais.',
            'challenge' => 'O cliente enfrentava dificuldades com a descentralização das informações financeiras, espalhadas por múltiplas planilhas do Excel sem validação de dados.',
            'solution' => 'Desenvolvemos uma arquitetura robusta baseada em microserviços para garantir escalabilidade. A interface foi desenhada com foco na usabilidade.',
            'technology' => 'React & Node.js',
            'duration' => '3 Meses',
            'role' => 'Full Stack',
            'client' => 'Setor Financeiro',
            'is_featured' => true,
            'order' => 1,
        ]);

        Project::create([
            'title' => 'Gestão de Condomínio Inteligente',
            'slug' => 'gestao-de-condominio-inteligente',
            'subtitle' => 'Um sistema completo de gestão para complexos residenciais. Simplifique tarefas administrativas e financeiras.',
            'challenge' => 'A administração de grandes condomínios enfrentava opacidade na comunicação e demora na resolução de chamados técnicos.',
            'solution' => 'Implementamos um portal centralizado com mural digital, área financeira transparente e sistema de tickets automatizado.',
            'technology' => 'PHP, SQL',
            'duration' => '4 Meses',
            'role' => 'Imobiliário',
            'client' => 'ForceHub',
            'is_featured' => true,
            'order' => 2,
        ]);

        // Services
        Service::create([
            'title' => 'Desenvolvimento Web',
            'description' => 'Landing pages de alta conversão e sites institucionais modernos.',
            'order' => 1,
        ]);
        Service::create([
            'title' => 'Sistemas Personalizados',
            'description' => 'Dashboards administrativos e ferramentas internas sob medida.',
            'order' => 2,
        ]);
        Service::create([
            'title' => 'Consultoria Tech',
            'description' => 'Refatoração de código legado e otimização de performance.',
            'order' => 3,
        ]);
    }
}
