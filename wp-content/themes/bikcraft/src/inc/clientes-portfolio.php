<?php $portifolio = get_page_by_title('portifolio'); ?>
<ul class="portfolio_lista rslides_portfolio">
	<?php if(have_rows('item_portfolio', $portifolio)) : while(have_rows('item_portfolio', $portifolio)) : the_row(); ?>
		
			<li>
				<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem1' ); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao1',$portifolio);?>"></div>
				<div class="grid-8"><img src="<?php the_sub_field('portfolio_imagem2' ); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao2',$portifolio);?>"></div>
				<div class="grid-16"><img src="<?php the_sub_field('portfolio_imagem3'); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao3',$portifolio);?>"></div>
			</li>
		</ul>
	<?php endwhile; endif; ?>

<?php if(!is_page('portfolio')) { ?>
	<div class="call">
		<p><?php the_field('chamada_portifolio',$portifolio);?></p>
		<a href="/bikcraft/portfolio/" class="btn">Portfólio</a>
	</div>
<?php } ?>
