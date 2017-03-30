<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentRepository")
 */
class Document
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="text", nullable=true)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="motcle", type="text", nullable=true)
     */
    private $motcle;

    /**
     * @var string
     *
     * @ORM\Column(name="dateprod", type="string", length=10, nullable=true)
     */
    private $dateprod;

    /**
     * @var string
     *
     * @ORM\Column(name="producteur", type="string", length=75, nullable=true)
     */
    private $producteur;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(name="publie_par", type="string", length=25, nullable=true)
     */
    private $publiePar;

    /**
     * @var string
     *
     * @Gedmo\Blameable(on="update")
     * @ORM\Column(name="modifie_par", type="string", length=25, nullable=true)
     */
    private $modifiePar;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="publie_le", type="datetimetz", nullable=true)
     */
    private $publieLe;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="modifie_le", type="datetimetz", nullable=true)
     */
    private $modifieLe;

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Definitive", inversedBy="documents")
    * @ORM\JoinColumn(name="definitive_id", referencedColumnName="id")
    */
    private $definitive;


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
     * Set reference
     *
     * @param string $reference
     *
     * @return Document
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Document
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set motcle
     *
     * @param string $motcle
     *
     * @return Document
     */
    public function setMotcle($motcle)
    {
        $this->motcle = $motcle;

        return $this;
    }

    /**
     * Get motcle
     *
     * @return string
     */
    public function getMotcle()
    {
        return $this->motcle;
    }

    /**
     * Set dateprod
     *
     * @param string $dateprod
     *
     * @return Document
     */
    public function setDateprod($dateprod)
    {
        $this->dateprod = $dateprod;

        return $this;
    }

    /**
     * Get dateprod
     *
     * @return string
     */
    public function getDateprod()
    {
        return $this->dateprod;
    }

    /**
     * Set producteur
     *
     * @param string $producteur
     *
     * @return Document
     */
    public function setProducteur($producteur)
    {
        $this->producteur = $producteur;

        return $this;
    }

    /**
     * Get producteur
     *
     * @return string
     */
    public function getProducteur()
    {
        return $this->producteur;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Document
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set publiePar
     *
     * @param string $publiePar
     *
     * @return Document
     */
    public function setPubliePar($publiePar)
    {
        $this->publiePar = $publiePar;

        return $this;
    }

    /**
     * Get publiePar
     *
     * @return string
     */
    public function getPubliePar()
    {
        return $this->publiePar;
    }

    /**
     * Set modifiePar
     *
     * @param string $modifiePar
     *
     * @return Document
     */
    public function setModifiePar($modifiePar)
    {
        $this->modifiePar = $modifiePar;

        return $this;
    }

    /**
     * Get modifiePar
     *
     * @return string
     */
    public function getModifiePar()
    {
        return $this->modifiePar;
    }

    /**
     * Set publieLe
     *
     * @param \DateTime $publieLe
     *
     * @return Document
     */
    public function setPublieLe($publieLe)
    {
        $this->publieLe = $publieLe;

        return $this;
    }

    /**
     * Get publieLe
     *
     * @return \DateTime
     */
    public function getPublieLe()
    {
        return $this->publieLe;
    }

    /**
     * Set modifieLe
     *
     * @param \DateTime $modifieLe
     *
     * @return Document
     */
    public function setModifieLe($modifieLe)
    {
        $this->modifieLe = $modifieLe;

        return $this;
    }

    /**
     * Get modifieLe
     *
     * @return \DateTime
     */
    public function getModifieLe()
    {
        return $this->modifieLe;
    }

    /**
     * Set definitive
     *
     * @param \AppBundle\Entity\Definitive $definitive
     *
     * @return Document
     */
    public function setDefinitive(\AppBundle\Entity\Definitive $definitive = null)
    {
        $this->definitive = $definitive;

        return $this;
    }

    /**
     * Get definitive
     *
     * @return \AppBundle\Entity\Definitive
     */
    public function getDefinitive()
    {
        return $this->definitive;
    }
}
