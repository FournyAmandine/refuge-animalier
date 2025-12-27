<?php

namespace App\Enums;

enum AnimalVaccines: string
{
    case Rabies = 'Rage';
    case DHPPi = 'DHPPi (Distemper, Hepatitis, Parvovirus, Parainfluenza)';
    case Bordetella = 'Bordetella (Toux de chenil)';
    case Leptospirosis = 'Leptospirose';
    case Parainfluenza = 'Parainfluenza';
    case Lyme = 'Lyme';
    case FelineLeukemia = 'Leucose féline';
    case FelineHerpes = 'Herpès félin';
    case FelineCalicivirus = 'Calicivirus félin';
    case Tetanos = 'Tétanos';
}
