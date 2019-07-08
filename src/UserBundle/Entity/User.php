<?php

namespace UserBundle\Entity;

use AppBundle\Entity\DatesTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    use DatesTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="inActiveDate", type="datetime", nullable=true)
     */
    private $inActiveDate;

    /**
     * @ORM\ManyToMany(targetEntity="BlogBundle\Entity\Blog", mappedBy="subscribers")
     */
    private $subscribedBlogs;

    /**
     * @ORM\OneToMany(targetEntity="BlogBundle\Entity\Blog", mappedBy="author")
     */
    private $ownedBlogs;

    /**
     * @ORM\OneToMany(targetEntity="BlogBundle\Entity\Comment", mappedBy="loggedAuthor")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="NotificationBundle\Entity\Notification", mappedBy="user")
     */
    private $notifications;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->subscribedBlogs = new ArrayCollection();
        $this->ownedBlogs = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->notifications = new ArrayCollection();

    }

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
     * @return \DateTime|null
     */
    public function getInActiveDate()
    {
        return $this->inActiveDate;
    }

    /**
     * @param \DateTime|null $inActiveDate
     */
    public function setInActiveDate($inActiveDate)
    {
        $this->inActiveDate = $inActiveDate;
    }

    /**
     * @return mixed
     */
    public function getSubscribedBlogs()
    {
        return $this->subscribedBlogs;
    }

    /**
     * @param mixed $subscribedBlogs
     */
    public function setSubscribedBlogs($subscribedBlogs)
    {
        $this->subscribedBlogs = $subscribedBlogs;
    }

    /**
     * @return mixed
     */
    public function getOwnedBlogs()
    {
        return $this->ownedBlogs;
    }

    /**
     * @param mixed $ownedBlogs
     */
    public function setOwnedBlogs($ownedBlogs)
    {
        $this->ownedBlogs = $ownedBlogs;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param mixed $notifications
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;
    }
}

