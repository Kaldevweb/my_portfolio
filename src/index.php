<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="portfolio, intégrateur web, développeur web, back-end, front-end, webdesigner, developpeur, professionnel, réalisation, kévin, ah-loye">
    <meta name="descritpion" content="Le portfolio de Kévin Ah-loye qui présente ses réalisations et ses qualités professionnelles et personnelles.">
    <meta name="author" content="Kévin Ah-Loye Law-Vaï">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kévin Ah-loye | Développeur Web</title>

    <!-- LINK CSS -->
    <!-- build:css css/min.css -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- endbuild -->
</head>
<body>
<div id="container">
    <div id="loadingPage">
            <svg id="svg_loadingPage" xmlns="http://www.w3.org/2000/svg" width="300" height="300" viewBox="0 0 130.75 93.75">
                <path id="path_loading" fill="none" stroke="#000" stroke-miterlimit="10" d="M31.368 58.244L49.31 19.88h16.76l17.106 33.942H56.142l-3.916 8.818h35.32l14.465 29.203 27.127.047v-9.87h-18.81L72.027 2.5H41.984L20.38 47.195V2.5H3v89.39h17.38V69.542l14.712 22.3h17.133z"/>
            </svg>
    </div>
    <!-- PAGE CONTACT -->
    <div id="pageContact">
        <div id="contenuContact">
            <section id="headerArticle_contact">
                <div class="container">
                    <h2>Mon <span class='caracteristique'>ouverture d’esprit</span> me permet de prendre les critiques comme de bons conseils</h2>
                    <div id="titleBand"><h1>Contact</h1></div>
                </div>
            </section>
            <section id="contentArticle">
                <div class="container">
                    <div id="blockContenu_pro" class="articleTable">
                        <div id="liste_contact">
                            <ul>
                                <li>Vous souhaiteriez faire appel à mes services ?</li>
                                <li>Vous auriez besoin de conseils pour vos projets ?</li>
                                <li>Vous désireriez me proposer une offre d’emploi ?</li>
                                <li>Vous aimeriez tout simplement discuter avec moi ?</li>
                            </ul>
                        </div>
                        <div id="formulaire_contact">
                            <form action="envoyer.php" id="formulaireKal" method="post">
                                <div id="globalInput">
                                    <input class='inputForm_contact' type="text" name='nomExpediteur' required placeholder='Nom Prénom' maxlength='42' >
                                </div>
                                <div id="globalInput">
                                    <input class='inputForm_contact' type="text" name='sujetExpediteur' required placeholder='Sujet' maxlength='40'>
                                </div>
                                <div id="globalInput">
                                    <input class='inputForm_contact' type="email" name='courrielExpediteur' required placeholder='Courriel'>
                                </div>
                                <div id="globalInput">
                                    <textarea name="messageExpediteur" id="messageExpediteur" required placeholder='Message' rows="4"></textarea>
                                </div>
                                <input id='btnEnvoyerCourriel' type='submit' name='btn_Envoyer' value='Envoyer' title='Envoyer'> </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div id="coordonnees">
                    <div class="containerFlexCoord">
                        <div id="coordGlobal">
                            <div class="coordIco">
                                <i class="fa fa-user ico_contact" aria-hidden="true"></i>
                            </div>
                            <div id="coordNoIco">
                                <div id="coordTitle">Développeur Web</div>
                                <div id="coordTxt">Kévin Ah-loye Law-Vaï</div>
                            </div>
                            <div class="nofloat"><!-- BLOCK coordIco coordNoIco --></div>
                        </div>
                        <div id="coordGlobal">
                            <div class="coordIco">
                                <i class="fa fa fa-envelope ico_contact" aria-hidden="true"></i>
                            </div>
                            <div id="coordNoIco">
                                <div id="coordTitle">Adresse courriel</div>
                                <div id="coordTxt">kevin.ahloye@gmail.com</div>
                            </div>
                            <div class="nofloat"><!-- BLOCK coordIco coordNoIco --></div>
                        </div>
                        <div id="coordGlobal">
                            <div class="coordIco">
                                <i class="fa fa-phone ico_contact" aria-hidden="true"></i>
                            </div>
                            <div id="coordNoIco">
                                <div id="coordTitle">Téléphone</div>
                                <div id="coordTxt">418 376-8495</div>
                            </div>
                            <div class="nofloat"><!-- BLOCK coordIco coordNoIco --></div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="logoFooter_contact"><img src="img/logo_black.svg" alt="Logo Kevin AH-LOYE en noir"></div>
            <div id="footerCredit"><p>Tous droits réservés © Kevin AH-LOYE LAW-VAÏ</p></div>
        </div>
    </div>
    <!-- PAGE PROFIL PERSONNEL -->
    <section id="profil_personnel">
        <div id='bg_video_perso'>
            <div id="vidBgPerso">
                <div id="vidBgFlex">
                    <div class="container">
                        <h1>Kévin AH-LOYE</h1>
                        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="560px" height="270px" viewBox="0 0 560 270" enable-background="new 0 0 560 270" xml:space="preserve">
                            <image overflow="visible" width="560" height="270" xlink:href="img/mots_perso.png" ></image>
                        </svg>
                        <i class="fa fa-chevron-down chevronAnim" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <video class="covervid-video-perso" autoplay loop muted poster="video/stone.jpg">
                <source src="video/calme.webm" type="video/webm">
                <source src="video/calme.mp4" type="video/mp4">
            </video>
        </div>

        <!-- QUI SUIS-JE -->
        <article id='article_apropos'>
            <section id="headerArticle_apropos">
                <div class="container">
                    <div class="centrerBlock">
                        <h2>Bonjour, je vous souhaite la bienvenue sur mon portfolio</h2>
                        <p><img id='portraitAnim' class='rollInc' src="img/profil_portrait.png" alt="Photo portrait du visage de Kévin AH-LOYE"></p>
                    </div>
                    <div id="titleBand"><h1>Qui suis-je ?</h1></div>
                </div>
                <div class="nofloat"><!-- BLOCK h2 img --></div>
            </section>

            <section id="contentArticle">
                <div class="container">
                    <div id="blockContenu_pro" class='blockContenu_proUn'>
                        <h2>Mieux me connaitre</h2>
                        <p>
                            Originaire de l'île de la Réunion, j'ai travaillé en tant que comptable, ce qui m'a rendu rigoureux et méthodique dans mon travail.
                            <br> Par la suite, j'ai pris conscience que la comptabilité n'était pas faite pour moi, mon désir de créer était plus grand. M'exprimer et laisser aller ma créativité et mon imagination ont pris le dessus.
                            <br><br> Après plusieurs recherches, j'ai pris connaissance des métiers qui sont liées au web. J’ai réalisé que le travail dans le domaine du web pouvait allier l’informatique, la recherche, la création, le design…, beaucoup de choses qui me passionnaient.
                            <br> J'ai donc décidé de me lancer dans une nouvelle aventure au Québec  afin de devenir un développeur web.
                        </p>
                    </div>

                    <div id="blockContenu_pro" class='blockContenu_proDeux'>
                        <h2>Objectif personnel</h2>
                        <p>
                            Mon objectif principal est de vivre au Québec en tant que développeur web dans une agence web, dans une start-up qui, dans la mesure du possible, partage mon état esprit : travailler sérieusement mais dans la bonne humeur.
                            <br> Je désire également  poursuivre ma passion et accroître mes connaissances, mon expérience dans ce domaine tout  en apportant mes compétences, mon enthousiasme et ma détermination.

                        </p>
                    </div>

                    <div id="blockContenu_pro" class='blockContenu_proTrois'>
                        <h2>Intêrets personnels</h2>
                            <div id="intPersoListe">
                                <div class='svgBlock_perso'>
                                    <svg class='svg_perso' xmlns="http://www.w3.org/2000/svg" viewBox="273.1 296.5 65.8 45.8">
                                        <path d="M306 297c-2.7 0-5.3.7-7.7 2.1-.6.3-.8 1.1-.5 1.7.3.6 1.1.8 1.7.5h.1c4-2.3 8.9-2.3 12.9 0 .6.4 1.4.2 1.7-.4.4-.6.2-1.4-.4-1.7h-.1c-2.4-1.5-5-2.2-7.7-2.2zm0 4c-2 0-3.9.5-5.7 1.5-.6.3-.8 1.1-.5 1.7.3.6 1.1.8 1.7.5h.1c2.7-1.6 6.1-1.6 8.8 0 .6.4 1.4.2 1.7-.4.4-.6.2-1.4-.4-1.7h-.1c-1.7-1.1-3.6-1.6-5.6-1.6zm0 4.1c-1.3 0-2.5.3-3.7 1-.6.3-.8 1.1-.5 1.7.3.6 1.1.8 1.7.5h.1c1.5-.9 3.3-.9 4.8 0 .6.4 1.4.2 1.7-.4.4-.6.2-1.4-.4-1.7h-.1c-1.1-.8-2.3-1.1-3.6-1.1zm-17.2 5.8c-8.4 0-15.3 6.9-15.3 15.4s6.9 15.4 15.3 15.4c6.2 0 11.6-3.8 14-9.5h6.4c2.4 5.6 7.8 9.4 14 9.5 8.4 0 15.3-6.9 15.3-15.4s-6.9-15.4-15.3-15.4h-34.4zm0 2.5h34.4c7.1 0 12.8 5.8 12.8 12.9 0 7.2-5.7 12.9-12.8 12.9-5.4 0-10.2-3.4-12.1-8.6-.2-.5-.7-.8-1.2-.8H302c-.5 0-1 .3-1.2.8-1.8 5.2-6.6 8.6-12.1 8.6-7.1 0-12.8-5.8-12.8-12.9.1-7.2 5.8-12.9 12.9-12.9zm34.5 2.8c-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8-.1-2.1-1.8-3.8-3.8-3.8zm-35.3 2.5c-.7 0-1.2.6-1.2 1.3v5h-5c-.7 0-1.3.5-1.3 1.2s.5 1.3 1.2 1.3h5v5c0 .7.5 1.3 1.2 1.3s1.3-.5 1.3-1.2v-5h5c.7 0 1.3-.5 1.3-1.2s-.5-1.3-1.2-1.3h-5v-5c0-.8-.6-1.4-1.3-1.4zm35.3 0c.7 0 1.3.5 1.3 1.3 0 .7-.6 1.3-1.3 1.3-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3zm-6.3 3.8c-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8s3.8-1.7 3.8-3.8c0-2.1-1.7-3.8-3.8-3.8zm12.5 0c-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8 0-2.1-1.7-3.8-3.8-3.8zM317 325c.7 0 1.3.6 1.3 1.3 0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3c.1-.7.6-1.3 1.3-1.3zm12.5 0c.7 0 1.3.6 1.3 1.3 0 .7-.6 1.3-1.3 1.3s-1.3-.6-1.3-1.3c.1-.7.6-1.3 1.3-1.3zm-6.2 3.8c-2.1 0-3.8 1.7-3.8 3.8 0 2.1 1.7 3.8 3.8 3.8 2.1 0 3.8-1.7 3.8-3.8-.1-2.1-1.8-3.8-3.8-3.8zm0 2.5c.7 0 1.3.6 1.3 1.3 0 .7-.6 1.3-1.3 1.3-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3z"/>
                                    </svg>
                                </div>
                                <div class='pBlock_perso'>
                                    <p class='p_Svg'>J'adore les jeux-vidéo, spécialement les MMORPG (Jeux de rôle en ligne massivement multijoueur) car l'évolution dans ce genre de jeux, reflète celle de la vie. Pour être le meilleur, il faut se battre, se surpasser, surmonter des défis, acquérir de l'expérience, tomber pour mieux se relever, adopter les meilleures stratégies.</p>
                                </div>
                            <div class="nofloat"><!-- BLOCK SVG et p_svg --></div>
                            </div>

                            <div id="intPersoListe">
                                <div class='svgBlock_perso'>
                                    <svg class='svg_perso' xmlns="http://www.w3.org/2000/svg" viewBox="31 14.8 65.7 76.7">
                                        <path d="M49.2 66.4h30.5c2.4 0 2.4 0 2.4-3.7V35.9H45.5v26.8c0 3.7 0 3.7 3.7 3.7zm-2-9.1c7.7 0 13.9-6.2 13.9-13.8 0-7.7-6.2-13.9-13.9-13.9-7.6 0-13.8 6.2-13.8 13.9-.1 7.5 6.2 13.8 13.8 13.8zm16.6-13.9c7.6 0 13.8-6.2 13.8-13.9 0-7.6-6.2-13.8-13.8-13.8S50 21.9 50 29.5c0 7.7 6.2 13.9 13.8 13.9zm16.7 13.9c7.6 0 13.8-6.2 13.8-13.8 0-7.7-6.2-13.9-13.8-13.9-7.7 0-13.9 6.2-13.9 13.9 0 7.5 6.2 13.8 13.9 13.8zM62.4 77.6c0 5.2 6.3 13.1 17.7 13.1 12 0 15.7-10.4 15.7-15.2 0-.9-2.1-1.3-2.7-.6-1.3 3.3-2.8 4.5-4.5 4.5-9 0-6.1-10.7-16.8-10.7-6.2-.1-9.4 4.7-9.4 8.9zm2.8 0c0-4.2-3.1-9-9.3-9-10.7 0-7.9 10.7-16.8 10.7-1.7 0-3.3-1.2-4.5-4.5-.6-.7-2.8-.3-2.8.6 0 4.9 3.7 15.2 15.7 15.2 11.4.1 17.7-7.7 17.7-13z"/>
                                    </svg>
                                </div>
                                <div class='pBlock_perso'>
                                    <p class='p_Svg'>J'accorde beaucoup d'intérêt  à la cuisine malgré que je ne sois pas un grand cuisinier. Cuisiner me permet de nourrir ma créativité, en confectionnant  de bons petits plats. La cuisine, c'est comme un site internet, il faut qu'elle soit attrayante, raffinée et procurer une certaine émotion.</p>
                                </div>
                            <div class="nofloat"><!-- BLOCK SVG et p_svg --></div>
                            </div>
                            <div id="intPersoListe">
                                <div class='svgBlock_perso'>
                                    <svg class='svg_perso' xmlns="http://www.w3.org/2000/svg" viewBox="15.8 15 65.5 41">
                                        <path d="M77.3 44c-1.1-2-1.9-2.9-3-4-2.2-2.2-3.9-4.3-4.9-4.8-1-.5-1.7-.5-1.7-.5s-.5-.3-.4-.9c.1-.7 1.2-1.4 1.2-1.4s-.2-1.3-.1-2.1 1-3.8.5-6.4c-.5-2.3-1.7-2.9-2.3-3.7-.4-.5-1-1.7-1.9-2.3-3.6-2.6-7.1-1.5-8.1-1.1-1.8.6-4.5 1.2-5.2 2.4-.5.9.5 1.5.5 1.5s-1.2 3.6-1.3 4c-.1.7.5.9.6 1.3.1.9-1.2 2.5-2 3.6-.2.4-.2.6-.1.9.2.7 1.6.4 1.8.9.1.3-.3 1-.2 1.2.1.3.7.4.7.4s-.5.4-.4.8c.1.4.9.5.9 1s-1 1.8.2 2.5c1.4.8 3.6-.4 4.2-.2.9.3.4 1.3.6 1.8.2.6.8 1.6.8 1.6s-1.9 4.3-2.4 6.5c-.3 1.5-.6 3.4-.7 4.1-.1.4-.4 1.6-.7 2.6h-4.8c-.6-.5-1.3-1-2-1.3-1.3-.6-3.2-.2-3.2-.2s-1.1-1.3-3.1-1.3c-2.7 0-5.1 1.6-6.4 2.8H19.9s-.8 0-1.4-.5c-.7-.6-.5-1.4-.4-1.8 2-6.7 6.5-17.3 7-18.3.2-.4.7-.7 1.1-.8 2.2 10.7 4.4 14.3 4.4 14.3l1.8-.4L26 15.8l-1.8.4s-.3 4.5 1.6 14.6c-.8.3-1.3.8-1.8 1.3-.6.6-5 10.7-7.4 19.1v.1c0 .2-.3 1.6.6 2.8.8 1 2.1 1.1 2.6 1.1h60.7c-.6-3.7-1.5-8-3.2-11.2z"/>
                                    </svg>
                                </div>
                                <div class='pBlock_perso'>
                                    <p class='p_Svg'>J'aime passer des heures et des heures devant l'ordinateur. Ça ne me dérange pas de rester toute une journée à travailler, à jouer, à «surfer» sur le net, à m'informer sur tout et rien, à approfondir mes connaissances sur les techniques de programmation, etc. Que ce soit pour le travail ou par passion, l’ordinateur reste un de mes passe-temps favoris.</p>
                                </div>
                            <div class="nofloat"><!-- BLOCK SVG et p_svg --></div>
                            </div>
                    </div>
                </div>
            </section>
            <div id="footerPerso">
                <a class='btnCv' href="files/cv_kal.pdf" target="_blank" data-hover="Consulter mon CV" title="Curriculum Vitae"><span class='spanCv'>Consulter mon CV</span></a>
                <div id="footerCredit"><p>Tous droits réservés © Kevin AH-LOYE LAW-VAÏ</p></div>
            </div>
        </article>
    </section>

    <!-- PAGE PROFIL PROFESSIONEL -->
    <section id="profil_professionnel">
        <div id='bg_video_pro'>
            <div id="vidBgPro">
                <div id="vidBgFlex">
                    <div class="container">
                        <h1>Kévin AH-LOYE</h1>
                        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="560px" height="270px" viewBox="0 0 560 270" enable-background="new 0 0 560 270" xml:space="preserve">
                            <image overflow="visible" width="560" height="270" xlink:href="img/mots_pro.png" ></image>
                        </svg>
                        <i class="fa fa-chevron-down chevronAnim" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <video class="covervid-video-pro" autoplay loop muted poster="video/coding.jpg">
                <source src="video/coding.webm" type="video/webm">
                <source src="video/coding.mp4" type="video/mp4">
            </video>
        </div>

        <!-- MES COMPETENCES -->
        <article id='article_competences'>
            <section id="headerArticle_competences">
                <div class="container">
                    <h2>Ma <span class="caracteristique">rigueur</span> me permet d’effectuer mon travail consciencieusement et sérieusement</h2>
                    <div id="titleBand"><h1>Mes Compétences</h1></div>
                </div>
            </section>

            <section id="contentArticle" class='contentArticleCheat'>
                <div class="container">
                    <div class='blockCompetence'>
                        <h2>Web Designer</h2>
                        <svg class='svg_competence' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125 100.144">
                          <circle fill="none" cx="62.498" cy="79.758" r="2.427"/>
                          <path fill="none" d="M5.353 69.5h114.29V5.085H5.353V69.5z"/>
                          <path fill="#FFF" d="M121.185.072H3.915C1.86.072.09 1.632.09 3.687v78.315c0 2.055 1.77 3.78 3.823 3.78h46.18c-.055 1.177-.423 6.245-2.832 8.702-1.89 1.938-4.53 3.75-3.5 4.682.25.572 1.44.904 4.13.904h30.38c3.07 0 4.14-.5 4.15-1.25h-.102v-.25h-.11c-.137-1.01-2.185-2.505-3.732-4.077-2.41-2.457-2.775-7.525-2.83-8.703h45.56c2.055 0 3.72-1.725 3.72-3.78V3.692c-.008-2.058-1.67-3.618-3.73-3.618zM62.498 82.185c-1.342 0-2.427-1.082-2.427-2.426s1.09-2.43 2.43-2.43 2.43 1.08 2.43 2.43c0 1.34-1.09 2.42-2.42 2.42zM119.645 69.5H5.353V5.085h114.29V69.5h.002z"/>
                          <path fill="#C5D92D" d="M111.736 21.726l-2.077-.395c1.14-2.31 2.09-4.45 2.83-6.37l2.11.31c-.75 1.95-1.72 4.12-2.87 6.46zm-10.78.064l-2-.524c1.604-2.346 3.203-4.523 4.752-6.473l1.95.59c-1.533 1.927-3.114 4.08-4.703 6.408z"/>
                          <path fill="#C5D92D" d="M105.657 15.382l-1.95-.59c2.185-2.748 4.227-4.98 5.912-6.455 2.13-1.873 3.71-2.566 5.1-2.246 1.64.38 1.7 1.9 1.56 3.19-.16 1.49-.72 3.5-1.68 6l-2.11-.31c2.18-5.67 1.65-7.22 1.44-7.56-.59.19-2.99 1.33-8.28 7.986zm-8.412 28.83l-1.867-.684c3.208-3.346 5.442-6.723 9.232-13.023 1.9-3.154 3.598-6.242 5.05-9.174l2.076.4c-1.464 2.96-3.177 6.07-5.09 9.25-3.84 6.38-6.108 9.81-9.4 13.24zM11.938 13.277h-2.17v-.068c0-1.48 2.008-2.69 4.482-2.69h87.454v1.34H14.25c-1.276 0-2.313.6-2.313 1.34v.063zm56.844 55.125l2.304-1.418c.022-.016 2.342-1.45 3.41-2.62l1.89.66c-.358.395-.827.806-1.31 1.188 1.783-.395 4.15-1.043 6.785-2.084l1.17 1.13c-6.11 2.415-10.83 2.847-11.02 2.864l-3.22.28z"/>
                          <path fill="#C5D92D" d="M83.03 65.26l-1.17-1.132c.334-.13.617-.248.89-.363 7.73-3.29 9.86-6.947 8.768-15.053l-.01-.068.16-.867-6.534-1.502.157-.553c1.1-3.752 5.09-10.646 9.23-17.537 1.44-2.377 2.93-4.705 4.44-6.92l2 .525c-1.5 2.193-2.98 4.502-4.4 6.86-3.91 6.503-7.68 13.003-8.95 16.76l6.42 1.474-.323 1.783c1.133 8.54-1.323 12.633-9.71 16.203-.296.126-.6.25-.953.39zm-6.644-.237l-1.89-.66c1.335-1.463 2.047-3.838 2.11-7.06.09-4.38 1.343-5.23 4.372-7.278.39-.266.815-.553 1.274-.873l1.625.89c-.47.327-.9.618-1.296.888-2.93 1.986-3.72 2.52-3.8 6.39-.06 3.45-.87 6.04-2.39 7.703zm34.197.344h-19.45v-1.344h19.45c1.2 0 2.17-.604 2.17-1.342V26.99h2.174v35.69c0 1.482-1.95 2.687-4.344 2.687zm-43.29 0H14.11c-2.396 0-4.343-1.205-4.343-2.686V16.97h86.216v1.34H11.938v44.37c0 .74.975 1.343 2.17 1.343h53.187v1.344z"/>
                          <path fill="#C5D92D" d="M71.806 44.542H20.632L42.73 30.888l5.947 3.842 8.392-5.523 12.71 7.816v-11.68H23.17V39.32H21V24h50.955v16.25l-14.83-9.116-8.435 5.543-5.994-3.87L25.876 43.2h45.93M20.82 49.246h51.033v1.344H20.82zm0 3.357h51.033v1.342H20.82zm0 3.357H50.4v1.34H20.82z"/>
                        </svg>
                        <p>Étant créatif et novateur, je suis capable de concevoir un design graphique esthétique, ergonomique et simple d’utilisation. Le tout en prenant soin de placer clairement l’information et en prenant en compte les tendances du moment.</p>
                    </div>
                    <div class='blockCompetence'>
                        <h2>Développement Front-End</h2>
                        <svg class='svg_competence' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125 100.144">
                          <path fill="#010101" d="M87.56 40.85h11.17v2.435H87.56zm0 5.06h22.337v2.435H87.56zm0 5.062h22.337v2.434H87.56zm0 5.06h22.337v2.436H87.56z"/>
                          <path fill="none" stroke="#010101" stroke-miterlimit="10" d="M87.56 25.21h22.337v12.94H87.56zm0 0l22.337 12.942m-22.337 0l22.337-12.942"/>
                          <path fill="#010101" d="M87.56 14.556h22.337v6.47H87.56z"/>
                          <path fill="none" d="M87.56 40.85h11.17v2.435H87.56zm0-15.64h22.337v12.94H87.56zm0 20.7h22.337v2.435H87.56zm0-31.354h22.337v6.47H87.56zm0 41.476h22.337v2.436H87.56zm0-5.06h22.337v2.434H87.56zM60.073 79.76c0-1.34 1.086-2.427 2.426-2.427-1.35 0-2.43 1.086-2.43 2.426s1.08 2.42 2.42 2.42c-1.34 0-2.427-1.09-2.427-2.43z"/>
                          <path fill="none" d="M62.5 77.333c1.34 0 2.425 1.086 2.425 2.426s-1.085 2.42-2.425 2.42c1.34 0 2.424-1.088 2.423-2.43 0-1.34-1.088-2.428-2.427-2.428z"/>
                          <circle fill="none" cx="62.499" cy="79.759" r="2.426"/>
                          <circle fill="none" cx="62.499" cy="79.759" r="2.426"/>
                          <path fill="#010101" d="M77.78 4.313H4.668V70.7H78.65V4.312"/>
                          <path fill="#010101" d="M121.187.072H3.914C1.86.072.09 1.635.09 3.688v78.316c0 2.055 1.77 3.78 3.824 3.78h46.178c-.054 1.18-.422 6.25-2.83 8.703-1.9 1.938-4.538 3.75-3.508 4.68.25.575 1.434.905 4.126.905h30.38c3.066 0 4.14-.502 4.15-1.25h-.105v-.248h-.108c-.137-1.012-2.184-2.505-3.73-4.08-2.41-2.452-2.777-7.52-2.83-8.7h45.557c2.055 0 3.72-1.725 3.72-3.78V3.688c-.006-2.058-1.67-3.618-3.727-3.618zM62.5 82.185c-1.343 0-2.428-1.083-2.428-2.426 0-1.34 1.085-2.43 2.427-2.43 1.34 0 2.42 1.08 2.42 2.42s-1.09 2.425-2.43 2.425zM119.644 69.5H5.354V5.085h114.29V69.5z"/>
                          <path fill="#C5D92D" d="M51.718 37.41v1.918H20.566v-1.92h31.152zm-11.265-1.246H20.566v-1.922h19.887v1.922zM13.74 11.526h5.48v1.92h-5.48v-1.92zm0 3.236h13.653v1.92H13.74v-1.92zm0 3.236h18.204v1.92H13.74V18zm0 3.234h13.653v1.92H13.74v-1.92zm0 3.236h13.653v1.92H13.74v-1.92zm0 3.235h5.48v1.92h-5.48v-1.92zm0 3.237h9.16v1.92h-9.16v-1.92zm0 3.302h5.48v1.922h-5.48v-1.922zm0 3.167h5.48v1.91h-5.48V37.4zm0 3.23h5.48v1.92h-5.48v-1.92zm0 6.47h5.48v1.92h-5.48v-1.92zm-1.313 14.87h-1.66v-1.927h1.66v1.922zm0-3.24h-1.66v-1.92h1.66v1.92zm0-3.236h-1.66v-1.92h1.66v1.92zm0-3.238h-1.66v-1.92h1.66v1.922zm0-3.237h-1.66v-1.92h1.66v1.92zm0-3.238h-1.66v-1.92h1.66v1.92zm0-3.237h-1.66v-1.92h1.66v1.92zm0-3.236h-1.66V37.4h1.66v1.92zm0-3.234h-1.66v-1.92h1.66v1.923zm0-3.235h-1.66v-1.92h1.66v1.92zm0-3.236h-1.66V27.7h1.66v1.92zm0-3.236h-1.66v-1.92h1.66v1.92zm0-3.24h-1.66v-1.92h1.66v1.92zm0-3.233h-1.66V18h1.66v1.92zm0-3.235h-1.66v-1.92h1.66v1.92zm0-3.236h-1.66v-1.92h1.66v1.92zM22.9 61.98h-9.16v-1.92h9.16v1.92zm2.042-3.235h-11.2v-1.92h11.2v1.92zm11.203-3.235H13.74v-1.92h22.403v1.92zm4.31-3.234H13.74V50.35h26.713v1.923zM57.38 49.04H20.57v-1.92h36.81v1.92zm0-3.237H13.74v-1.92h43.64v1.92zm6.78-3.23H20.57v-1.92h43.59v1.92zm6.79 0h-5.47v-1.92h5.478v1.92z"/>
                        </svg>
                        <p>Je suis capable de comprendre, et d’utiliser les langages de programmation pour coder un site internet en respectant la maquette graphique du designer. Je me tiens à jour au niveau des dernières techniques et technologies.</p>
                    </div>
                    <div class='blockCompetence'>
                        <h2>Développement Back-End</h2>
                        <svg class='svg_competence' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125 100.144">
                          <circle fill="none" cx="62.498" cy="79.758" r="2.427"/>
                          <path fill="none" d="M5.352 69.5h114.29V5.085H5.352V69.5z"/>
                          <path fill="#FFF" d="M121.185.072H3.913C1.86.072.09 1.632.09 3.687v78.315c0 2.055 1.77 3.78 3.823 3.78h46.18c-.055 1.177-.423 6.245-2.832 8.702-1.89 1.938-4.53 3.75-3.5 4.682.25.574 1.436.904 4.128.904h30.38c3.068 0 4.14-.5 4.15-1.25h-.104v-.25h-.11c-.14-1.01-2.185-2.503-3.73-4.077-2.41-2.457-2.78-7.525-2.83-8.703H121.2c2.054 0 3.72-1.725 3.72-3.78V3.692c-.01-2.058-1.674-3.618-3.73-3.618zM62.498 82.185c-1.342 0-2.427-1.082-2.427-2.426s1.09-2.43 2.43-2.43 2.43 1.08 2.43 2.43c0 1.34-1.09 2.42-2.423 2.42zM119.645 69.5H5.352V5.085h114.29V69.5h.003z"/>
                          <path d="M35.115 45.802l-14.794-6.48v-.082l14.8-6.48v-4.323l-19.56 9.09v3.508l19.565 9.088m7.133 1.627l8.725-29.547h-4.12L38.135 51.75h.002m71.404-14.344l-19.564-8.97v4.323l15.123 6.48v.08L89.973 45.8v4.32l19.566-8.965" fill="#FFF"/>
                          <g fill="#C5D92D">
                            <path d="M66.753 26.914c6.232 0 11.284-2.172 11.284-4.85 0-2.682-5.052-4.857-11.284-4.857-6.23 0-11.284 2.176-11.284 4.857 0 2.678 5.05 4.85 11.28 4.85zm.002 9.293c-6.232 0-11.285-2.174-11.285-4.86 0-.026.01-.052.01-.077h-.01v6.275h.01c.105 2.64 5.104 4.77 11.273 4.77 6.167 0 11.17-2.13 11.274-4.77h.01v-6.188c-.007 2.678-5.054 4.85-11.282 4.85zm11.283-4.864v-.074h-.01c.002.02.01.04.01.07z"/>
                            <path d="M66.755 43.738c-6.232 0-11.285-2.176-11.285-4.855 0-.027.01-.057.01-.084h-.01v6.27h.01c.105 2.64 5.104 4.77 11.273 4.77 6.167 0 11.17-2.13 11.274-4.77h.01v-6.18c-.007 2.67-5.054 4.844-11.282 4.844zm11.283-4.862v-.078h-.01c.002.03.01.053.01.078z"/>
                            <path d="M66.755 51.267c-6.232 0-11.285-2.172-11.285-4.854 0-.027.01-.053.01-.084h-.01v6.27h.01c.105 2.64 5.104 4.77 11.273 4.77 6.167 0 11.17-2.13 11.274-4.77h.01v-6.19c-.007 2.68-5.054 4.85-11.282 4.85zm11.283-4.857v-.08h-.01c.002.027.01.054.01.08zM66.755 28.505c-6.232 0-11.285-2.174-11.285-4.855 0-.03.01-.057.01-.082h-.01v6.275h.01c.105 2.643 5.104 4.773 11.273 4.773 6.167 0 11.17-2.13 11.274-4.773h.01v-6.188c-.007 2.678-5.054 4.85-11.282 4.85zm11.283-4.86v-.077h-.01c.002.025.01.05.01.076z"/>
                          </g>
                        </svg>
                        <p>Je peux concevoir des outils que les utilisateurs n’ont pas accès mais qui sont essentiels au bon fonctionnement du site, tels que des bases de données, des systèmes de gestions de données.</p>
                    </div>
                    <div class='blockCompetence'>
                        <h2>Design Responsive</h2>
                        <svg class='svg_competence' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 119.48 100.152">
                          <path fill="#C5D92D" d="M37.174 34.725h41.18v13.28h-41.18zM42.32 53.41h12.837v32.254H42.32zm17.777 0h18.65v4.232h-18.65zm0 7.46h18.65v4.23h-18.65zm0 7.457h18.65v4.232h-18.65zm0 7.458h18.65v4.232h-18.65zM7.93 10.362h103.62v13.235H7.93zm2.25 18.4h19.69V44.31H10.18z"/>
                          <path fill="#C5D92D" d="M27.993 28.762h6.563v3.766h-6.563zM10.18 42.426h6.105V62.36H10.18zm54.827-13.664h44.21v3.545h-44.21zm20.705 7.43h23.506v4.22H85.712zm0 7.434h23.506v4.218H85.712zm0 7.434h23.506v4.217H85.712z"/>
                          <g fill="#010101">
                            <path d="M111.687.152H7.792C3.495.152 0 3.646 0 7.944V72.88c0 4.296 3.495 7.79 7.792 7.79h1.3V63.79H5.194V7.944c0-1.433 1.164-2.598 2.597-2.598h103.9c1.44 0 2.6 1.165 2.6 2.598v55.844H88.31V80.67h23.377c4.297 0 7.793-3.494 7.793-7.79V7.943c0-4.296-3.496-7.792-7.793-7.792z"/>
                            <path d="M81.9 27.424H33.93c-2.2 0-4.06 1.785-4.06 3.896v10.39h5.194v-9.09H80.52v57.14H48.05v5.195c0 1.992-.767 3.813-2.01 5.193h35.94c2.137 0 3.732-2.4 3.732-4.545V31.32c0-2.147-1.71-3.896-3.812-3.896zM58.223 96.582c-1.224 0-2.217-1.068-2.217-2.39s.995-2.39 2.217-2.39c1.225 0 2.218 1.07 2.217 2.39 0 1.322-.993 2.39-2.217 2.39z"/>
                            <path d="M42.856 44.942c-.734-.395-1.578-.634-2.496-.634H16.882c-.948 0-1.83.254-2.596.673-1.543.85-2.598 2.42-2.598 4.33v45.65c0 2.86 2.336 5.197 5.193 5.197h23.48c1.31 0 2.46-.5 3.35-1.298 1.07-.954 1.75-2.34 1.75-3.896V49.3c0-1.938-1.04-3.525-2.6-4.358zm-12.74 50.69c-.273.387-.65.677-1.093.828-.212.073-.435.124-.67.124-.26 0-.505-.058-.735-.145-.86-.33-1.482-1.21-1.482-2.25 0-.74.32-1.4.813-1.84.1-.09.2-.17.32-.24.32-.196.69-.317 1.08-.317.07 0 .14.02.22.024.45.047.85.236 1.18.53.035.032.074.063.11.1.43.436.7 1.05.7 1.734 0 .54-.17 1.034-.457 1.436zM40.26 63.787v24.677H16.882V49.502H40.26v14.286z"/>
                          </g>
                          <path fill="#C5D92D" d="M16.883 49.502H40.26v6.748H16.883zm2.157 8.93l18.986-.088.05 10.955-18.985.08zm-.326 13.038H38.43v1.522H18.713zm0 3.704H38.43v1.523H18.713zm0 3.706H38.43v1.52H18.713zm0 3.704H38.43v1.522H18.713z"/>
                        </svg>
                        <p>Je suis apte à réaliser un site internet qui sera adaptable aux différentes plateformes. Je fais en sorte que le site internet soit structuré de manière à ce que la navigation et la lecture soit optimal et agréable, qu’importe le terminal utilisé.</p>
                    </div>
                </div>
            </section>
        </article>

        <!-- MES REALISATIONS -->
        <article id='article_realisations'>
            <section id="headerArticle_realisation">
                <div class="container">
                    <h2>Ma <span class="caracteristique">créativité</span> me permet de créer des projets uniques et innovants</h2>
                    <div id="titleBand"><h1>Mes Réalisations</h1></div>
                </div>
            </section>

            <section id="contentArticle">
                <div class="container">
                    <!-- Display realisation -->
                    <?php
                        include("realisations.php");
                    ?>
                </div>

                <section id='projetDetails' class='projetDetails'>
                    <div class="containerBtn"><div class='btnRetourReal'><i class='fa fa-arrow-up icoUp_real' aria-hidden='true'></i></div></div>
                    <div id="targetProjet"></div>
                </section>
            </section>
            <div id="footerPerso">
                <div id="footerCredit"><p>Tous droits réservés © Kevin AH-LOYE LAW-VAÏ</p></div>
            </div>
