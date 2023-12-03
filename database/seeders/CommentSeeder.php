<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{

    private $list = ["Le Tartuffe ou l'Imposteur est une comédie de Molière datant de 1664. Elle fut présentée pour la première fois à Versailles le 12 mai 1664 à l'occasion de la fête des Plaisirs de l'Île enchantée. Elle fut ensuite interdite car considérée comme insultante envers la religion, puis on leva l'interdiction le 5 février 1669. C'est une comédie en cinq actes, dans laquelle Orgon est un bourgeois fortuné et charitable qui recueille Tartuffe, un soi-disant homme d'Église qu'il admire. Mais ce dernier est en réalité un imposteur qui n'en veut qu'à la fortune de son hôte, lequel se laisse piteusement tromper et abuser.", "Un braqueur de banque fait une folie. Un homme avoue un meurtre qu'il n'a pas commis. Un gangster torture son complice. Le meurtre parfait est tenté par deux adolescents. Ce ne sont là que quelques-uns des cas – faits et fictions, peu connus et légendaires – qu'Alix Lambert explore dans son enquête sur la nature du crime, à la fois réel et imaginaire.
    ", "Le père de Dantzig Baldaev était un universitaire et un ethnologue qui s'est retrouvé emprisonné sous le régime soviétique comme ennemi du peuple. En fait, une grande partie de la famille de Baldaev a traversé le système carcéral soviétique, tandis qu'il est devenu gardien. À la suggestion de son père, Dantzig a utilisé son accès pour documenter et étudier les tatouages ​​​​qui étaient omniprésents parmi la partie véritablement criminelle de la population carcérale, les vory v zakonye, ​​ou voleurs légitimes, une classe semi-professionnelle qui observait ses propres lois brutales.", " Les Guignols de l'info est une émission de télévision satirique française de marionnettes, diffusée entre le 29 août 1988 et le 22 juin 2018 sur Canal+ en clair. Parodie de journal télévisé, l’émission est une caricature du monde politique, des médias, des personnalités ou plus généralement de la société française et du monde actuel.", "Ce livre est dédié aux chiens qui ont joué un rôle crucial dans le succès du premier programme spatial soviétique. Tous autrefois sans abri dans les rues de Moscou, ils avaient le profil requis : petits, robustes, placides et capables de résister aux préparatifs éprouvants du vol spatial. Ils étaient également photogéniques.", "Les Misérables est un roman de Victor Hugo publié en 1862, l’un des plus vastes1 et des plus notables de la littérature du xixe siècle2. Il décrit la vie de pauvres gens dans Paris et la France provinciale du premier tiers du xixe siècle, l’auteur s'attachant plus particulièrement au destin du bagnard Jean Valjean ; il a donné lieu à de nombreuses adaptations, au cinéma et sur d’autres supports.", " Bel-Ami est un roman réaliste de Guy de Maupassant (1850-1893), publié en 1885. Le roman paraît d'abord sous forme de feuilleton dans le quotidien Gil Blas, avant d'être édité en volume aux éditions Victor Havard. Les éditions Ollendorff publieront la première édition illustrée en 1895. L'action du récit se déroule à Paris pendant la seconde moitié du xixe siècle.", "Le Corbeau et le Renard est la deuxième fable du Livre I des Fables de La Fontaine situé dans le premier recueil des Fables, édité pour la première fois en 16681. Il existe deux sources à cette fable : la version d’Ésope (« Le Corbeau et le Renard ») et celle du fabuliste latin Phèdre (Macédoine - 10 av. J.-C. - vers 54 apr. J.-C., auteur de vingt-trois fables imitées d’Esope). La version de Phèdre (Livre I, 13) a été traduite en français par Sacy en 1647.", "Il faut sachez que, bien sûr que oui. Je pensais pas m'attacher sur des personnes, avec ton habit de panthère là."];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->list as $comment) {
            Comment::factory()->create([
                'comment' => $comment
            ]);
        }
    }
}
