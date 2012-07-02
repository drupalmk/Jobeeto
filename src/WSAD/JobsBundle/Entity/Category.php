<?php

namespace WSAD\JobsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WSAD\JobsBundle\Entity\Category
 */
class Category
{
	
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $slug
     */
    private $slug;
    
	/**
	* @var WSAD\JobsBundle\Entity\Job
	*/
    private $jobs;
    
    /**
     * @var WSAD\JobsBundle\Entity\Job
     */
    private $activeJobs;

    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add jobs
     *
     * @param WSAD\JobsBundle\Entity\Jobs $jobs
     */
    public function addJobs(\WSAD\JobsBundle\Entity\Job $job)
    {
    	$this->jobs[] = $job;
    }
    
    /**
     * Get jobs
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getJobs()
    {
    	return $this->jobs;
    }
    
    /**
     * Set active jobs
     * 
     * @param Doctrine\Common\Collections\Collection
     */
    public function setActiveJobs($jobs)
    {
    	$this->activeJobs = $jobs;
    }

    /**
     * Get active jobs
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getActiveJobs()
    {
    	return $this->activeJobs;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * Get category name
     * 
     * @return string
     */
    public function __toString()
    {
    	return $this->name;
    }
}