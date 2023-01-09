<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $processor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ram;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $internal_memory;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $screen;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $screen_size;

    /**
     * @ORM\Column(type="integer")
     */
    private $screen_resolution;

    /**
     * @ORM\Column(type="float")
     */
    private $pixel_density;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $camera;

    /**
     * @ORM\Column(type="integer")
     */
    private $camera_resolution;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $battery_capacity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $operating_systeÃm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $connectivity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dimensions;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getProcessor(): ?string
    {
        return $this->processor;
    }

    public function setProcessor(string $processor): self
    {
        $this->processor = $processor;

        return $this;
    }

    public function getRam(): ?int
    {
        return $this->ram;
    }

    public function setRam(?int $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getInternalMemory(): ?int
    {
        return $this->internal_memory;
    }

    public function setInternalMemory(?int $internal_memory): self
    {
        $this->internal_memory = $internal_memory;

        return $this;
    }

    public function getScreen(): ?string
    {
        return $this->screen;
    }

    public function setScreen(?string $screen): self
    {
        $this->screen = $screen;

        return $this;
    }

    public function getScreenSize(): ?float
    {
        return $this->screen_size;
    }

    public function setScreenSize(?float $screen_size): self
    {
        $this->screen_size = $screen_size;

        return $this;
    }

    public function getScreenResolution(): ?int
    {
        return $this->screen_resolution;
    }

    public function setScreenResolution(int $screen_resolution): self
    {
        $this->screen_resolution = $screen_resolution;

        return $this;
    }

    public function getPixelDensity(): ?float
    {
        return $this->pixel_density;
    }

    public function setPixelDensity(float $pixel_density): self
    {
        $this->pixel_density = $pixel_density;

        return $this;
    }

    public function getCamera(): ?string
    {
        return $this->camera;
    }

    public function setCamera(string $camera): self
    {
        $this->camera = $camera;

        return $this;
    }

    public function getCameraResolution(): ?int
    {
        return $this->camera_resolution;
    }

    public function setCameraResolution(int $camera_resolution): self
    {
        $this->camera_resolution = $camera_resolution;

        return $this;
    }

    public function getBatteryCapacity(): ?int
    {
        return $this->battery_capacity;
    }

    public function setBatteryCapacity(?int $battery_capacity): self
    {
        $this->battery_capacity = $battery_capacity;

        return $this;
    }

    public function getOperatingSysteÃm(): ?string
    {
        return $this->operating_systeÃm;
    }

    public function setOperatingSysteÃm(?string $operating_systeÃm): self
    {
        $this->operating_systeÃm = $operating_systeÃm;

        return $this;
    }

    public function getConnectivity(): ?string
    {
        return $this->connectivity;
    }

    public function setConnectivity(?string $connectivity): self
    {
        $this->connectivity = $connectivity;

        return $this;
    }

    public function getDimensions(): ?string
    {
        return $this->dimensions;
    }

    public function setDimensions(?string $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
