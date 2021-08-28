<?php


class Goods
{

  private String $category;
  private int $price;


    /**
     * @param String $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return String
     */
    public function getCategory(): string
    {
        return $this->category;
    }


    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        if($price<=0)
        echo "<h2 style='color: red'> price cannot be zeo or negative please punch the price properly </h2>";
        else {
            $this->price = $price;
        }
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }


    function __construct(string $cat,int $pri )
    {
        $this->setPrice($pri);
        $this->setCategory($cat);
    }
}