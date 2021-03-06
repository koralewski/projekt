<?php

namespace taskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="taskPlannerBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\ManyToOne(targetEntity="Task", inversedBy="category")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    private $taskes;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=600)
     */
    private $name;


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
     * @return Category
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
     * Set taskes
     *
     * @param \taskPlannerBundle\Entity\Task $taskes
     * @return Category
     */
    public function setTaskes(\taskPlannerBundle\Entity\Task $taskes = null)
    {
        $this->taskes = $taskes;

        return $this;
    }

    /**
     * Get taskes
     *
     * @return \taskPlannerBundle\Entity\Task
     */
    public function getTaskes()
    {
        return $this->taskes;
    }

    public function __toString()
    {
        return $this->name;
    }

}