</article>
    </section>

    <!-- PAGE D'INTRODUCTION -->
    <section id="accueil_portfolio">
        <!-- FOR OPENING PERSONNAL PROFIL -->
        <section id="section_page_left" class="page_left">
            <!-- LOGO -->
            <svg class='logo_svg' xmlns="http://www.w3.org/2000/svg" width="130.75" height="93.75" viewBox="0 0 130.75 93.75">
                <path class="path-test" fill="none" stroke="#000" stroke-miterlimit="10" d="M31.368 58.244L49.31 19.88h16.76l17.106 33.942H56.142l-3.916 8.818h35.32l14.465 29.203 27.127.047v-9.87h-18.81L72.027 2.5H41.984L20.38 47.195V2.5H3v89.39h17.38V69.542l14.712 22.3h17.133z"/>
            </svg>
            <div id="pageLeftFlex">
                <div id="containerLeftFlex">
                        <div id="separateTitle"><h1>Kévin</h1><h1>Ah-Loye</h1></div>
                        <div id="open_left">
                            <svg class='svg_ico_acc' xmlns="http://www.w3.org/2000/svg" viewBox="-61 147 80.6 82.6">
                              <path fill="none" d="M-39.2 170c.1-.8 1.1-7.2 6.9-7.5-5.9.3-6.8 6.8-6.9 7.5 0 .1 0 .1 0 0 0 .1 0 .1 0 0 0 .1 0 .1 0 0zm19.9-7.2h.9-.9c-1.7.6-3.5.8-5.2.8 1.6.1 3.4-.1 5.2-.8zm11.4 7c-.2 0-.5 0-.7.2.2-.1.5-.2.7-.2zm-30.3 7.7c1.4 4.5 4.2 8.9 7.6 11.6 2 1.5 4.2 2.5 6.6 2.5-2.4 0-4.6-.9-6.6-2.5-3.4-2.7-6.1-7.1-7.6-11.6zm28.5 0c.1.1.2.2.4.2-.2 0-.3-.1-.4-.2zm-2.3-12.6c-.1-.8-.6-1.5-.6-2.1-.1.6.5 1.3.6 2.1zm-27.5 12.5c.2.2.5.4.7.4-.2-.1-.4-.2-.7-.4-.6-.6-1.1-1.8-1.4-3.3v-.3c0-1 .1-2 .1-3 .1-.4.3-.7.5-.8.1-.1.2-.1.3-.1-.1 0-.2.1-.3.1-.2.2-.4.4-.5.8-.1 1-.1 2-.1 3v.3c.3 1.4.8 2.7 1.4 3.3z"/>
                              <path fill="none" d="M-40.8 170.8c-.1 1-.1 2-.1 3v.3c.3 1.5.8 2.7 1.4 3.3.2.2.5.4.7.4h.2c.1 0 .3-.1.4-.2 1.4 4.5 4.2 8.9 7.6 11.6 2 1.5 4.2 2.5 6.6 2.5 2.4 0 4.7-1 6.7-2.6 3.4-2.7 6.1-7.1 7.5-11.5.1.1.2.2.4.2.3 0 .5-.1.8-.3.5-.4 1-1.2 1.3-2.3.1-.3.2-.7.3-1.1 0-.3.1-.5.1-.7 0-.5.1-1 0-1.4-.1-1-.4-1.8-.9-2.1-.1 0-.1 0-.2-.1-.2 0-.5 0-.7.2-.9-3.5-2.1-5.6-3.3-6.9-.2-.1-.5-.2-.7-.3 0 .5.6 1.3.6 2.1l-.6-.3c-1.4-.7-2.9-1.7-4.9-1.8h-1.7c-1.7.6-3.5.8-5.2.8-3.6 0-6.5-1.1-6.5-1.1-.4 0-.9-.1-1.2 0-5.9.3-6.9 6.7-6.9 7.5v.1c-.2-.2-.5-.3-.7-.3-.1 0-.2.1-.3.1-.4.2-.6.5-.7.9z"/>
                              <path d="M5.8 200c.7 0 1.3.1 2 .1-3.5-4-7.1-4.3-8.2-4.5-3.3-.8-7.3-.4-9.5-1.1-.4 3.1-6.4 5.6-13.8 5.6s-13.4-2.5-13.8-5.6c-2.1.7-6.2.3-9.5 1.1-1.7.4-9.5.9-13.7 15.5-.6 2-.4 4.1.6 5.9 3.5 6.6 21.7 8.6 36.5 8.6 5.3 0 11.2-.3 16.5-.9-1.8-2.5-2.8-5.6-2.8-8.9 0-8.7 7.1-15.8 15.7-15.8z"/>
                              <path d="M-41.1 179.1c1.6 4.2 4 8.3 7.1 11.3 1.7 1.7 3.6 3 5.7 3.8 1.4.6 2.9.9 4.4.9 1.5 0 3-.3 4.4-.9 2.1-.8 4.1-2.2 5.9-4 3-3 5.4-7 6.9-11.1 1.2-.3 2.4-2.6 2.9-5.4.5-3.1 0-5.7-1.1-6.2 0-.7.1-1.5.1-2.3 0-11.1-6.5-17.5-16.8-18.2-8.9-.6-15.6 2.9-18.7 8.8-1 2-1.6 4.5-1.8 7.2-.3 1.4-.5 2.9-.5 4.4h-.1c-1.3.2-1.9 3-1.3 6.2.4 3 1.7 5.3 2.9 5.5zm.3-8.3c.1-.4.3-.7.5-.8.1-.1.2-.1.3-.1.2 0 .5.1.7.3v-.1c.1-.8 1.1-7.2 6.9-7.5h1.2s2.9 1.1 6.5 1.1c1.6 0 3.4-.2 5.2-.8h1.7c2 .1 3.5 1 4.9 1.8l.6.3c-.1-.8-.6-1.5-.6-2.1.3.1.5.2.7.3 1.2 1.3 2.4 3.4 3.3 6.9.2-.2.5-.3.7-.2.1 0 .1 0 .2.1.5.2.8 1 .9 2.1v1.4c0 .2-.1.5-.1.7-.1.4-.2.8-.3 1.1-.3 1-.8 1.9-1.3 2.3-.3.2-.5.3-.8.3-.1 0-.3-.1-.4-.2-1.4 4.4-4.1 8.8-7.5 11.5-2 1.6-4.3 2.6-6.7 2.6-2.4 0-4.6-.9-6.6-2.5-3.5-2.6-6.2-7.1-7.6-11.6-.1.1-.2.2-.4.2h-.2c-.2 0-.5-.2-.7-.4-.6-.6-1.2-1.8-1.4-3.3v-.3c.2-1.1.2-2.1.3-3.1z"/>
                              <path d="M-17.2 189c-2 1.6-4.3 2.6-6.7 2.6 2.4 0 4.7-1 6.7-2.6 3.4-2.7 6.1-7.1 7.5-11.5-1.4 4.4-4.1 8.8-7.5 11.5zm8.7-11.5c-.3.2-.5.3-.8.3.2 0 .5-.1.8-.3.5-.4 1-1.2 1.3-2.3-.4 1-.8 1.9-1.3 2.3zm-30.1.2h-.2c.1.1.2.1.2 0 .1 0 .3-.1.4-.2-.1.1-.2.2-.4.2zm14.1-14c-3.6 0-6.5-1.1-6.5-1.1-.4 0-.9-.1-1.2 0h1.2s2.9 1.1 6.5 1.1zm-14.7 6.4c-.2-.2-.5-.3-.7-.3.2 0 .4.1.7.3zm26.5-5.5c-1.4-.7-2.9-1.7-4.9-1.8h-.8.8c2 .1 3.5 1.1 4.9 1.8zm5.8 7.4c-.1-1-.4-1.8-.9-2.1-.1 0-.1 0-.2-.1.1 0 .1 0 .2.1.6.2.9 1 .9 2.1zm0 1.3c.1-.5.1-1 0-1.4.1.5.1.9 0 1.4zM5.8 202C-1.8 202-8 208.2-8 215.8c0 7.6 6.2 13.8 13.8 13.8 7.6 0 13.8-6.2 13.8-13.8 0-7.6-6.2-13.8-13.8-13.8zm1.9 22.6H3.9v-12.3h3.8v12.3zm-1.9-13.8c-1.2 0-2-.9-2-1.9 0-1.1.8-1.9 2-1.9s2 .8 2 1.9c.1 1-.7 1.9-2 1.9z"/>
                            </svg>
                        </div>
                </div>
            </div>
        </section>

        <!-- FOR OPENNING PROFESSIONAL PROFIL -->
        <section id='page_right' class="page_right">
            <div id="pageRightFlex">
                <div id="containerRightFlex">
                        <div id="separateTitle"><h1>Développeur web</h1><h1>Fullstack</h1></div>
                        <div id="open_right">
                            <svg class='svg_ico_acc' xmlns="http://www.w3.org/2000/svg" width="80.604" height="82.542" viewBox="172.348 254.653 80.604 82.542">
                              <path fill="none" d="M213.93 270.662c.3-.007.59-.012.878-.012-.287 0-.58.005-.877.012-1.73.62-3.51.824-5.15.816 1.64.008 3.42-.198 5.15-.816zm-19.76 7.135c.08-.773 1.054-7.163 6.897-7.428-5.844.26-6.817 6.65-6.896 7.42v.06l.01-.06zm26.373-7.13h-.002c-.02.506.55 1.282.62 2.037-.06-.754-.64-1.53-.61-2.038zm-26.613 14.387c.222.222.45.358.673.39-.224-.032-.452-.17-.672-.39-.59-.597-1.14-1.803-1.39-3.25-.02-.097-.02-.19-.04-.283.02-1.01.06-1.99.13-2.96.13-.37.3-.66.51-.82.09-.06.19-.11.3-.12-.1.02-.2.06-.29.13-.22.16-.38.45-.51.82-.07.97-.11 1.95-.13 2.97.02.1.03.19.04.29.26 1.45.81 2.66 1.4 3.25zm28.524-12.48c.534.89 1.043 2.012 1.512 3.404-.467-1.392-.978-2.513-1.512-3.404z"/>
                              <path d="M194.823 285.443c-.072.013-.145.013-.22.002.075.01.15.01.222-.002.142-.023.27-.092.385-.2-.117.107-.245.176-.387.2zm27.63-12.87c-.384-.64-.777-1.172-1.18-1.6-.227-.123-.466-.234-.73-.31.265.077.505.187.73.31.403.428.797.96 1.18 1.6zm-1.3.132c-1.643-.766-3.212-1.956-5.51-2.04-.27-.012-.548-.016-.835-.016.286 0 .566 0 .835.01 2.297.08 3.867 1.27 5.51 2.04zm-26.987 5.15c-.247-.197-.5-.29-.74-.25.24-.04.492.053.74.25zm14.614-6.377c-3.6-.02-6.478-1.076-6.478-1.076-.434-.04-.845-.05-1.235-.032.39-.018.8-.008 1.234.032.01 0 2.88 1.057 6.48 1.076z"/>
                              <path fill="none" d="M247.698 321.99l-.04-.29c-.07-.478-.222-.93-.368-1.37-.058-.17-.114-.342-.167-.513l-.098-.32-.334.024c-.44.04-.9.1-1.36.17l-.21-.38c-.08-.17-.19-.31-.3-.43.25-.36.48-.74.7-1.13l.14-.25-.18-.22c-.3-.37-.67-.66-1.03-.94-.15-.11-.3-.23-.44-.35l-.25-.21-.26.2c-.34.25-.7.54-1.06.87l-.36-.19c-.17-.11-.35-.17-.51-.22.01-.43 0-.88-.03-1.32l-.02-.27-.25-.09c-.47-.17-.94-.21-1.4-.24-.19-.01-.38-.03-.58-.05l-.32-.04-.12.31c-.15.4-.29.84-.41 1.3l-.45.05c-.14.01-.32.03-.51.07-.22-.36-.47-.72-.74-1.08l-.16-.22-.26.07c-.62.15-1.16.45-1.69.74l-.42.23.07.31c.08.38.19.82.35 1.29l-.48.4c-.08.06-.17.14-.25.22-.39-.18-.8-.36-1.22-.51l-.26-.1-.19.2c-.46.49-.77 1.05-1.1 1.68l-.14.27.22.22c.34.33.66.63.99.9l-.14.47-.06.21c-.02.07-.05.15-.07.23-.43.05-.87.13-1.3.22l-.28.06-.04.28c-.11.67-.11 1.35 0 2.02l.04.28.28.06c.417.1.85.17 1.3.23.02.08.05.15.07.23.02.07.05.14.07.24l.14.444c-.33.27-.66.57-.99.9l-.22.22.14.27c.33.63.64 1.19 1.1 1.68l.19.2.26-.092c.41-.15.82-.323 1.22-.51.09.08.18.157.26.225l.48.39c-.13.39-.24.8-.35 1.29l-.07.31.41.22c.53.29 1.08.59 1.71.746l.27.07.16-.22c.27-.357.52-.72.746-1.087.19.04.36.06.5.065l.46.046c.12.46.26.897.42 1.297l.12.31.327-.046c.19-.02.385-.04.58-.05.454-.034.926-.07 1.39-.244l.25-.09.02-.27c.03-.44.045-.88.03-1.32.16-.05.337-.1.478-.2l.4-.22c.36.33.72.62 1.06.88l.27.2.257-.21c.14-.12.29-.234.44-.35.36-.28.734-.575 1.044-.95l.18-.22-.132-.25c-.22-.39-.45-.77-.7-1.137.1-.12.22-.26.29-.41l.22-.394c.46.08.92.13 1.37.17l.337.02.1-.33c.06-.18.11-.35.17-.53.15-.438.3-.887.367-1.36l.04-.29-.26-.14c-.4-.21-.81-.41-1.22-.58l.05-.48-.05-.47c.41-.17.82-.37 1.22-.58l.26-.13zm-4.675 3.763c-.61.852-1.305 1.45-2.038 1.77-.728.27-1.722.59-2.703.378-.706-.11-1.704-.39-2.462-1.11-.526-.46-1.206-1.22-1.46-2.27-.28-.86-.28-1.8.008-2.69.247-1.02.926-1.78 1.467-2.25.747-.71 1.744-.99 2.47-1.1.205-.04.422-.06.643-.06.742 0 1.478.24 2.017.45.754.33 1.448.93 2.05 1.76.445.69.7 1.54.773 2.55-.074 1.08-.327 1.93-.765 2.6zm-49.093-40.7c.222.223.45.36.673.39.074.013.148.013.22 0 .143-.023.27-.092.386-.2 1.42 4.427 4.14 8.836 7.59 11.47 1.98 1.517 4.2 2.445 6.54 2.445.3 0 .59-.017.89-.045.26-.026.53-.065.79-.115.4-.075.79-.184 1.17-.308l.19-.06c.37-.13.73-.28 1.1-.45.07-.036.14-.07.22-.108.36-.18.71-.375 1.06-.592.06-.036.11-.075.17-.113.36-.234.72-.484 1.07-.757.84-.66 1.64-1.43 2.39-2.276.28-.318.55-.648.81-.987 1.86-2.375 3.33-5.237 4.25-8.104.12.108.24.18.39.2.25.044.51-.057.77-.273.1-.09.21-.206.31-.333.42-.52.79-1.328 1.04-2.298.06-.24.12-.49.16-.74.36-2.02.03-3.79-.72-4.14-.06-.03-.11-.05-.18-.06-.23-.04-.48.04-.72.23l-.02.01h-.01l-.01-.05c-.18-.67-.36-1.27-.55-1.84-.47-1.4-.98-2.52-1.51-3.41-.39-.64-.78-1.17-1.18-1.6-.23-.12-.47-.23-.73-.31h-.01c-.03.51.55 1.29.61 2.04-1.65-.76-3.22-1.95-5.51-2.04-.27-.01-.55-.01-.84-.01s-.58 0-.88.01c-1.73.62-3.51.82-5.15.81-3.6-.02-6.47-1.08-6.47-1.08-.44-.04-.85-.05-1.24-.03-5.84.26-6.82 6.65-6.9 7.42v.06c-.25-.2-.5-.3-.74-.25-.1.02-.2.06-.3.12-.21.15-.38.44-.51.82-.07.97-.11 1.95-.13 2.96.02.1.02.19.04.28.26 1.45.8 2.65 1.4 3.25z"/>
                              <path d="M238.895 307.577c.663 0 1.313.056 1.954.138-3.52-3.925-7.06-4.225-8.13-4.475-3.29-.77-7.28-.442-9.4-1.104-.25 2.086-6.32 8.945-10.29 13.245l-1.73-6.64c1.29-.76 1.58-2.44 1.58-3.85h-6.54c0 1.39.28 3.06 1.55 3.83l-1.7 6.66c-3.98-4.3-10.04-11.16-10.29-13.24-2.13.67-6.11.34-9.4 1.11-1.68.39-9.44.89-13.64 15.35-.57 1.97-.37 4.1.56 5.85 3.44 6.51 21.55 8.52 36.19 8.51 5.31 0 11.07-.26 16.42-.91-1.74-2.51-2.77-5.56-2.77-8.85 0-8.61 7.01-15.61 15.61-15.61z"/>
                              <path d="M192.325 286.742c1.55 4.167 4 8.213 7.032 11.175 1.715 1.677 3.616 3.003 5.644 3.808 1.4.552 2.85.858 4.35.858 1.49 0 2.95-.305 4.34-.858 2.1-.833 4.07-2.222 5.83-3.984 2.96-2.95 5.35-6.93 6.87-11.03 1.17-.34 2.39-2.53 2.89-5.32.54-3.03.03-5.67-1.14-6.11.05-.74.07-1.49.07-2.25-.02-10.99-6.47-17.38-16.63-18.06-8.86-.59-15.53 2.93-18.57 8.78-1.02 1.97-1.6 4.43-1.83 7.11-.34 1.4-.54 2.84-.54 4.34h.04v.04c-.02.01-.04.01-.06.01-1.29.23-1.88 2.99-1.32 6.18.52 2.93 1.84 5.19 3.06 5.36zm.293-8.188c.126-.373.295-.665.51-.82.092-.065.19-.108.297-.126.24-.042.493.05.74.25 0-.02.002-.04.004-.06.08-.773 1.05-7.163 6.89-7.428.39-.018.8-.008 1.23.032 0 0 2.88 1.058 6.48 1.076 1.63.008 3.42-.198 5.15-.816.29-.007.59-.012.87-.012s.56.004.83.015c2.29.085 3.86 1.274 5.51 2.04-.07-.756-.64-1.532-.62-2.04.26.075.5.186.73.31.4.427.79.96 1.18 1.6.53.89 1.04 2.012 1.51 3.404.19.56.37 1.17.55 1.83v.04l.01-.01.01-.02c.24-.19.48-.28.71-.24.06.01.12.03.17.05.75.35 1.08 2.12.72 4.14-.05.25-.1.49-.17.73-.25.97-.63 1.78-1.05 2.29-.11.12-.21.24-.32.33-.26.21-.52.31-.77.27h-.01c-.14-.02-.27-.09-.39-.2-.92 2.87-2.39 5.73-4.25 8.11-.26.34-.54.67-.82.98-.75.85-1.55 1.61-2.39 2.27-.35.27-.71.52-1.08.75-.06.04-.12.07-.18.11-.35.21-.7.41-1.06.59l-.22.1c-.36.17-.73.32-1.1.45l-.19.06c-.39.12-.78.23-1.18.31-.26.05-.527.09-.79.11-.297.03-.59.04-.89.04-2.347 0-4.56-.93-6.547-2.45-3.44-2.63-6.17-7.04-7.59-11.47-.12.11-.246.18-.388.2-.07.01-.15.01-.22 0-.228-.038-.45-.17-.678-.39-.595-.6-1.14-1.81-1.4-3.257-.02-.1-.02-.19-.04-.28.02-1.02.06-2 .13-2.97z"/>
                              <path fill="none" d="M219.23 293.346c-.265.34-.54.67-.82.987"/>
                              <path d="M238.895 309.528c-7.534 0-13.66 6.127-13.66 13.66s6.126 13.662 13.66 13.662c7.532 0 13.66-6.127 13.66-13.66s-6.128-13.662-13.66-13.662zm7.374 13.66l-.05.48c.41.173.82.37 1.22.582l.25.14-.04.29c-.07.472-.22.922-.37 1.357-.06.175-.12.35-.17.524l-.1.33-.34-.02c-.45-.03-.91-.09-1.37-.17l-.22.4c-.08.16-.19.3-.3.42.25.37.48.75.7 1.14l.14.25-.18.22c-.31.38-.69.67-1.05.96-.15.12-.3.23-.44.35l-.25.22-.27-.19c-.35-.25-.7-.54-1.06-.87l-.4.22c-.14.1-.31.15-.48.2.01.44 0 .88-.03 1.32l-.02.27-.25.1c-.47.17-.94.21-1.4.24-.2.02-.39.03-.58.06l-.33.05-.12-.31c-.16-.4-.3-.83-.42-1.29l-.46-.05c-.14-.01-.32-.02-.51-.07-.23.37-.48.73-.74 1.09l-.17.22-.27-.06c-.63-.152-1.18-.46-1.71-.75l-.41-.22.06-.31c.11-.49.22-.9.34-1.29l-.47-.39c-.09-.066-.18-.14-.27-.22-.4.19-.81.36-1.22.51l-.26.1-.19-.2c-.46-.49-.77-1.05-1.1-1.68l-.14-.27.22-.216c.33-.33.66-.63.99-.9l-.14-.44c-.03-.1-.05-.17-.08-.24-.03-.07-.05-.15-.07-.23-.45-.06-.89-.13-1.3-.225l-.28-.06-.05-.28c-.11-.67-.11-1.35 0-2.02l.04-.28.28-.06c.43-.093.86-.17 1.3-.223.02-.08.05-.16.07-.23.02-.07.05-.14.06-.21l.15-.47c-.33-.27-.66-.57-.99-.904l-.22-.213.14-.27c.33-.63.63-1.19 1.1-1.68l.19-.2.26.09c.42.155.83.33 1.22.51.08-.08.17-.15.25-.216l.48-.39c-.16-.48-.26-.92-.35-1.296l-.07-.305.42-.23c.52-.29 1.062-.59 1.69-.74l.26-.07.17.22c.27.36.52.72.74 1.09.19-.04.37-.06.52-.07l.44-.04c.12-.46.26-.897.42-1.296l.12-.31.32.04c.19.02.38.04.58.05.45.03.922.07 1.39.24l.25.09.02.27c.03.447.05.89.04 1.32.16.05.34.11.51.22l.362.2c.36-.33.713-.62 1.054-.87l.267-.19.26.21c.14.123.29.24.44.36.36.28.73.57 1.04.943l.18.22-.14.25c-.22.39-.45.77-.7 1.135.11.12.22.26.31.43l.21.38c.46-.08.92-.14 1.36-.17l.34-.03.1.32c.05.17.11.344.17.513.14.434.29.89.36 1.364l.04.29-.26.14c-.4.21-.81.41-1.22.58l.05.47z"/>
                              <path d="M240.965 318.85c-.54-.203-1.275-.444-2.017-.444-.222 0-.438.02-.642.065-.727.12-1.725.4-2.47 1.11-.542.47-1.22 1.23-1.468 2.25-.288.89-.288 1.84-.01 2.69.256 1.05.936 1.81 1.462 2.27.758.72 1.757 1 2.462 1.12.98.22 1.975-.1 2.703-.38.733-.32 1.427-.91 2.038-1.77.437-.66.69-1.52.764-2.59-.074-1.01-.328-1.87-.773-2.55-.6-.83-1.295-1.43-2.05-1.76z"/>
                            </svg>
                        </div>
                </div>
            </div>
        </section>
    </section>

    <!-- BOUTTON CONTACT -->
    <div id="btnOpenContact">
        <svg class='ico_envelope' xmlns="http://www.w3.org/2000/svg" width="526.645" height="475.529" viewBox="0 0 526.645 475.529">
            <path d="M455.21 0h-11.905c39.45 0 71.434 31.984 71.434 71.434v332.66c0 39.45-31.99 71.435-71.44 71.435h11.9c39.45 0 71.43-31.99 71.43-71.44V71.43C526.64 31.98 494.66 0 455.21 0zM331.213 181.977c-8.107 0-17.24 4.506-27.39 13.513-10.143 9.006-19 20.216-26.578 33.64-7.578 13.417-11.363 24.6-11.363 33.542 0 5.258.804 8.953 2.417 11.096 1.61 2.145 4.38 3.22 8.32 3.22 4.88 0 12.19-5.575 21.92-16.73 9.73-11.157 18.67-23.943 26.85-38.38 8.16-14.43 12.26-24.87 12.26-31.31 0-5.728-2.15-8.59-6.45-8.59z"/>
            <path d="M502.833 404.09V71.433C502.833 31.983 470.85 0 431.4 0H128.157c-39.45 0-71.433 31.984-71.433 71.434v2.798h44.122c8.513 0 15.406 6.9 15.406 15.412 0 8.513-6.894 15.406-15.406 15.406H15.41C6.9 105.05 0 111.95 0 120.46c0 8.514 6.898 15.407 15.41 15.407h41.314v63.04h41.318c8.513 0 15.406 6.894 15.406 15.407 0 8.512-6.894 15.406-15.406 15.406H15.41C6.9 229.72 0 236.612 0 245.124c0 8.514 6.898 15.406 15.41 15.406h41.314v78.445h41.318c8.513 0 15.406 6.895 15.406 15.406 0 8.52-6.894 15.41-15.406 15.41H15.41C6.9 369.79 0 376.68 0 385.2c0 8.512 6.898 15.406 15.41 15.406h41.314v3.506c0 39.45 31.984 71.433 71.434 71.433H431.4c39.45-.02 71.433-32 71.433-71.45zM401.397 280.496c-14.667 15.88-32.37 23.816-53.122 23.816-11.805 0-21.406-2.898-28.8-8.703s-11.09-13.56-11.09-23.27c0-3.7.6-7.63 1.79-11.81-6.904 11.74-15.565 21.02-25.982 27.83-10.418 6.82-20.692 10.23-30.806 10.23-5.244 0-9.53-1.92-12.858-5.76-3.34-3.84-5-8.886-5-15.14 0-12.62 5.42-27.36 16.28-44.207 10.85-16.848 24.15-31.634 39.89-44.38C307.44 176.363 320.38 170 330.52 170c5.58 0 9.852 1.06 12.83 3.167l1.78-4.987c1.54-3.323 6.53-4.984 14.97-4.984 7.24 0 10.87 1.375 10.87 4.12l-.18.9-36.7 83.754c-2.74 6.43-4.1 12.324-4.1 17.684 0 7.023 2.37 12.553 7.127 16.6 4.75 4.05 11.102 6.073 19.066 6.073 15.083 0 28.126-6.905 39.11-20.73 10.98-13.82 16.48-31.465 16.48-52.92 0-30.27-9.49-54.073-28.454-71.414-18.98-17.34-45-26.015-78.07-26.015-29.5 0-53.708 10.703-72.62 32.11-18.92 21.407-28.37 48.207-28.37 80.4 0 32.324 9.45 59.177 28.373 80.583 18.92 21.41 43.13 32.11 72.636 32.11 32.24 0 57.224-7.2 74.95-21.61l1.25-.362c1.19 0 2.376.744 3.57 2.232 1.187 1.485 1.79 2.83 1.79 4.015 0 2.028-4.92 6.35-14.747 12.956-9.83 6.61-20.408 11.618-31.725 15.01s-23.057 5.09-35.2 5.09c-23.34 0-45.01-5.81-65.01-17.41-19.996-11.613-35.776-27.44-47.32-47.504-11.547-20.06-17.32-41.756-17.32-65.1 0-23.21 5.78-44.816 17.326-64.823 11.544-20 27.324-35.77 47.32-47.32 20-11.55 41.67-17.322 65.01-17.322 35.53 0 64.118 10.5 85.756 31.497 21.64 20.996 32.46 48.623 32.46 82.875-.006 25.324-7.34 45.94-22.008 61.82z"/>
        </svg>
    </div>
</div> <!-- FIN CONTAINER -->
<!-- BUTTON FOR HOME -->
<div class="btnRetourAcc"><i class="fa fa-home ico_home" aria-hidden="true"></i></div>

    <!-- LINK SCRIPT JAVA Et JQUERY-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- build:js js/main.js -->
    <script src="js/covervid.min.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>
    <script src="js/jquery.vide.min.js"></script>
    <script src="js/jquery.viewportchecker.min.js"></script>
    <script type="text/javascript" src="js/jquery_kal.js"></script>
    <!-- endbuild -->
</body>
</html>