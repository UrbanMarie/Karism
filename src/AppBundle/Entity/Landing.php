<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Landing
 *
 * @ORM\Table(name="landing")
 * @ORM\Entity
 */
class Landing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="carousselExpo", type="string", length=255, nullable=false)
     */
    private $carousselexpo;

    /**
     * @var string
     *
     * @ORM\Column(name="carousselArtiste", type="string", length=255, nullable=false)
     */
    private $carousselartiste;



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
     * Set carousselexpo
     *
     * @param string $carousselexpo
     *
     * @return Landing
     */
    public function setCarousselexpo($carousselexpo)
    {
        $this->carousselexpo = $carousselexpo;

        return $this;
    }

    /**
     * Get carousselexpo
     *
     * @return string
     */
    public function getCarousselexpo()
    {
        return $this->carousselexpo;
    }

    /**
     * Set carousselartiste
     *
     * @param string $carousselartiste
     *
     * @return Landing
     */
    public function setCarousselartiste($carousselartiste)
    {
        $this->carousselartiste = $carousselartiste;

        return $this;
    }

    /**
     * Get carousselartiste
     *
     * @return string
     */
    public function getCarousselartiste()
    {
        return $this->carousselartiste;
    }
}
