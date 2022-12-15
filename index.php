<?php
Require_once(__DIR__."/include/header.php");

?>

 <!--Form Search-->
<div class="form-search">
    <form action="" method="GET">
        <input type="text" name="" class="" placeholder="Trouver un modele">
        <button type="submit"><i  class="fas fa-search"></i></button>
    </form>
</div>
<!--/ Form Search-->

 <!--Hero video-->
 <div class="hero">
    <video src="assets/media/vid-1.mp4" id="video" autoplay loop muted></video>
</div>
<!--/ Hero video-->

<!--Hero texts-->
<div class="hero-flex">
    <div class="text">
        <h2><span class="text-static">Rise</span> fait grandir votre <span class="text-dynamique"></span></h2>
        <p>Demarquez vous de vos concurants</p>
    </div>
</div>
<!--/ Hero texts-->

<!--Start service-->
<section class="service" id="service">
    <div class="text">
        <h2>Nos services</h2>
        <p><span>Rise</span> œuvre pour la realisation des grand projets de ses clients, en visant 
        <span class="text-verte">l'objectifs</span></p>
    </div>
    <div class="content">
        <div class="bloc" title="Consultez l'article">
            <a href="">
                <div class="image"><img src="assets/media/website.png" alt="image"></div>
                <h3>création de site web</h3>
                <p>Votre site web est compatible sur tous les supports smartphone, tablette, Ordinateur portable,  Ordinateur bureau</p>
            </a>
        </div>
        <div class="bloc" title="Consultez l'article">
            <a href="">
                <div class="image"><img src="assets/media/infogerance.png" alt="image"></div>
                <h3>infogerance & Maintenance de site web</h3>
                <p>Bénéficier de tous les avantages d'entretien de votre site web en confiant sa gestion sur de long terme</p>
            </a>
        </div>
        <div class="bloc" title="Consultez l'article">
            <a href="">
                <div class="image"><img src="assets/media/mobile.png" alt="image"></div>
                <h3>création d'application mobile</h3>
                <p>L'excellent moyen pour se faire connaitre d'avantage sur de nombreux plateformes et simplifier la communication entre entreprise et clients</p>
            </a>
        </div>
        <div class="bloc" title="Consultez l'article">
            <a href="">
                <div class="image"><img src="assets/media/seo.png" alt="image"></div>
                <h3>Référencement naturel</h3>
                <p>Avoir une meilleure position sur les moteurs de recherche, c'est gagner plus de clienst</p>
            </a>
        </div>
    </div>
</section>
<!--/End service-->

<!--Start modele-->
<section class="modele" id="modele">
    <div class="text">
        <h2>E-commerce</h2>
        <p>
           Une vue globale d'un templates adaptable selon vos besoins
            pour vous faire une idée plus claire de vos futur projets
        </p>
    </div>
    <div class="content">
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image1.png" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, assumenda.</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image2.png" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga, ab.</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image3.png" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, dolorem?</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image4.png" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, maiores!</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image5.jpg" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, facere!</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
        <div class="bloc">
            <div class="image">
                <img src="assets/media/image6.jpg" alt="image template">
            </div>
            <div class="texts">
                <h3>Website name</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, magnam.</p>
                <a href=""><div class="btn">Voir</div></a>
            </div>
        </div>
    </div>
</section>
<!--End modele-->
<!--Start avis-->
<section class="avis">
    <h2>Ils nous font confiance</h2>
    <div class="content">
        <img src="assets/media/logo1.png" alt="image client">
        <img src="assets/media/logo2.png" alt="image client">
        <img src="assets/media/logo3.png" alt="image client">
        <img src="assets/media/logo4.png" alt="image client">
    </div>
</section>
<!--End avis-->
<!--Start about-->
<section class="about">
    <div class="bloc">
        <div class="aboutText" id="about">
            <h2>A propos</h2>
            <P>
                <span class="green">Rise</span> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Tenetur, iure. Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, omnis!
                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                 sTotam suscipit quod debitis maiores tempora sequi id accusamus modi at. Explicabo.
            </P>
        </div>
        <div class="contact" id="contact">
            <h3>Confiez nous vos projets de création de site web</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nom et prénom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                </div>     
                <div class="form-group">
                    <textarea type="text" name="msg" id="msg" class="form-control"  cols="30" rows="10" placeholder="Message"></textarea>                
                </div>
                <div class="form-group">
                    <input type="submit" name="Envoyer" class="btn" value="Envoyez">
                </div>  
            </form>
        </div>
    </div>
</section>
<!--End about-->
<!--Start footer-->
<section class="footer">
    <div class="info">
        <div class="map">
            <p>CI, Abidjan - angré</p>
        </div>
        <div class="contacts">
            <p>+225 0123456789 / +01 234567890</p>
            <p>rise@mail.com</p>
        </div>
        <div class="follow-us">
            <ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="author">
        <p>&copy; <?=date('Y')?> Create by <span class="green">Addev</span> | All Right Reserved</p>
    </div>
</section>
<!--End footer-->

<?php
    require_once(__DIR__."/include/footer.php");
?>