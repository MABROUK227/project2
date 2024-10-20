<?php $this->view("../minima/header",$data);?>
 
          
          <section class="section background-white">

          	<p><?php check_message() ?></p>
          	
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Télécharger l'image</h4>
              <form method="post" enctype="multipart/form-data" name="contactForm" class="customform" method="post">
                 
                <div class="s-12"> 
                  <input name="title" class="subject" placeholder="Title" title="Title" type="text" required>
                  <p class="subject-error form-error">Veuillez entrer un titre:</p>
                </div>
                <div class="s-12"> 
                  <input name="file" class="subject" type="file" required>
                  <p class="subject-error form-error">Veuillez sélectionner un fichier:</p>
                </div>

                <div class="s-12">
                  <textarea name="description" class="required message" placeholder="Description" rows="3"></textarea>
                  <p class="message-error form-error">Veuillez entrer une description:</p>
                </div>
                <div class="s-12"><button class="s-12 submit-form button background-primary text-white" type="submit">Bouton de soumission:</button></div>
              </form>
            </div>           
          </section> 

<?php $this->view("minima/footer",$data);?>