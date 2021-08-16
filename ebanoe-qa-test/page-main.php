<?php
/*
Template Name: Main page
*/
?>

<?php get_header(); ?>
<main class="main-block category home" role="main">
	<div class="form subscribe">
	<div class="left">
		<h3>Подписаться на рассылку</h3>
		<p>Если ты красавчик, то подпишись </p>
	</div>
	<div class="right">
		<form action="#" id="sizer_01">
			<input type="e-mail" placeholder="Введи свой e-mail">
			<button>Подписываюсь</button>
		</form>
		<div class="telegram">
			<span>Охуевший телеграм-канал</span><a href="#" id="sizer_01_child">@ebanoe_qa</a>
		</div>
	</div>
</div>

<div class="content-wrapper">
		<div class="section-title">
			<h2><?php echo get_the_title(); ?></h2>
		</div>
		<section class="posts">


<?php
$query = new WP_Query( 'cat=2&nopaging=1' ); 
if( $query->have_posts() ){
while( $query->have_posts() ){
$query->the_post();
?>
<article class="simple">
<a class="post-link" href="<?php the_permalink(); ?>" title="Открыть статью"></a>


<div class="post-picture">
<?php if (has_post_thumbnail() ): ?>
	<img src="<?php the_post_thumbnail_url(); ?>">
<?php else: ?>
	<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png">
<?php endif; ?>
</div>

<div class="content">
<h3><?php the_title(); ?></h3>
<p><?php the_content(); ?></p>
</div>

</article>
<?php
}
wp_reset_postdata();
} 
else
echo 'Записей нет.';
?>

		</section>
	</div>
	<div class="form share">
	<div class="left">
		<h3>Поделиться смехуечками</h3>
		<p>Присылай смешные истории или картинки.<br>Самый годный контен размещу в блоге.</p>
	</div>
	<div class="right">
		<form action="#">
			<div class="input-group">
				<input type="text" placeholder="Предложить новость">
				<input type="file" id="file" class="file-sel">
				<label for="file" class="file-sel-label"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" class="svg-inline--fa fa-paperclip fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M43.246 466.142c-58.43-60.289-57.341-157.511 1.386-217.581L254.392 34c44.316-45.332 116.351-45.336 160.671 0 43.89 44.894 43.943 117.329 0 162.276L232.214 383.128c-29.855 30.537-78.633 30.111-107.982-.998-28.275-29.97-27.368-77.473 1.452-106.953l143.743-146.835c6.182-6.314 16.312-6.422 22.626-.241l22.861 22.379c6.315 6.182 6.422 16.312.241 22.626L171.427 319.927c-4.932 5.045-5.236 13.428-.648 18.292 4.372 4.634 11.245 4.711 15.688.165l182.849-186.851c19.613-20.062 19.613-52.725-.011-72.798-19.189-19.627-49.957-19.637-69.154 0L90.39 293.295c-34.763 35.56-35.299 93.12-1.191 128.313 34.01 35.093 88.985 35.137 123.058.286l172.06-175.999c6.177-6.319 16.307-6.433 22.626-.256l22.877 22.364c6.319 6.177 6.434 16.307.256 22.626l-172.06 175.998c-59.576 60.938-155.943 60.216-214.77-.485z"></path></svg>Прикрепить файл</label>
			</div>
			<button>Отправить</button>
		</form>
	</div>
</div>
</main>


<?php get_footer(); ?>


