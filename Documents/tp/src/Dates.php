<?php

namespace UPJV

class Dates
{
public fonction demain()
{
$demain = new\DateTime();
$demain->add(new \DateInterval(duration:'P10'));
$reponse= ['demain' => $demain->format:(format:"d-m-Y")];
return json_encode($reponse); 
}
}