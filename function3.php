
<?php 
    $cote1= int()readline('Entrer le nombre du cote 1');

    $cote2= int()readline('Entrer le nombre du cote 2');

function pythagore($cote1,$cote2) 
{
                if($cote1 && $cote2) 
                {
                    $tmp=array($cote1,$cote2);
                    sort($tmp);
                    $cote=pow($tmp[1],2)-pow($tmp[0],2);
                    $cote=sqrt($cote);
                    return $cote;
                }
	else
	{
	return false;
    }
}