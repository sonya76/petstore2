<form action="index.php?page=inscription" method="post">
<div class="box">
  <div class="gauche">
     <div class="titre1">
                        <h3 >Infomation Generale </h3>
      </div>
                        <div>
                          <select class="select">
                            <option value="1" selected>Title</option>
                            <option value="2">Monsieur</option>
                            <option value="3">Madame</option>
                            <option value="4">Mademoiselle</option>
                          </select>
                        </div>  
                 
      
                   
                       <div class="ligne">           
                          <div>
                               <label class="form-label" for="prenom">Votre Prénom :</label>
                              <input type="text" id="prenom" class="form-control form-control-lg" />
                          </div> 
                          <div> 
                               <label class="form-label" for="nom">Votre Nom :</label>
                              <input type="text" id="nom" class="form-control form-control-lg" />
                            
                           </div>
                        </div>   
                          <div>
                          <label class="form-label" for="email">Email :</label>
                            <input type="text" id="email" class="form-control form-control-lg" />
                          </div>
                           <div>
                
                            <label class="form-label" for="emailConfirm">Email Confirm :</label>
                            <input type="text" id="emailConfirm" class="form-control form-control-lg" />
                           </div>
                   
                       <div class="ligne2">
      <div>
                              <label class="form-label" for="password">Password :</label>
                              <input type="password" id="password" class="form-control form-control-lg" />
                              
      </div>
      <div>
             
                             <label class="form-label" for="PasswordConfirm">Password Confirm :</label>
                           <div>
                              <input type="password" id="PasswordConfirm" class="form-control form-control-lg" /></div>
                        </div>
                       
                            </div>
                            <div>
                             <label class="form-label" for="date">Date de Naissance :</label>
                          <input type="date" id="date" class="form-control form-control-lg" />
                         </div>
                        </div>
                   <div class="droite">
                     <div>
                        <h3 class="fw-normal mb-5">Contact Details</h3>
                      </div>
                 <div>
                            <label class="form-label" for="adresse">Adresse :</label>
                            <textarea name="text" id="adresse" cols="30" rows="10"></textarea>
                            </div>
                       
      
                     <div>
                            <label class="form-label" for="complementsadresse">Compléments adresse :</label>
                          <!--   <input type="text" id="" class="form-control form-control-lg" /> -->
                            <textarea name="text" id="complementsadresse" cols="30" rows="10"></textarea>
                           </div>
                    
                           <div class="ligne3">
               <div>
      
                       
                               <label class="form-label" for="codepostale">Code Postale :</label>
                              <input type="text" id="codepostale" class="form-control form-control-lg" />
                 </div>
      
                 <div>
                               <label class="form-label" for="ville">Ville :</label>
                              <input type="text" id="ville" class="form-control form-control-lg" />
                             
                   </div>
        </div>
        <div class="ligne4">
        <div>
                               <label class="form-label" for="indicatif">Code +</label>
                              <input type="text" id="indicatif" class="form-control form-control-lg" />
                             
            </div>
            <div>
          
                               <label class="form-label" for="telephone">Téléphone :</label>
                              <input type="text" id="telephone" class="form-control form-control-lg" />
                     </div>        
                
                        </div>
                        <div>
                        <label class="form-check-label text-white" for="form2Example3"></label>
                          <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                      
                            J'accepte les <a href="#!" class="text-white"><u>termes et conditions</u></a> de votre site.
                             
                          </label>
                   </div>
      
                        <input type="button" value="Valider">
                        </div>
                      
                

 


                        </div>
</form>
