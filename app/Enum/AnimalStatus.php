<?php

namespace App\Enum;

enum AnimalStatus:string
{
    case Adopted = 'adopted';
    case Available = 'available';
    case Pending = "pending adoption";
    case Draft = "draft";
    case Care = "care";

}
