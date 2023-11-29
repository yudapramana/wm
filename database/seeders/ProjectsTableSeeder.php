<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [
            [
                'project_name' => 'KemenagPessel - PTSP',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://ptsp.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - DATUAK',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://datuak.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - MTQ',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://mtq.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - PPID',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://ppid.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - HAJI',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://haji.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - Agenda',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://agenda.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - SIKM',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://sikm.kemenagpessel.com'
            ],
            [
                'project_name' => 'KemenagPessel - Simbutu',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://simbutu.kemenagpessel.com'
            ],
            [
                'project_name' => 'Pandanviewmandeh',
                'project_icon_url' => 'https://pandanviewmandeh.com/sailor/img/favicon_io/favicon-32x32.png',
                'project_link' => 'https://pandanviewmandeh.com'
            ],
            [
                'project_name' => 'SumbarKemenag - Berita',
                'project_icon_url' => 'https://ppid.kemenagpessel.com/assets/images/logo/logo-kemenag.png',
                'project_link' => 'https://sumbar.kemenag.go.id/berita'
            ],
            [
                'project_name' => 'SMA3Painan - Agenda',
                'project_icon_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1700714219/PandanViewMandeh/logo_sma3painanopacity_j4yyfh.png',
                'project_link' => 'https://e-agenda.sma3painan.sch.id'
            ],
            [
                'project_name' => 'SMA3Painan - SIKM',
                'project_icon_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1700714219/PandanViewMandeh/logo_sma3painanopacity_j4yyfh.png',
                'project_link' => 'https://sikm.sma3painan.sch.id'
            ],
            [
                'project_name' => 'SMA3Painan - Simbutu',
                'project_icon_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1700714219/PandanViewMandeh/logo_sma3painanopacity_j4yyfh.png',
                'project_link' => 'https://bukutamu.sma3painan.sch.id'
            ]
        ];

        foreach ($data as $key => $item) {
            \App\Models\Project::firstOrCreate(
                ['project_name' => $item['project_name']],
                $item
            );
        }
    }
}
