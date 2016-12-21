<?php

namespace taskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="taskPlannerBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**

     * @ORM\ManyToOne(targetEntity="Task", inversedBy="comments")

     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")

     */

    private $tasks;
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
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set comment
     *
     * @param string $comment
     * @return Comments
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set tasks
     *
     * @param \taskPlannerBundle\Entity\Task $tasks
     * @return Comments
     */
    public function setTasks(\taskPlannerBundle\Entity\Task $tasks = null)
    {
        $this->tasks = $tasks;

        return $this;
    }

    /**
     * Get tasks
     *
     * @return \taskPlannerBundle\Entity\Task 
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
