<?php

namespace OOPStore;


interface CustomerInterface
{
    public function setFirstName($firstName);
    public function setLastName($lastName);
    public function getFirstName(): string;
    public function getLastName(): string;
}