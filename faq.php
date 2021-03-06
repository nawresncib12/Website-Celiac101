<?php 
session_start();
$pageName='Acceuil';
include_once 'assets/mainHead.php' ;



if (isset($_SESSION['user'])) {

    include_once "navbarCo.php";
   
} else {
    include_once "navbarDeco.php";
}
?>
<title>FAQs</title>
<link rel="stylesheet" href="css/faq.css">

</head>
<body>


<?php //include_once 'preloader.php' ?>





<div class="faq__container">

    <div class="enteteFaq">
        
        <p class="titre">FAQ</p>
        <p class="soustitre"> Tout ce que vous voulez savoir sur  </p>
        <p class="soustitre">la maladie coeliaque</p>
        
    </div>

    <div style="margin:50px" id="effect" class="wavy titreJournal">
        <span style="--i:1;">M</span>
        <span style="--i:2;">O</span>
        <span style="--i:3;">s</span>
        <span style="--i:4;">T</span>
        <span style="--i:5;"> </span>
        <span style="--i:6;"> </span>
        <span style="--i:7;">F</span>
        <span style="--i:8;">R</span>
        <span style="--i:9;">E</span>
        <span style="--i:10;">Q</span>
        <span style="--i:11;">U</span>
        <span style="--i:12;">N</span>
        <span style="--i:13;">T</span>
        <span style="--i:14;">L</span>
        <span style="--i:15;">Y</span>
        <span style="--i:16;"> </span>
        <span style="--i:17;"> </span>
        <span style="--i:18;">A</span>
        <span style="--i:19;">S</span>
        <span style="--i:20;">K</span>
        <span style="--i:21;">E</span>
        <span style="--i:22;">D</span>
        <span style="--i:23;"> </span>
        <span style="--i:24;"> </span>
        <span style="--i:25;">Q</span>
        <span style="--i:26;">U</span>
        <span style="--i:27;">E</span>
        <span style="--i:28;">S</span>
        <span style="--i:29;">T</span>
        <span style="--i:30;">I</span>
        <span style="--i:31;">O</span>
        <span style="--i:32;">N</span>
        <span style="--i:33;">S</span>
      </div>
    <div class="faq">
        <div class="faqContenu">
            <div class="faqQues">
                Quels sont les sympt??mes de la maladie coeliaque ?
            </div>
            <div class="faqResp">
                <div class="faqRespContent">
                <p>Les sympt??mes de la maladie c??liaque se manifestent par des diarrh??es, une perte de poids, de la fatigue, des ballonnements, des maux de ventre, des naus??es et, chez les enfants, par des troubles de la croissance.</p>
                </div>
            </div>
        </div>
        <div class="faqContenu">
        <div class="faqQues">
        Quels produits sans gluten peut-on consommer ?
        </div>
        <div class="faqResp">
            <div class="faqRespContent">
            <p>On peut consommer tous les produits qui ne contiennent pas les c??r??ales d??j?? cit??es. En plus le riz, les pommes de terre, les l??gumes, les fruits, les l??gumineuses, les fruits secs, le poisson, la viande, le fromage sont des produits sans gluten. Cependant, il faudrait bien faire attention ?? la composition de ces produits et bien lire les ??tiquettes vu les risques des contaminations au gluten.</p>
            </div>
        </div>
        </div>

        <div class="faqContenu">
        <div class="faqQues">
        Est-il facile de trouver les produits sans gluten ?
        </div>
        <div class="faqResp">
            <div class="faqRespContent">
            <p>Aujourd???hui la maladie c??liaque trouve plus d???int??r??t chez les producteurs des produits alimentaires et les nutrionnistes. Juste ?? c??t?? de chez vous dans les grandes surfaces, dans les supermarch??s bios, vous trouvez tout un rayon sans gluten, encore dans les pharmacies et les magasins di??t??tiques. Avec un simple clic, vous en trouvez sur des sites Internet, vous pouvez savourez des d??lices sucr??es et sal??es en parcourant ces sites.</p>
            </div>
        </div>
        </div>

        <div class="faqContenu">
        <div class="faqQues">
        Comment  savoir si nous sommes atteints de la maladie c??liaque ?
        </div>
        <div class="faqResp">
            <div class="faqRespContent">
            <p>Vous ne pouvez savoir si vous ??tes atteint de cette maladie qu???apr??s avoir fait le diagnostic chez un m??decin. Certains sympt??mes peuvent aider ?? le savoir tels que   les maux de ventre, des probl??mes digestifs comme la constipation et la diarrh??e, des migraines intenses, des malaises, des carences alimentaires, des tremblements, une fatigue intense.</p>
            </div>
        </div>
        </div>

        <div class="faqContenu">
        <div class="faqQues">
        Comment diagnostiquer la maladie c??liaque ?
        </div>
        <div class="faqResp">
            <div class="faqRespContent">
            <p>Les autotests ne donnent pas toujours  des r??sultats fiables. Seuls les examens chez les m??decins : une prise de sang, une gastro-endoscopie avec biopsie duod??nale peuvent vous donner des r??sultats fiables.</p>
            </div>
        </div>
        </div>

        <div class="faqContenu">
        <div class="faqQues">
        Quelles c??r??ales riches en gluten  faut-il ??viter ?
        </div>
        <div class="faqResp">
            <div class="faqRespContent">
            <p>Le seigle, le bl??, l'orge, le triticale et le malt. Quant ?? l???avoine, quoiqu???il ne contienne pas de gluten, certains c??liaques ont des r??actions face ?? cette c??r??ale.</p>
            </div>
        </div>
        </div>
   </div>


</div>

    <?php include_once 'footer.php'?>
    <script src="js/testnav.js"></script>
    <script src="Js/faq.js"></script>
    <?php include_once 'assets/scripts.php' ?>
   

</body>
</html>