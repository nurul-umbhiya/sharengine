<div id='wrap'>
    <h1><?php echo SE_NAME;?> Click To Share</h1>

    <div>
        <h2 style='display:inline-block' class="inline-title ">Tags: </h2>
        <input type='text' class='se_filter_facebook' style='width:200px;'/>
    </div>

    <div class='sharableContainer'>
        <?php foreach($se_tweets as $tweet){ ?>
            <div id="c45" class="module wide click-to-module">
                <!-- <div class="header module-header click-to-header">
                    <h3 class="module-title" data-tooltip="" aria-describedby="ui-tooltip-0"><?php echo $tweet['name'];?>



                    </h3>


                </div>-->

                <div class="module-content click-to-content">
                    <p style='text-align:right'> <button class='se_facebook_sharable button button-primary' style='float:right' value='Share'>Share</button></p>
                    <strong>Share Content:</strong>
                    <p class='se_twitter_content'> <?php echo stripslashes($tweet['content']);?></p>
                    <strong>URL:  </strong>
                    <p class=''> <a class='se_twitter_url' href='<?php echo $this->addScheme(do_shortcode(stripslashes($tweet['link'])));?>'><?php echo $this->addScheme(do_shortcode(stripslashes($tweet['link'])));?></a></p>
                    <strong>Image:  </strong>
                    <?php if($tweet['image']!='') {?>
                    <p class=''> <img width='200' class='se_twitter_image' src='<?php echo $this->addScheme(do_shortcode(stripslashes($tweet['image'])));?>'/></p>
                    <?php } ?>
                    <strong>Tags: </strong>

                    <p>
                        <?php foreach($se_tags[$tweet['id']] as $tag) {?>
                            <span id="BLJfR_1" class="tm-tag tm-tag-info"><span><?php echo $tag['tag'];?></span></span>
                        <?php }?>
                    </p>
                </div>
            </div>

        <?php } ?>
    </div>