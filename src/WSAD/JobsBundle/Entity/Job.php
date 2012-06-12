<?php

namespace WSAD\JobsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WSAD\JobsBundle\Entity\Job
 */
class Job
{
	
	const ACTIVE_DAYS = 30;
    /**
     * @var integer $id
     */
    private $id;

	/**
	* @var WSAD\JobsBundle\Entity\Category
	*/
    private $category;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $company
     */
    private $company;

    /**
     * @var string $logo
     */
    private $logo;

    /**
     * @var string $url
     */
    private $url;

    /**
     * @var string $position
     */
    private $position;

    /**
     * @var string $location
     */
    private $location;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var string $how_to_apply
     */
    private $how_to_apply;

    /**
     * @var boolean $is_public
     */
    private $is_public;

    /**
     * @var boolean $is_activated
     */
    private $is_activated;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var datetime $expires_at
     */
    private $expires_at;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     */
    private $updated_at;
    
    
    public function setExpirationDate()
    {
    	$days = self::ACTIVE_DAYS;
    	$this->expires_at = new \DateTime('+'.$days.' days');	
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
     * Set category
     *
     * @param WSAD\JobsBundle\Entity\Category $category
     */
    public function setCategory(\WSAD\JobsBundle\Entity\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return WSAD\JobsBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @var string $slug
     */
    private $slug;

    /**
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set company
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set position
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return string 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set how_to_apply
     *
     * @param string $howToApply
     */
    public function setHowToApply($howToApply)
    {
        $this->how_to_apply = $howToApply;
    }

    /**
     * Get how_to_apply
     *
     * @return string 
     */
    public function getHowToApply()
    {
        return $this->how_to_apply;
    }

    /**
     * Set is_public
     *
     * @param boolean $isPublic
     */
    public function setIsPublic($isPublic)
    {
        $this->is_public = $isPublic;
    }

    /**
     * Get is_public
     *
     * @return boolean 
     */
    public function getIsPublic()
    {
        return $this->is_public;
    }

    /**
     * Set is_activated
     *
     * @param boolean $isActivated
     */
    public function setIsActivated($isActivated)
    {
        $this->is_activated = $isActivated;
    }

    /**
     * Get is_activated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->is_activated;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set expires_at
     *
     * @param datetime $expiresAt
     */
    public function setExpiresAt($expiresAt)
    {
        $this->expires_at = $expiresAt;
    }

    /**
     * Get expires_at
     *
     * @return datetime 
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}