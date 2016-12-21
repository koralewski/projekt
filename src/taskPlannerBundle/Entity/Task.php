<?php

namespace taskPlannerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="taskPlannerBundle\Repository\TaskRepository")
 */
class Task
{
    /**

     * @ORM\OneToMany(targetEntity="Comments", mappedBy="tasks")

     */

    private $comments;

    public function __construct() {

        $this->comments = new ArrayCollection();
        $this->category = new ArrayCollection();
    }
    /**

     * @ORM\OneToMany(targetEntity="Category", mappedBy="tasks")

     */

    private $category;
    /**

     * @ORM\ManyToOne(targetEntity="User", inversedBy="tasks")

     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")

     */

    private $users;
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="done", type="boolean")
     */
    private $done;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due_date", type="datetime")
     */
    private $dueDate;


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
     * @return Task
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
     * @return Task
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
     * Set done
     *
     * @param boolean $done
     * @return Task
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     * @return Task
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime 
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Add comments
     *
     * @param \taskPlannerBundle\Entity\Comments $comments
     * @return Task
     */
    public function addComment(\taskPlannerBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \taskPlannerBundle\Entity\Comments $comments
     */
    public function removeComment(\taskPlannerBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set user
     *
     * @param \taskPlannerBundle\Entity\User $user
     * @return Task
     */
    public function setUser(\taskPlannerBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \taskPlannerBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add category
     *
     * @param \taskPlannerBundle\Entity\Category $category
     * @return Task
     */
    public function addCategory(\taskPlannerBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \taskPlannerBundle\Entity\Category $category
     */
    public function removeCategory(\taskPlannerBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set users
     *
     * @param \taskPlannerBundle\Entity\User $users
     * @return Task
     */
    public function setUsers(\taskPlannerBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \taskPlannerBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
