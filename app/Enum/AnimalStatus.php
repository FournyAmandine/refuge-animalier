<?php

namespace App\Enum;

enum AnimalStatus:string
{
    case Adopted = 'Adopté';
    case Available = 'Disponible';
    case Pending = "En attente d'adoption";
    case Draft = "En attente de validation";
    case Care = "En soin";

}
