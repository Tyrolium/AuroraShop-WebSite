<?php

function mainComposant()
{

    $hr = "<hr>";


    require_once "./composant/galery.phtml";

    echo $hr;

    require_once "./composant/commission.phtml";


}

function aboutComposant()
{
    require_once "./composant/about.phtml";
}

function contactComposant()
{

    require_once "./composant/contact.phtml";

}