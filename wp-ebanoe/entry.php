<main class="main-block single-post">
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
		<div class="post-title">
			<h2><?php the_title(); ?></h2>
			<?php if (has_post_thumbnail() ): ?>
			<div class="post-picture">
				<img src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<?php endif; ?>
		</div>
		<section class="content">
				<?php the_content(); ?>
		</section>




<div class="post-navigation">
	<div class="left">
<?php
$prev_post = get_previous_post();
if ( ! empty( $prev_post ) ): ?>
	<a href="<?php echo get_permalink( $prev_post->ID ); ?>" title="<?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>">
		Предыдущий пост
	</a>
<?php endif; ?>
	</div>
	<div class="center">
		<a href="<?php echo get_site_url();?>">На главную</a>
	</div>
	<div class="right">
<?php
$next_post = get_next_post();
if ( ! empty( $next_post ) ): ?>
	<a href="<?php echo get_permalink( $next_post->ID ); ?>" title="<?php echo apply_filters( 'the_title', $next_post->post_title ); ?>">
		Следующий пост
	</a>
<?php endif; ?>
	</div>
</div>

<?php if( get_field('telegram_url') ): ?>
	<div class="comments">
		<script async src="https://telegram.org/js/telegram-widget.js?15" data-telegram-discussion="<?php the_field('telegram_url');?>" data-comments-limit="5" data-color="54B3F8"></script>
	</div>
<?php endif; ?>


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
