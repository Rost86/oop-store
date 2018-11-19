<?php

namespace OOPStore;


interface ProductInterface
{
    public function getId(): int;
    public function setprice($price): float;
    public function getPrice();
    public function getCategory(): Category;
}