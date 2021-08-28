<?php

require "Goods.php";
class Bike extends Goods
{
    private string $name_Company;

  private string $bike_category;
  private string $color;
  private double $frame_size;
  private string $size_wheel;
  private string $body_material;

    /**
     * @param string $name_Company
     */
    public function setNameCompany(string $name_Company): void
    {
        $this->name_Company = $name_Company;
    }



    /**
     * @param int $bike_category
     */
    public function setBikeCategory(int $bike_category): void
    {
        switch ($bike_category)
        {
            case 1:
                $this->bike_category = "MTB";
                break;
            case 2:
                $this->bike_category ="ROAD";
                break;
            case 3:
                $this->bike_category ="CITY & TOUR";
                break;
            case 4:
                $this->bike_category="URBAN MOBILITY";
                break;
            case 5:
                $this->bike_category="WOMEN";
                break;
            case 6:
                $this->bike_category="KIDS";
                break;

            default:
                break;

        }

    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    /**
     * @param string $body_material
     */
    public function setBodyMaterial(string $body_material): void
    {
        $this->body_material = $body_material;
    }

    /**
     * @param double  $frame_size
     */
    public function setFrameSize(double $frame_size): void
    {
        $this->frame_size = $frame_size;
    }


    /**
     * @param string $size_wheel
     */
    public function setSizeWheel(string $size_wheel): void
    {
        $this->size_wheel = $size_wheel;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getBikeCategory(): string
    {
        return $this->bike_category;
    }

    /**
     * @return string
     */
    public function getBodyMaterial(): string
    {
        return $this->body_material;
    }

    /**
     * @return float
     */
    public function getFrameSize(): float
    {
        return $this->frame_size;
    }

    /**
     * @return string
     */
    public function getNameCompany(): string
    {
        return $this->name_Company;
    }

    /**
     * @return string
     */
    public function getSizeWheel(): string
    {
        return $this->size_wheel;
    }
    function __construct($name,$cat,$pri)
    {
        parent::__construct($cat,$pri);
        $this->setNameCompany($name);
    }
}