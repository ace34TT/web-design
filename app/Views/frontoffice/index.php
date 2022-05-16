<?php $title = ""; ?>
<!-- HEADER -->
<?php ob_start(); ?>

<?php $links = ob_get_clean(); ?>
<!-- CONTENT -->
<?php ob_start(); ?>
<!-- ========== Start definition ========== -->
<h1>Qu'est ce que Rechauffement climatique ? </h1>
<p>
    Nous nous référons au réchauffement climatique comme l'augmentation de la température moyenne à la surface de la Terre aux 20e et 21e siècles, mais plus généralement comme le changement résultant des modèles météorologiques à grande échelle. Les deux sont attribuables aux émissions anthropiques de gaz à effet de serre : bien qu'il y ait eu des périodes de changement climatique auparavant, l'activité humaine a eu des précédents pour le système climatique de la Terre depuis le milieu du XXe siècle et a provoqué des changements à l'échelle mondiale.
</p>
<!-- ========== End definition ========== -->
<!-- ========== Start causes ========== -->
<h1>Quels sont les cause de la rechauffement climatique ?</h1>
<p>
    Jusqu'à présent, l'une des principales causes du changement climatique est notre combustion de combustibles fossiles (charbon, gaz naturel et pétrole), qui augmente la concentration de gaz à effet de serre tels que le dioxyde de carbone dans l'atmosphère. Combiné à d'autres activités, telles que le défrichement des terres pour l'agriculture, cela a provoqué une augmentation de la température moyenne de notre planète. Pour les scientifiques, le lien entre les gaz à effet de serre et le réchauffement climatique est aussi certain que le lien entre le tabagisme et le cancer du poumon.
</p>
<p>
    La conclusion n'est pas récente. La communauté scientifique collecte et analyse des données depuis des décennies. Les premiers avertissements sur le réchauffement climatique ont commencé à faire la une des journaux dans les années 1980.
</p>
<p>
    En 1992, La Convention-cadre des Nations unies sur les changements climatiques (CCNUCC) a été signée par 165 pays, qui, depuis, organisent des réunions annuelles (Conférence des parties, COP) dans le but de fixer des objectifs et de trouver des solutions pour réduire le changement climatique et s’adapter à ses conséquences déjà visibles. Aujourd’hui, 197 pays sont parties à la CCNUCC.
</p>
<!-- ========== End causes ========== -->
<!-- ========== Start consequences ========== -->
<h1>Quels sont les consequences de la rechauffement climatique ?</h1>
<ul style="list-style-type: none;">
    <li>
        <h2> 1 - Conséquences sur l’écosystème et la planète</h2>
        <p>Premièrement, l'augmentation de la température causée par le réchauffement climatique affecte l'ensemble de l'écosystème mondial, pas seulement la chaleur ressentie. Le temps est perturbé, les phénomènes météorologiques extrêmes augmentent et les conditions météorologiques habituelles changent. Cela signifie plus de tempêtes, plus d'inondations, plus d'ouragans et de sécheresses.</p>
        <p>La capacité de régulation de l'océan est également affectée par la hausse des températures. Si les températures mondiales augmentent de manière significative, le niveau de la mer augmentera en conséquence et les zones océaniques s'acidifieront et se désoxygéneront. En outre, une trop grande <a href="https://youmatter.world/fr/definition/acidification-des-oceans-definition/">acidification des océans</a> pourrait limiter la capacité des océans du monde à produire de l'oxygène et à stocker du dioxyde de carbone, contribuant ainsi davantage au réchauffement climatique. Mais elle affecte aussi les zones forestières et les écosystèmes fragiles (barrières coralliennes, forêts amazoniennes) et la biodiversité (les coraux, certains insectes et même les mammifères peuvent ne pas survivre).</p>
    </li>
    <li>
        <h2> 2 - Conséquences sur la société et l’économie</h2>
        <p>Sur le plan social et économique, le réchauffement climatique peut avoir plusieurs conséquences : la capacité de la société à s'adapter au nouveau climat, la capacité à adapter les infrastructures, notamment médicales, et les bâtiments. Le réchauffement climatique aura également un impact sur la santé publique, la capacité alimentaire de la nation, et plus encore.</p>
    </li>
    <li>
        <h2> 3 - Conséquences sur les entreprises</h2>
        <p>Enfin, les entreprises risquent également d’être affectées par le changement et le réchauffement climatique. En effet, dans un contexte où le climat change, il est plus difficile d’adapter ses activités.</p>
    </li>
</ul>
<!-- ========== End consequences ========== -->

<!-- ========== Start news ========== -->
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
        <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on September 24, 2022
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on September 18, 2022
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">Science has not yet mastered prophecy</h2>
        <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on August 24, 2022
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Post preview-->
<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">Failure is not an option</h2>
        <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a>
        on July 8, 2022
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
<!-- Pager-->
<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
<!-- ========== End news ========== -->

<?php $content = ob_get_clean(); ?>
<!-- SCRIPT -->
<?php ob_start(); ?>

<?php $scripts = ob_get_clean(); ?>
<?php require('template.php'); ?>