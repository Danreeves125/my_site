<div class="breadcrumbs <?=(get_post_field( 'post_name' ) == 'blog-detail') ? 'breadcrumbs--margin25' : ''?>">
   <div class="container">
       <div class="breadcrumbs__list">
           <?php
           if(function_exists('bcn_display'))
           {
               bcn_display();
           }?>
       </div>
   </div>
</div>