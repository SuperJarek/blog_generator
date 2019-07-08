<?php

namespace BlogBundle\Entity;

use AppBundle\Entity\DatesTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="BlogBundle\Repository\CommentRepository")
 */
class Comment
{
    use DatesTrait;

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
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="anonymousAuthor", type="string", length=255)
     */
    private $anonymousAuthor;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $loggedAuthor;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $post;

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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set loggedAuthor
     *
     * @param string $loggedAuthor
     *
     * @return Comment
     */
    public function setLoggedAuthor($loggedAuthor)
    {
        $this->loggedAuthor = $loggedAuthor;

        return $this;
    }

    /**
     * Get loggedAuthor
     *
     * @return string
     */
    public function getLoggedAuthor()
    {
        return $this->loggedAuthor;
    }

    /**
     * Set anonymousAuthor
     *
     * @param string $anonymousAuthor
     *
     * @return Comment
     */
    public function setAnonymousAuthor($anonymousAuthor)
    {
        $this->anonymousAuthor = $anonymousAuthor;

        return $this;
    }

    /**
     * Get anonymousAuthor
     *
     * @return string
     */
    public function getAnonymousAuthor()
    {
        return $this->anonymousAuthor;
    }

    /**
     * Set post
     *
     * @param string $post
     *
     * @return Comment
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }
}

