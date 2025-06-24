<div class="slide" id="contact">
           
           <div class="row">
               <div class="col-6 offset-3">
                   <h2>Contact</h2>
                   <?php
                       if(isset($_GET['error']))
                       {
                           echo "<div class='alert alert-danger'>Une erreur est survenue (code erreur: ".$_GET['error'].")</div>";
                       }

                       if(isset($_GET['message']))
                       {
                           if($_GET['message']=="success")
                           {
                               echo "<div class='alert alert-success'>Votre message a bien été envoyé</div>";
                           }
                       }
                   ?>
                   <form action="traitement.php" method="POST">
                       <div class="form-group my-3">
                           <label for="nom">Nom: </label>
                           <input type="text" id="nom" name="nom" class="form-control">
                       </div>
                       <div class="form-group my-3">
                           <label for="prenom">prénom: </label>
                           <input type="text" id="prenom" name="prenom" class="form-control">
                       </div>
                       <div class="form-group my-3">
                           <label for="email">Adresse E-mail: </label>
                           <input type="email" name="email" id="email" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="sujet">Sujet</label>
                           <select name="sujet" id="sujet" class="form-control">
                               <option value="sujet 1">Infographie</option>
                               <option value="sujet 2">Tatouage</option>
                           </select>
                       </div>
                       <div class="form-group my-3">
                           <label for="message">Message: </label>
                           <textarea name="message" id="message" class="form-control"></textarea>
                       </div>
                       <div class="form-group my-3">
                           <input type="submit" value="Envoyer" class="btn btn-success">
                       </div>
                   </form>
               </div>
           </div>
       </div>