<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\postsRepository")
 */
class posts
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
     * @var string
     *
     * @ORM\Column(name="post_title", type="string", length=255)
     */
    private $postTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="post_date", type="string", length=255)
     */
    private $postDate;

    /**
     * @var string
     *
     * @ORM\Column(name="post_img", type="string", length=255)
     */
    private $postImg;

    /**
     * @var string
     *
     * @ORM\Column(name="post_details", type="string", length=255)
     */
    private $postDetails;

    /**
     * @var string
     *
     * @ORM\Column(name="post_data", type="string", length=2000)
     */
    private $postData;

    /**
     * @var string
     *
     * @ORM\Column(name="posted_by", type="string", length=255)
     */
    private $postedBy;


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
     * Set postTitle
     *
     * @param string $postTitle
     *
     * @return posts
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * Get postTitle
     *
     * @return string
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postDate
     *
     * @param string $postDate
     *
     * @return posts
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * Get postDate
     *
     * @return string
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set postImg
     *
     * @param string $postImg
     *
     * @return posts
     */
    public function setPostImg($postImg)
    {
        $this->postImg = $postImg;

        return $this;
    }

    /**
     * Get postImg
     *
     * @return string
     */
    public function getPostImg()
    {
        return $this->postImg;
    }

    /**
     * Set postDetails
     *
     * @param string $postDetails
     *
     * @return posts
     */
    public function setPostDetails($postDetails)
    {
        $this->postDetails = $postDetails;

        return $this;
    }

    /**
     * Get postDetails
     *
     * @return string
     */
    public function getPostDetails()
    {
        return $this->postDetails;
    }

    /**
     * Set postData
     *
     * @param string $postData
     *
     * @return posts
     */
    public function setPostData($postData)
    {
        $this->postData = $postData;

        return $this;
    }

    /**
     * Get postData
     *
     * @return string
     */
    public function getPostData()
    {
        return $this->postData;
    }

    /**
     * Set postedBy
     *
     * @param string $postedBy
     *
     * @return posts
     */
    public function setPostedBy($postedBy)
    {
        $this->postedBy = $postedBy;

        return $this;
    }

    /**
     * Get postedBy
     *
     * @return string
     */
    public function getPostedBy()
    {
        return $this->postedBy;
    }
}

