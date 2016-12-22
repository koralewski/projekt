<?php

namespace taskPlannerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="taskPlannerBundle\Repository\CommentRepository")
 */
class Comment
{
    /**

     * @ORM\ManyToOne(targetEntity="Task", inversedBy="comments")

     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")

     */

    private $taskId;
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
     * @return Comment
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
     * Set taskId
     *
     * @param \taskPlannerBundle\Entity\Task $taskId
     * @return Comment
     */
    public function setTaskId(\taskPlannerBundle\Entity\Task $taskId = null)
    {
        $this->taskId = $taskId;

        return $this;
    }

    /**
     * Get taskId
     *
     * @return \taskPlannerBundle\Entity\Task 
     */
    public function getTaskId()
    {
        return $this->taskId;
    }
}