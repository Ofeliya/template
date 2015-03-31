<?php get_header(); ?>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <?php wp_nav_menu(array('menu' => 'navigation', 'menu_class' => 'pure-menu-heading' )); ?>
    </div>
</div>
<div class="splash-container">
    <div class="splash" style="background: url(<?php bloginfo('template_url'); ?>/img/splash.jpg)">
        <h1 class="splash-head"> Филиал ОАО «Управляющая компания холдинга «МИНСКИЙ МОТОРНЫЙ ЗАВОД» в г.Столбцы</h1>
        <p class="splash-subhead">производитель современных компрессорных станций</p>
        <!-- <p><a href="http://purecss.io" class="pure-button pure-button-primary">Get Started</a></p> -->
    </div>
</div>
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">ПРОИЗВОДИТЕЛЬ СОВРЕМЕННЫХ КОМПРЕССОРНЫХ СТАНЦИЙ</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead"><i class="fa fa-rocket f-awesome-main"></i>Филиал был основан в 1993 году.</h3>
                <p>Филиал в г. Столбцы является структурным подразделением Открытого акционерного общества «Управляющая компания холдинга «МИНСКИЙ МОТОРНЫЙ ЗАВОД».</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-star-o f-awesome-main"></i>
                    Официальные дилеры:
                </h3>
                <ul>
                    <li><a href="http://www.remeza. org">ООО «Торговый Дом «РЕМЕЗА»</a></li>
                    <li><a href="www.v-p-k.ru">ВОСТОЧНО-ЕВРОПЕЙСКАЯ ПРОМЫШЛЕННАЯ КОМПАНИЯ «КОНКОРДИЯ»</a></li>
                    <li><a href="www.rosbelkar.ru">ТОО «РОСБЕЛКАР»</a></li>
                </ul>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-suitcase f-awesome-main"></i>
                    Автоматно-термический цех
                </h3>
                <p>  В цеху производится обработка заготовок на станках-автоматах и полуавтоматах, термическая обработка и отжиг деталей с последующей доделкой на шлифовальных, фрезерных, сверлильных станках</p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-wrench f-awesome-main"></i>
                    Прессово-гальванический цех
                </h3>
                <p>Прессовый участок осуществляет производство штампованных деталей, сборка трубок высокого и низкого давления, воздухоочистителей, сварка и пайка деталей и узлов, поставляемых на сборочный конвейер ОАО "ММЗ"</p>
            </div>
        </div>
    </div>
    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="<?php bloginfo('template_url'); ?>/img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">
            <h2 class="content-head content-head-ribbon">В настоящее время предприятие специализируется по выпуску следующих видов продукции: </h2>
            <ul class="layout-menu-about">
              <li>
                  <a href="#">передвижные и стационарные винтовые компрессорные станции с приводом от дизеля и электроприводом</a>
              </li>
              <li>
                  <a href="#">дизель-генераторные установки</a>
              </li>
              <li>
                  <a href="#">запасные части к дизельным двигателям Минского моторного завода</a>
              </li>
              <li>
                  <a href="#">товары народного потребления</a>
              </li>
                <li>
                    <a href="#">оборудование навесное</a>
                </li>
            </ul>
            <p class="slogan">КАЧЕСТВО + НАДЁЖНОСТЬ + ГАРАНТИЯ</p>
        </div>
    </div>
    <div class="content">
        <h2 class="content-head is-center">По всем вопросам приобретения продукции и оказания услуг обращаться:</h2>
        <div class="pure-g pure-u-1 is-center">
            <p class="parent-select-text">Телефоны: 8 (01717) <span class="select-text">5-61-02</span>; 8 (01717) <span class="select-text">5-74-22</span>; 8 (029) <span class="select-text">101-94-09</span>; Факс 8 (01717) <span class="select-text">5-74-22</span></p>
            <p><span class="email-main">sbyt@filial-mmz.belhost.by</span></p>
        </div>
    </div>
    <div class="footer l-box is-center">
        © 2015. Филиал ОАО "Управляющая компания холдинга "МИНСКИЙ МОТОРНЫЙ ЗАВОД" в г. Столбцы. Все права защищены.
    </div>
</div>
<?php get_footer(); ?>
