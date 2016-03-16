 var N = 0;
 var NM = Math.floor((Math.random() * 100) + 1);
 console.log(NM);

 while (N != NM)
    {
        
        N = window.prompt("Devinez le nombre magique entre 1 et 100:");

        if (N != null && N != "")
        {
          if (N < NM)
            {
                alert("Plus grand... Réessayez");                   
            }

            else if (N > NM)
            {
                alert("Plus petit...  Réessayez");
            }
        }

        if (N == null)
        {
           break;           
        }
    }   


        if (N == null) 
            {
                if (confirm("Souhaitez-vous réellement quitter ???") == true) 
                {
                    alert("Merci d'avoir joué au nombre magique !!!!")
                }
                else 
                {
                    location.reload();
                } 

            }

        else
        {
            if (confirm("*******************Félicitation !!!!!!!!*********************\n\nSouhaitez-vous rejouer?") == true)
            {
                location.reload();
            }
            else
            {
                alert("Merci d'avoir joué au nombre magique !!!!")
            }  
        }
        

