<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

trait DatesTrait
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationDateTime", type="datetime", nullable=true)
     */
    private $creationDateTime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editDateTime", type="datetime", nullable=true)
     */
    private $editDateTime;

    /**
     * Set creationDateTime
     *
     * @param \DateTime $creationDateTime
     *
     * @return DatesTrait
     */
    public function setCreationDateTime($creationDateTime)
    {
        $this->creationDateTime = $creationDateTime;

        return $this;
    }

    /**
     * Get creationDateTime
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->creationDateTime;
    }

    /**
     * Set editDateTime
     *
     * @param \DateTime $editDateTime
     *
     * @return DatesTrait
     */
    public function setEditDateTime($editDateTime)
    {
        $this->editDateTime = $editDateTime;

        return $this;
    }

    /**
     * Get editDateTime
     *
     * @return \DateTime
     */
    public function getEditDateTime()
    {
        return $this->editDateTime;
    }
}

