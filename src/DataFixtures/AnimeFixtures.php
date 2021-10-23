<?php

namespace App\DataFixtures;

use App\Entity\Anime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $abc = range('A','Z');
        array_unshift($abc, '[0-9]');
        

       for($a=0; $a<= count($abc)-1; $a++)
       {
             $html = file_get_html('http://www.anime-kun.net/animes/animedb-'.$abc[$a].'.html');

            $title = $html->find('title', 0)->plaintext;
            $title = str_replace(' | Anime-Kun', '', $title);

            $head = $html->find('a[title]');
            $year=$html->find('td[class=annee]');
            $format = $html->find('td[class=format]');
            $nbEp =$html->find('td[class=nbep]');

            for($i = 0 ; $i <= count($head)-17; $i++)
            {
                $anime = new Anime();

               
              
         
                    $anime->setTitle($head[$i]->plaintext)  
                        ->setReleaseDate($year[$i]->plaintext)
                        ->setFormat($format[$i]->plaintext)
                        ->setNbEp($nbEp[$i]->plaintext);
                    

                    $manager->persist($anime);
             
                    $manager->flush();
            }

       }

      

     
    }
}
