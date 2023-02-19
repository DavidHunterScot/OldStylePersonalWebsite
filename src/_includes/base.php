<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php if( isset( $page_title ) && $page_title ) echo $page_title . " - "; ?>David Hunter</title>
  </head>
  
  <body<?php if( isset( $background ) && $background ): ?> background="<?php echo $background; ?>"<?php endif; ?>>
    <font face="sans-serif"<?php if( isset( $color ) && $color ): ?> color="<?php echo $color; ?>"<?php endif; ?>>
      <center>
        <h1>David Hunter</h1>
        
        <?php if( isset( $color ) && $color ): ?>
          <p><a href="/"><font color="<?php echo $color; ?>">Home</font></a> <a href="/about"><font color="<?php echo $color; ?>">About</font></a> <a href="/contact"><font color="<?php echo $color; ?>">Contact</font></a></p>
        <?php else: ?>
          <p><a href="/">Home</a> <a href="/about">About</a> <a href="/contact">Contact</a></p>
        <?php endif; ?>
      </center>
      <hr>
      
      <?php if( isset( $page_content ) && is_callable( $page_content ) ) $page_content(); ?>
    </font>
  </body>
</html>
