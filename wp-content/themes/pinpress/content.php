<?php $tweet = $GLOBALS['currentTweet']; ?>
<article id="post-<?php $tweet['id']; ?>">
		<header class="entry-header">
			<h1 class="entry-title">
				<?php echo $tweet['entities']['embed_external_media']; ?>
				<a href="<?php echo $tweet['entities']['urls'][0]['url']; ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'pin'), $tweet['source'])); ?>" rel="bookmark"><?php echo $tweet['text']; ?></a>
			</h1>
		</header><!-- .entry-header -->

	</article><!-- #post -->