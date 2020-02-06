<?php
    global $chk;
    if(isset($_POST['wphw_submit'])){
            wphw_opt();
    }
    function wphw_opt(){
        $pageHeadertxt = $_POST['pageHeader'];
        $pageContenttxt = $_POST['pageContent'];

        global $chk;
        if( get_option('pageHeader') != trim($pageHeadertxt)){
            $chk = update_option( 'pageHeader', trim($pageHeadertxt));
        }
        if( get_option('pageContent') != trim($pageContenttxt)){
            $chk = update_option( 'pageContent', trim($pageContenttxt));
        }
    }
?>


<div class="wrap">
  
    <?php if(isset($_POST['wphw_submit']) && $chk):?>
        <div id="message" class="updated below-h2">
            <p>Content updated successfully</p>
        </div>
    <?php endif;?>



    <div class="metabox-holder">
        <div class="postbox"  style="padding:20px 10px;">
            
            <form method="post" action="">
                
                        <div>
                                <span >Page Header</span>
                                <input type="text" name="pageHeader" value="<?php echo get_option('pageHeader');?>"  />
                        </div>
                        <div>
                                <span scope="row">Page Content</span>  
                                <textarea type="text" name="pageContent" value="<?php echo get_option('pageContent');?>"  >
                                        <?php echo get_option('pageContent');?>                            
                                </textarea>                            
                        </div>

                        <div class="submitbtn">
                            <input type="submit" name="wphw_submit" value="Save changes" class="button-primary" />
                        </div>
            </form>


        </div>
    </div>


    
</div>




<style>
 form{
     margin:auto;
     padding: 20px;
 }

  form div{
      margin:1em .5em;
  }
 form span{
     font-size:17px;
     font-weight:bolder;
     margin:.1em 1em;
     vertical-align:top;
     display:inline-block; 
     width:8em;
 }

 form input{
     font-weight:bolder;
     margin: 0em .5em;
     width:500px;
 }

 form textarea{
     margin: 0em .5em;
     font-weight:bolder;
     width:500px;
     max-height:200px;
     min-height:200px;
 }

 .submitbtn{
padding-left:14em;
 }
.button-primary{
    width:150px;
    margin:auto;
}

</style>