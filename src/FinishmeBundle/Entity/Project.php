<?php

namespace FinishmeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinishmeBundle\Entity\Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="createdOn", type="datetime")
     */
    private $createdOn;
    
    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="modifiedOn", type="datetime")
     */
    private $modifiedOn;
    
    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="foundedOn", type="date")
     */
    private $foundedOn;


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
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
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
     * Set url
     *
     * @param string $url
     * @return Project
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
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
     * Set createdOn
     *
     * @param \DateTime $created
     * @return Project
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }
    
    /**
     * Set modifiedOn
     *
     * @param \DateTime $created
     * @return Project
     */
    public function setModifiedOn($modifiedOn)
    {
    	$this->modifiedOn = $modifiedOn;
    
    	return $this;
    }
    
    /**
     * Get modifiedOn
     *
     * @return \DateTime
     */
    public function getModifiedOn()
    {
    	return $this->modifiedOn;
    }
    
    /**
     * Set created
     *
     * @param \Date $created
     * @return Project
     */
    public function setFoundedOn($foundedOn)
    {
    	$this->foundedOn = $foundedOn;
    
    	return $this;
    }
    
    /**
     * Get created
     *
     * @return \Date
     */
    public function getFoundedOn()
    {
    	return $this->foundedOn;
    }
}
