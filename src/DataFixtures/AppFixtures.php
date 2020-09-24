<?php

namespace App\DataFixtures;

use App\Entity\Excursion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $a1 = new excursion();
        $a1->setnom("Excursion 3 Vallées")
            ->setPrixAdulte(15)
            ->setPrixEnfant(10)
            ->setImages("/photos/Excursion3Vallees.jpg")
            ->setPresentation("Ribatour cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
 

We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience."
    );
            $manager->persist($a1);
        $a2 = new Excursion();
        $a2->setNom("Nuit dans le désert")
            ->setPrixAdulte(20)
            ->setPrixEnfant(15)
            ->setImages("/photos/P220417001120.jpg")
            ->setPresentation("Ribatour cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
 

We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience."
            );
        $manager->persist($a2);

        $a3 = new Excursion();
        $a3->setNom("Green Fees 18 trous")
            ->setPrixAdulte(50)
            ->setPrixEnfant(30)
            ->setimages("/photos/P220417001130.jpg")
            ->setpresentation("Ribatour cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
 

We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience.Rttours cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience via a wide range of devices - mobiles, tablets and computers.
 
We use Bootstrap3 cutting edge technology- Upgrade your websites with the ability to change its appearance and layout, based on the screen size on which it is displayed. Our responsive website maker provides an optimal viewing experience."
            );
        $manager->persist($a3);

        $manager->flush();
    }
}
