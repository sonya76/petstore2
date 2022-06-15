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
                               <label  for="prenom">Votre Prénom :</label>
                              <input type="text" id="prenom"   />
                          </div> 
                          <div> 
                               <label for="nom">Votre Nom :</label>
                              <input type="text" id="nom" />
                            
                           </div>
                        </div>   
                          <div>
                          <label  for="email">Email :</label>
                            <input type="email" id="email"  />
                          </div>
                           <div>
                
                            <label  for="emailConfirm">Email Confirm :</label>
                            <input type="email" id="emailConfirm"  />
                           </div>
                   
                       <div class="ligne2">
      <div>
                              <label for="password">Password :</label>
                              <input type="password" id="password"  />
                              
      </div>
      <div>
             
                             <label for="PasswordConfirm">Password Confirm :</label>
                           <div>
                              <input type="password" id="PasswordConfirm"  /></div>
                        </div>
                       
                            </div>
                            <div>
                             <label for="date">Date de Naissance :</label>
                          <input type="date" id="date"  />
                         </div>
                        </div>
                   <div class="droite">
                  <div>
                        <h3>Contact Details</h3>
                      </div>
                 <div>
                            <label for="adresse">Adresse :</label>
                            <textarea name="text" id="adresse" cols="30" rows="3" ></textarea>
                            </div>
                       
      
                     <div>
                            <label  for="complementsadresse">Compléments adresse :</label>
                         
                            <textarea name="text" id="complementsadresse" cols="30" rows="3"></textarea>
                           </div>
                    
                           <div class="ligne3">
               <div>
      
                       
                               <label  for="codepostale">Code Postale :</label>
                              <input type="text" id="codepostale"  />
                 </div>
      
                 <div>
                               <label  for="ville">Ville :</label>
                              <input type="text" id="ville"  />
                             
                   </div>
        </div>
        <div class="ligne4">
        <div>
                               <label  for="indicatif">Code +</label>
                              <input type="text" id="indicatif"  />
                             
            </div> 
            <div>
          
                               <label  for="telephone">Téléphone :</label>
                              <input type="text" id="telephone"  />
                     </div>        
                
                        </div>
                        <div>
                        <label  for="form2Example3"></label>
                          <input type="checkbox" value="" id="form2Example3c" />
                      
                            J'accepte les <a href="#!" class="text-white"><u>termes et conditions</u></a> de votre site.
                             
                          </label>
                   </div> 
                   <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
                        </div>
                      
                </div>

 


                <input type="hidden" name="frmInscription" />                  
</form>
