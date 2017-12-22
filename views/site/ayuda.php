<?php
use yii\helpers\Url;
$theme = $this->theme;
?>


    <!-- ================================ -->
    <!-- ========== Enciclopedia ========== -->
    <!-- ================================ -->
    
        <div class="container-fuid" style="padding: 15px; background: #ecf0f5;">
            <div class="row">
                <div class="col-md-12" style="background: #fff; border-radius: 4px; border: 1px solid #367FA9;border-top: 4px solid #367FA9; padding: 20px;" >
                  <!-- Foreachs mostrar especialidades-->
                        <?php foreach($modelenfermedades  as $key => $val){?>
                            <?php if(count($modelenfermedades ) <= 1){ ?>
                              <?php } else { ?>
                                 <div class="col-md-12 " style="" >                            
                                	<div class="elements_news_c">
                                    	<div>
                                            <!--<img width="400" height="266" src="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/post/'.$val->post_image_1; ?>" class="attachment-blog_masonery wp-post-image" alt="Dental checkup" /> -->           
                                        </div>
                                    	   <div class="caption_news_c news_1">
                                        	<a href="<?php print $val->post_http;?>" ><div  class="icon">
                                            	
                                                
                                        	       </div></a>
                                                <h4><a href="<?php print $val->post_http.'?ayuda=ayuda';?>"><?php print $val->post_title;?></a></h4>
                                                
                                        <p><p><?php  print $val->post_summary;?>.</p></p>
                                    	</div>
                                	</div>
                                </div>

<?php } ?>
                                                          <?php } ?>
                </div>
            </div>
        </div>
    <!-- ================================ -->
    <!-- ========== End Blog Style ========== -->
    <!-- ================================ -->




