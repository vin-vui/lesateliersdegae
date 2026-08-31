<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

/**
 * Contenu de la table events, reconstitué pour la migration de serveur.
 *
 * Aucun export SQL n'étant disponible, les deux ateliers ci-dessous ont été
 * extraits du rendu public de la page d'accueil (section "Agenda des ateliers",
 * voir resources/views/home/welcome/_next.blade.php). Ils étaient visibles en
 * ligne du 18 janvier au 14 juin 2026, puis ont disparu du site. Ils sont donc
 * insérés avec is_published à false, ce qui reproduit l'état actuel du site.
 *
 * Ce seeder ne gère pas les fichiers image. Les deux fichiers attendus sont à
 * déposer manuellement dans storage/app/public/events/ :
 *   - DnOQix2OauAMcPCzO68np89s2obzXXG5ZUpoGIJA.jpg
 *   - qqiwSOEaNlSK7fz6tKKasjWgZGBrApJrioBIbxxH.jpg
 * Les deux fichiers de l'ancien serveur étaient byte-identiques (md5
 * e17b0e3dc2a8a53abc508e79d0e88cd8). Ne pas oublier php artisan storage:link.
 *
 * La colonne image stocke une URL absolue, comme le fait EventController.
 * asset() la reconstruit donc à partir de l'APP_URL du nouveau serveur.
 */
class EventSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->events() as $attributes) {
            Event::updateOrCreate(
                ['name' => $attributes['name']],
                $attributes,
            );
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function events(): array
    {
        return [
            [
                'name' => 'Atelier mandala et écriture créative : l\'hiver en conscience',
                'description' => <<<'TXT'
                Un cocon d’hiver tout en légèreté,
                où l’on laisse fleurir créativité et harmonie intérieure.

                Colorier un dessin centré / mandala*, en pleine conscience, comme une méditation en couleurs. Tester, ressentir, écouter… avec un large choix de matériel créatif à disposition, pour éveiller les sens et apaiser l’esprit.

                Puis, au fil de l’instant, les mots s’invitent : vous serez guidés avec douceur par des jeux d’écriture simples et ludiques.
                Écrire pour se faire du bien, pour s’exprimer, pour libérer ce qui demande à être entendu. Dans un cadre chaleureux et bienveillant - où l’on prend soin de soi, en toute simplicité.

                Une parenthèse de créativité et de bien-être à partager.
                Une approche ludique, sans attente de performance - juste le plaisir d’explorer.

                Le mandala*, forme universelle et apaisante, s’organise autour d’un centre. Présente partout dans la nature, cette géométrie évoque l’harmonie et l’équilibre.
                TXT,
                'date' => 'Jeudi 11 décembre - De 14h30 à 17h30',
                'price' => '55€',
                'location' => 'Espace Inua, 1 chemin des grands bas',
                'location_url' => null,
                'external_url' => null,
                'external_url_title' => null,
                'image' => asset('storage/events/DnOQix2OauAMcPCzO68np89s2obzXXG5ZUpoGIJA.jpg'),
                'image_alt' => 'Affiche atelier',
                'is_published' => false,
            ],
            [
                'name' => 'Atelier mandala et écriture intuitive : le printemps en mouvement',
                'description' => <<<'TXT'
                Un cocon printanier tout en légèreté,
                où l’on laisse fleurir créativité et harmonie intérieure.

                Colorier un dessin centré / mandala*, en pleine conscience, comme une méditation en couleurs. Tester, ressentir, écouter… avec un large choix de matériel créatif à disposition, pour éveiller les sens et apaiser l’esprit.

                Puis, au fil de l’instant, les mots s’invitent : vous serez guidés avec douceur par des jeux d’écriture simples et ludiques.
                Écrire pour se faire du bien, pour s’exprimer, pour libérer ce qui demande à être entendu. Dans un cadre chaleureux et bienveillant - où l’on prend soin de soi, en toute simplicité.

                Une parenthèse de créativité et de bien-être à partager.
                Une approche ludique, sans attente de performance - juste le plaisir d’explorer.

                Le mandala*, forme universelle et apaisante, s’organise autour d’un centre. Présente partout dans la nature, cette géométrie évoque l’harmonie et l’équilibre.
                TXT,
                'date' => '19 mars de 14h30 à 17h30',
                'price' => '55€',
                'location' => '1 chemin des Grands Bas',
                'location_url' => null,
                'external_url' => null,
                'external_url_title' => null,
                'image' => asset('storage/events/qqiwSOEaNlSK7fz6tKKasjWgZGBrApJrioBIbxxH.jpg'),
                'image_alt' => 'atelier Gaë',
                'is_published' => false,
            ],
        ];
    }
}
