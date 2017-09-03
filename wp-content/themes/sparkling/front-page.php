<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
			<div class="homepage-info">
				Сайтът представя проекта „Виртуално Образователно Пространство (ВОП)“, който се реализира в лабораторията <a href="https://delc2.fmi.uni-plovdiv.net/" target="_blank">„Център за електронно обучение DeLC (Distributed eLearning Center)“</a> на <a href="http://fmi-plovdiv.org/" target="_blank">Факултета по математика и информатика на Пловдивския университет „Паисий Хилендарски“.</a>
			</div>
			<div class="row" style="margin-top:30px; margin-bottom:30px;">
				<div class="col-md-4">
					<div class="home-category">
						<img src="/wp-content/uploads/2017/08/home_01.png" class="img-responsive">
						<h3>
							Изграждане на генетично кибер-виртуално пространство като IoT екосистема, интегрирана технология и поддържащи програмно-технически средства.
						</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="home-category">
						<img src="/wp-content/uploads/2017/08/home_02.png" class="img-responsive">
						<h3>
							Разработване на прототипни IoT и роботизирани приложения. Създаване на формализирана среда за моделиране и управление на IoT и роботизирани приложения.
						</h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="home-category">
						<img src="/wp-content/uploads/2017/08/home_03.png" class="img-responsive">
						<h3>
							Разработване и предоставка на учебен материал за различни форми на електронно обучение (самоподготовка, смесено обучение, учене през целия живот).
						</h3>
					</div>
				</div>
			</div>



			<div class="additional-info">
				Проектът е декомпозиран на отделни подпроекти, представени в рубриката <a href="/category/projects/">„Проекти“</a>. <br>
				Сайтът оперира също като специфична входна точка във виртуалното образователно пространство. Функционално и архитектурно е свързан с образователния портал <a href="https://delc2.fmi.uni-plovdiv.net/" target="_blank">DeLC 2.0</a> и сайта на системата за научни публикации.

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
