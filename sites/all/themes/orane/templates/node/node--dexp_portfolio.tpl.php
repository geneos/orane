<div id="node-<?php print $node->nid; ?>" class="portfolio-details <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <?php print render($title_prefix); ?>
    <?php print render($title_suffix); ?>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_portfolio_images']);
    $portfolio_media = field_get_items('node',$node,'field_portfolio_media');
    $portfolio_skills = field_get_items('node',$node,'field_portfolio_skills');
    $portfolio_client = field_get_items('node',$node,'field_portfolio_client');
    $portfolio_website = field_get_items('node',$node,'field_portfolio_website');
    $portfolio_url = field_get_items('node',$node,'field_portfolio_url');
    $language=$node->language;
    ?>
    <div class="content row"<?php print $content_attributes; ?>>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php
            if ($portfolio_media) {
                print render($content['field_portfolio_media']);
            } else {
                print render($content['field_portfolio_images']);
            }
            ?>
          <div class="like-button">
            <?php print render($content['links']); ?>
          </div>  
        </div>
        <div class="col-lg-6 col-md-6 -col-sm-6 col-xs-12">
            <h3 class="portfolio-detail"><?php print t('Description'); ?></h3>

            <?php print render($content['body']);?>
            <ul class="item-details">
                <li><span><?php print t('Date Published');?>:</span> <?php print date('m/d/Y', $node->created); ?></li>
                <li><span><?php print t('Categories');?>:</span> <?php print render($content['field_portfolio_categories']); ?></li>
                <?php if ($portfolio_client): ?>
                    <li><span><?php print t('Client');?>:</span> <?php print render($content['field_portfolio_client'][0]); ?></li>
                <?php endif; ?>
                <?php if ($portfolio_skills): ?>
                    <li><span><?php print t('Skills');?>:</span> <?php print render($content['field_portfolio_skills'][0]); ?></li>
                <?php endif; ?>
                <?php if ($portfolio_website): ?>
                    <li><span><?php print t('Website');?>:</span> <a href="#"><?php print render($content['field_portfolio_website'][0]); ?></a></li>
                <?php endif; ?>
            </ul>
            <br/>
            <?php if ($portfolio_url): ?>
                <a class="btn btn-lager" href="<?php print render($content['field_portfolio_url'][0]); ?>"><?php print t('LAUNCH PROJECT');?></a>
            <?php endif; ?>
        </div>
    </div>
    
    <?php print render($content['comments']); ?>
</div>
