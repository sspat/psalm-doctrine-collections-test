<?php

use Doctrine\Common\Collections\ArrayCollection;

$class = new class extends ArrayCollection {};

$class->filter(function () { return true; });
