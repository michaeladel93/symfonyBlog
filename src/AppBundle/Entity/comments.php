<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commentsRepository")
 */
class comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="post_id", type="integer")
     */
    private $postId;

    /**
     * @var string
     *
     * @ORM\Column(name="commented_by", type="string", length=255)
     */
    private $commentedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_date", type="string", length=255)
     */
    private $commentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     *
     * @return comments
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return int
     */
    public function getPostId()
    {
        return $this->postId;
    }

    /**
     * Set commentedBy
     *
     * @param string $commentedBy
     *
     * @return comments
     */
    public function setCommentedBy($commentedBy)
    {
        $this->commentedBy = $commentedBy;

        return $this;
    }

    /**
     * Get commentedBy
     *
     * @return string
     */
    public function getCommentedBy()
    {
        return $this->commentedBy;
    }

    /**
     * Set commentDate
     *
     * @param string $commentDate
     *
     * @return comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return string
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return comments
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
}

