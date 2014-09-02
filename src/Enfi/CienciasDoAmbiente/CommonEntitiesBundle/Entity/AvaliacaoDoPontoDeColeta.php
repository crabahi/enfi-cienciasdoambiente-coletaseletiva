<?php

namespace Enfi\CienciasDoAmbiente\CommonEntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AvaliacaoDoPontoDeColeta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Enfi\CienciasDoAmbiente\CommonEntitiesBundle\Entity\AvaliacaoDoPontoDeColetaRepository")
 */
class AvaliacaoDoPontoDeColeta
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
     * @var integer
     *
     * @ORM\Column(name="pontoDeColeta_id", type="integer")
     */
    private $pontoDeColetaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuario_id", type="integer")
     */
    private $usuarioId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetimetz")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="text")
     */
    private $comentario;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota", type="integer")
     */
    private $nota;


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
     * Set pontoDeColetaId
     *
     * @param integer $pontoDeColetaId
     * @return AvaliacaoDoPontoDeColeta
     */
    public function setPontoDeColetaId($pontoDeColetaId)
    {
        $this->pontoDeColetaId = $pontoDeColetaId;

        return $this;
    }

    /**
     * Get pontoDeColetaId
     *
     * @return integer 
     */
    public function getPontoDeColetaId()
    {
        return $this->pontoDeColetaId;
    }

    /**
     * Set usuarioId
     *
     * @param integer $usuarioId
     * @return AvaliacaoDoPontoDeColeta
     */
    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

        return $this;
    }

    /**
     * Get usuarioId
     *
     * @return integer 
     */
    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return AvaliacaoDoPontoDeColeta
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return AvaliacaoDoPontoDeColeta
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     * @return AvaliacaoDoPontoDeColeta
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer 
     */
    public function getNota()
    {
        return $this->nota;
    }
}
