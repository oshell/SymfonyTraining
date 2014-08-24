<?php

namespace Lynda\MagazineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table(name="jobs")
 * @ORM\Entity(repositoryClass="Lynda\MagazineBundle\Entity\JobRepository")
 */
class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumn(name="category_id, referencedColumNmae="id")
     */
    protected $category;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $type;
    
    /**
     * @ORM\Column(type="string", length="255", nullable=true")
     */
    protected $company;
    
    /**
     * @ORM\Column(type="string", length="255")
     */
    protected $logo;
    
    /**
     * @ORM\Column(type="string, length="255, nullable=true)
     */
    protected $url;
    
    /**
     * @ORM\Column(type="string", length="255", nullable=true)
     */
    protected $position;
    
    
    /**
     * @ORM\Column(type="string, length="255")
     */
    protected $location;
    
    /**
     * @ORM\Column(type="string", length="4000")
     */
    protected $description;
    
    /**
     * @ORM\Column(type="string", length="4000", name="how_to_apply")
     */
    
    
    
    
    
}
