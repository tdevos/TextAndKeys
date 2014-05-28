<?php

namespace FlashPanther\TextAndKeys\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keywords
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Keywords
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=255)
     */
    private $tablename;

    /**
     * @var integer
     *
     * @ORM\Column(name="rowkey", type="integer")
     */
    private $rowkey;


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
     * Set tablename
     *
     * @param string $tablename
     * @return Keywords
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set rowkey
     *
     * @param integer $rowkey
     * @return Keywords
     */
    public function setRowkey($rowkey)
    {
        $this->rowkey = $rowkey;

        return $this;
    }

    /**
     * Get rowkey
     *
     * @return integer 
     */
    public function getRowkey()
    {
        return $this->rowkey;
    }
}
