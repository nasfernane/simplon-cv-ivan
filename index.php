<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Ivan Titov</title>

    <!-- link Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="css/index_light.css" id="theme-link">
</head>

<body>

    <div id="main_wrap">

        <header>
            <div id="logo">
                <a href="#landing_page" class="js-scrollTo">Titov Ivan</a>
            </div>
            <nav>
                <a href="#about_page" class="js-scrollTo">about</a>
                <a href="#skillsPage" class="js-scrollTo">skills</a>
                <a href="#contact_form" class="js-scrollTo">contact</a>
                <button class="switch_theme_color"></button>
            </nav>
        </header>

        <section id="landing_page"> </section>

        <section id="about_page">
            <div id="about_page_content">
                <article>
                    <div id="profile">
                        <img src="img/photo_ivan.png" alt="Photo Ivan" class="img-fluid">
                        <div id="profile_infos">
                            <p><strong>Nom:</strong> Ivan Titov</p>
                            <p><strong>Profil:</strong> Développeur Web</p>
                            <p><strong>Mail: </strong>kash174rus@gmail.com</p>
                            <p><strong>Tel:</strong> +33(0)7 5211 22 90</p>
                        </div>
                    </div>
                    <div id="skills_chart">
                        <img src="img/skills2.png" class="img-fluid" alt="Graphique des Compétences">
                    </div>
                </article>
                <aside>
                    <h1>A propos de moi</h1>
                    <h2>Ma mission :</h2>
                    <p>J’aide les entreprises du domaine de la comptabilité, de la finance et du crédit à établir leur présence sur le web pour être visibles de leurs prospects ou à faire évoluer leur site Internet pour offrir de nouveaux services à leurs clients.</p>
                    <h2>Mes engagements : visibilité et différenciation.</h2>
                    <p>Ayant grandi en Russie, j’y ai obtenu une qualification de comptable avant de suivre des études supérieures en finance et crédit. C’est à cette occasion que j’ai découvert les deux difficultés que rencontrent de nombreuses entreprises de ce domaine : comment tirer parti de la technologie pour se faire connaître de leurs prospects et, une fois ceux-ci devenus des clients, les conserver ?</p>
                    <p>Grâce à ma connaissance du domaine et une solide formation en développement web, je vous aide à répondre à ces questions et vous accompagne dans la mise en œuvre de solutions efficaces et sécurisées. Ensemble, nous déterminons vos besoins en fonction de vos objectifs et concevons les outils adaptés, dans le respect de votre budget.</p>
                    <p>Que vous souhaitiez réaliser un simple site vitrine ou concevoir des services innovants à faire pâlir vos concurrents, nous définirons ensemble la bonne stratégie à adapter pour répondre à vos objectifs tout en véhiculant une image professionnelle et sécurisante de votre entreprise.</p>
                </aside>
            </div>
        </section>

        <section id="skillsPage">
            <h2>Compétences</h2>
            <div id="skillsPage__skillBlock">
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse1"></div>
                    <h3>Développement web</h3>
                </div>
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse2"></div>
                    <h3>Sécurité de vos données</h3>
                </div>
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse3"></div>
                    <h3>Analyse comptable<br /> et financière</h3>
                </div>
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse4"></div>
                    <h3>Travail Collaboratif</h3>
                </div>
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse5"></div>
                    <h3>Méthodes agiles</h3>
                </div>
                <div class="skillsPage__skillBlock-item">
                    <div class="skillsPage__skillBlock-ellipse6"></div>
                    <h3>Initiatives & innovation</h3>
                </div>
            </div>
        </section>

        <section id="contact_form">
            <!-- Formulaire de contact -->
            <form method="post" action="">
                <input type="text" name="name" required placeholder="Votre nom" />
                <input type="email" name="email" required placeholder="Votre email" />
                <input type"text" name="message_subject" placeholder="Sujet du message" />
                <textarea type="text" name="commentaire" id="commentaire" placeholder="Envoyez-moi un message..." required><?php if (isset($_POST['commentaire'])) echo htmlspecialchars($_POST['commentaire']); ?></textarea>
                <input id="submit" type="submit" value="Envoyer" name="mailform" />
            </form>


            <?php
            if (isset($_POST['commentaire'])) {

                $email = "nasfernane@gmail.com";
                $email_to = "nasfernane@gmail.com";
                $email_subject = "Le sujet de votre email";

                function died($error)
                {
                    // Messages d'erreur
                    echo "Nous sommes désolés, mais des erreurs ont été détectées dans le formulaire que vous avez envoyé. ";
                    echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
                    echo $error . "<br /><br />";
                    echo "Merci de corriger ces erreurs.<br /><br />";
                    die();
                }

                // si la validation des données attendues existe
                if (!isset($_POST['commentaire'])) {
                    died('Nous sommes désolés, mais le formulaire que vous avez soumis semble poser problème.');
                }

                $commentaire = $_POST['commentaire']; // required

                $error_message = "";

                // Prend les caractères alphanumériques + le point et le tiret 6
                $string_exp = "/^[A-Za-z0-9 .'-]+$/";

                if (strlen($commentaire) < 2) {
                    $error_message .= 'Le commentaire que vous avez entré ne semble pas être valide.<br />';
                }

                if (strlen($error_message) > 0) {
                    died($error_message);
                }

                $email_message = "Détail.\n\n";
                $email_message .= "Commentaire : " . $commentaire . "\n";

                // create email headers
                $headers = 'From: ' . $email . "\r\n" .
                    'Reply-To: ' . $email . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                mail($email_to, $email_subject, $email_message, $headers);
                echo ("<p id=\"message_remerciement\">Votre message a bien été envoyé.</p>");
            }
            ?>

        </section>

    </div>

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="javascript/darkmode.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-scrollTo').on('click', function() { // Au clic sur un élément
                var page = $(this).attr('href'); // Page cible
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate({
                    scrollTop: $(page).offset().top
                }, speed); // Go
                return false;
            });
        });
    </script>
</body>

</html>