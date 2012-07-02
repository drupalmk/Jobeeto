<?php 

namespace WSAD\JobsBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use WSAD\JobsBundle\Entity\Category;
use WSAD\JobsBundle\Entity\Job;

class JobsFixture implements FixtureInterface
{
    public function load(ObjectManager $em)
    {
		$design = new Category();
        $design->setName('Design');

        $programming = new Category();
        $programming->setName('Programming');

        $manager = new Category();
        $manager->setName('Manager');

        $administrator = new Category();
        $administrator->setName('Administrator');

        $em->persist($design);
        $em->persist($programming);
        $em->persist($manager);
        $em->persist($administrator);

        $sensio = new Job();
        $sensio->setCategory($programming);
        $sensio->setType('full-time');
        $sensio->setCompany('Sensio Labs');
        $sensio->setLogo('sensio-labs.gif');
        $sensio->setUrl('http://www.sensiolabs.com/');
        $sensio->setPosition('Web Developer');
        $sensio->setLocation('Paris, France');
        $sensio->setDescription("You've already developed websites with symfony and you want to work with Open-Source technologies. You have a minimum of 3 years experience in web development with PHP or Java and you wish to participate to development of Web 2.0 sites using the best frameworks available.");
        $sensio->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $sensio->setIsPublic(true);
        $sensio->setIsActivated(true);
        $sensio->setEmail('job@example.com');
        $sensio->setExpiresAt(new \DateTime('2012-10-10'));

        $extreme = new Job();
        $extreme->setCategory($design);
        $extreme->setType('part-time');
        $extreme->setCompany('Extreme Sensio');
        $extreme->setLogo('extreme-sensio.gif');
        $extreme->setUrl('http://www.extreme-sensio.com/');
        $extreme->setPosition('Web Designer');
        $extreme->setLocation('Paris, France');
        $extreme->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.

        Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");
        $extreme->setHowToApply('Send your resume to fabien.potencier [at] sensio.com');
        $extreme->setIsPublic(true);
        $extreme->setIsActivated(true);
        $extreme->setEmail('job@example.com');
        $extreme->setExpiresAt(new \DateTime('2012-10-10'));

        $em->persist($sensio);
        $em->persist($extreme);

     
        for ($i = 0; $i < 20; $i++) {
        	$job = new Job();
        	$job->setCategory($programming);
        	$job->setType('full-time');
        	$job->setCompany('Company'.$i);
        	$job->setPosition('Web Developer '.$i);
        	$job->setLocation('City '.$i.', Country '.$i);
            $job->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in. Voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');
            $job->setHowToApply('Aliquam erat volutpat. Curabitur cursus iaculis dolor, sit amet lacinia velit venenatis ac. Vestibulum vulputate, nunc non mattis luctus, diam quam imperdiet ante, vitae semper lectus nisl consectetur leo. Suspendisse placerat, sem dictum pharetra adipiscing, augue odio dictum tellus, vel elementum erat leo sed lectus.');
        	$job->setIsPublic(true);
        	$job->setIsActivated(true);
        	$job->setEmail('job@example.com');
        	$job->setExpiresAt(new \DateTime('2012-10-10'));
        	$em->persist($job);
        }
       
        $em->flush();
        
    }
}