<?php
// src/article/PlatformBundle/Entity/Blog.php

namespace article\PlatformBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 */
class Blog
{



    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;



    /**
     * @ORM\Column(type="string")
     */
    protected $title;



    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $author;



    /**
     * @ORM\Column(type="text")
     */
    protected $blog;




        /**
     * @ORM\Column(type="datetime")
     */
    protected $created;



    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;






    protected $comments = array();










    /**
     * @Assert\file(maxSize="500k")
     */
    public $file;

    public function getWebPath()
    {
        return null === $this->file ? null : $this->getUploadDir().'/'.$this->file;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return '/images';
    }

    public function uploadProfilePicture()
    {
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->file = $this->file->getClientOriginalName();
        $this->file = null;
    }














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
     * Set title
     *
     * @param string $title
     *
     * @return Blog
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }








    /**
     * Set author
     *
     * @param string $author
     *
     * @return Blog
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }







    /**
     * Set blog
     *
     * @param string $blog
     *
     * @return Blog
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return string
     */
    public function getBlog()
    {
        return $this->blog;
    }







    /**
     * Set file
     *
     * @param array $file
     *
     * @return file
     */
    public function setfile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return file
     */
    public function getfile()
    {
        return $this->file;
    }









    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Blog
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }






    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Blog
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }



}
