<?php 

/*
    $nome = $_POST['nome'];
    $qtitens = $_POST['qtitens'];
    $item = $_POST['item'];
    $volume = $item * $qtitens;
    $caminhao1 = $_POST['caminhao1'];
    $caminhao2 = $_POST['caminhao2'];
    $caminhao3 = $_POST['caminhao3'];

*/

	if(!isset($_POST['item1'])){
		
	}
	if(!isset($_POST['item2'])){
		
	}
	if(!isset($_POST['item3'])){
		
	}
	if(!isset($_POST['qtitens1'])){
		
	}
	if(!isset($_POST['qtitens2'])){
		
	}
	if(!isset($_POST['qtitens3'])){
		
	}
	if(!isset($_POST['acao'])){
		
	}

	$item1 = $_POST['item1'];
	$item2 = $_POST['item2'];
	$item3 = $_POST['item3'];
	$qnt1= $_POST['qtitens1'];
	$qnt2= $_POST['qtitens2'];
	$qnt3= $_POST['qtitens3'];
	$bau1 = 29;
	$bau2 = 44;
	$bau3 = 58;
	$volume [0] = $item1;
	$volume [1] = $item2;
	$volume [2] = $item3;
	
	/*$volitem1= $item1* $qnt1;
	$volitem2= $item2* $qnt2;
	$volitem3= $item3* $qnt3;
	$voltotal= ($volitem1+$volitem2+$volitem3);
	
	$cont = 0;*/
   
   if($_POST['acao'] == "ADICIONAR")
	{	
		
		if ($bau1 > 0)
		{
			/*$bau1 = 29;
			$bau2 = 44;
			$bau3 = 58;*/	
			$volitem1= ($item1* $qnt1);
			$volitem2= ($item2* $qnt2);
			$volitem3= ($item3* $qnt3);
			$voltotal= ($volitem1+$volitem2+$volitem3);
			
			if ($voltotal<$bau1){
				$bau1=$voltotal;
				echo "VALOR CAMINHÃO 1: " .$bau1;
				$bau2="SEM CARGA";
				$bau3="SEM CARGA";
				
			}
			
			else if($voltotal<($bau1+$bau2)){
				$voltotal2= $voltotal-29;
				$bau1=29;
				$bau2= $voltotal2;
				echo "VALOR CAMINHÃO 1: " .$bau1. "<br>VALOR CAMINHÃO 2: " .$bau2;
				$bau3="SEM CARGA";
				
				
			}
			else if(($voltotal>=($bau1+$bau2))and ($voltotal<=131)){
				$voltotal3=$voltotal-73;
				$bau2=44;
				$bau1=29;
				$bau3=$voltotal3;
				echo "VALOR CAMINHÃO 1: " .$bau1. "<br>VALOR CAMINHÃO 2: " .$bau2."<br> CAMINHÃO 3: ".$bau3;
			}
			else //($voltotal>=($bau1+$bau2+$bau3))
			{
				
				echo "VALOR ULTRAPASSA A CAPACIDADE.";
			}
		}
			//echo "VALOR CAMINHÃO 1: " .$bau1. "<br>VALOR CAMINHÃO 2: " .$bau2."<br> CAMINHÃO 3: ".$bau3;
			/*
		
			if ($voltotal < $bau1) {
					while (voltotal<$bau1){
						$bau1= $volitem1-
						
						$bau1 = $bau1 - $voltotal;
						
						$voltotal= $bau1;
					}
					$voltotal2 = $voltotal - $bau1;
				}
				else if (($voltotal2[$cont]>$bau1) and ($voltotal2[$cont]<$bau2)){	
						$bau2 = $bau2 - $voltota2;
						$voltota2[$cont] = 0;
						$cont++;
						$voltotal3 = $voltota2 - $bau2;
					}
				
					else if (($voltotal3[$cont] > $bau2) and ($voltotal3[$cont] < $bau3)){	
							$bau1 = $bau3 - $voltota3;
							$voltota3[$cont] = 0;
							$cont++;
							$voltotalf = $voltota3 - $bau3;
						}
						else{
								echo "VOLUME EXCEDE A CAPACIDADE DE CARGA!";
							}
			
			echo $bau1;
			echo $bau2;
			echo $bau3;
		}	
			
			
			echo $bau1;
			echo $bau2;
			echo $bau3;
			/*$rota1=$_POST['destino1'];
			$rota2=$_POST['destino2'];
			$rota3=$_POST['destino3'];
			
			switch ($rota1)
			
				case "jupiter":
					echo "Pimeira entrega: Bairro Júpiter"
					if ($rota2 == "jupiter"){
						echo "Segunda entrega: Júpiter"
					}
					else if ($rota2=="Urano"){
						echo 
					}
		
			 
    /*
    switch ($caminhao1) {
        
        case "tresquartos":
            
            if ($volume <= 29){
                $bau1 = 0
                while ($bau1 <= 29){
                    
                    $item1 = array ($volume)
                
                    $bau1++
                }
            }
            else if ($volume <= 44){ 
                
                
                
            }
            
            
            
        case "troco":

            $bau2 = 0
                while ($bau2 <= 44){
                    
                    echo $bau2
                
                    $bau1++
                }
        
        case "truck":
        
            $bau1 = 0
                while ($bau1 <= 29){
                    
                    echo $bau1
                
                    $bau1++
                }
    }
    
    */
    
    }
	
?>
